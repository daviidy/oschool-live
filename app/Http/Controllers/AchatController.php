<?php

namespace App\Http\Controllers;

use App\Achat;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;

class AchatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function envoi(Request $request)
    {
      Session::put('name', $request['nom']);
      Session::put('prenoms', $request['prenoms']);
      Session::put('email', $request['email']);
      Session::put('tel', $request['tel']);

      function postData($params, $url)
          {
           try {
           $curl = curl_init();
           $postfield = '';
           foreach ($params as $index => $value) {
           $postfield .= $index . '=' . $value . "&";
           }
           $postfield = substr($postfield, 0, -1);
           curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 45,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => $postfield,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/x-www-form-urlencoded",
           ),
           ));
           $response = curl_exec($curl);
           $err = curl_error($curl);
           curl_close($curl);
           if ($err) {
           throw new Exception("cURL Error #:" . $err);
           return $err;
           } else {
           return $response;
           }
           } catch (Exception $e) {
           throw new Exception($e);
           }
          }
          $time = Carbon::now();
          $temps = date("YmdHis");
        $params = array('cpm_amount' => '30000',
                        'cpm_currency' => 'CFA',
                        'cpm_site_id' => '113043',
                        'cpm_trans_id' => $temps,
                        'cpm_trans_date' => $time,
                        'cpm_payment_config' => 'SINGLE',
                        'cpm_page_action' => 'PAYMENT',
                        'cpm_version' => 'V1',
                        'cpm_language' => 'fr',
                        'cpm_designation' => 'Achat Oschool Live',
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $signature = json_decode($resultat, true);

        $achats= Achat::orderby('id','asc')->paginate(30);

/*
        Session::put('trans_id', $temps);

        */
        Session::put('signature', str_replace('"',"",$resultat));


        return view('achats.create',['signature' => str_replace('"',"",$resultat),
                                     'temps' => $temps,
                                     'time' => $time,
                                     'achats' => $achats
                                   ]);

    }


    public function notify(Request $request){

      //cinetpay envoie a l'app des données en post apres le premier api call
      //il faut decoder la reponse et en ressortir les parametres apikey, site i et trans id

    /*  $trans_id = Session::get('trans_id');
    */

    //on récupère la signature stockée dans la bdd (session a vrai dire ;)
      $oldSignature = Session::get('signature');

      //on fait un api call a https://api.cinetpay.com/v1/?method=checkPayStatus avec
      //les donnees recueillies dans $request (trans_id et site_id)
      //apikey etant deja connu et a notre disposition

      function postData($params, $url)
          {
           try {
           $curl = curl_init();
           $postfield = '';
           foreach ($params as $index => $value) {
           $postfield .= $index . '=' . $value . "&";
           }
           $postfield = substr($postfield, 0, -1);
           curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 45,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => $postfield,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/x-www-form-urlencoded",
           ),
           ));
           $response = curl_exec($curl);
           $err = curl_error($curl);
           curl_close($curl);
           if ($err) {
           throw new Exception("cURL Error #:" . $err);
           return $err;
           } else {
           return $response;
           }
           } catch (Exception $e) {
           throw new Exception($e);
           }
          }
          $time = Carbon::now();
          $temps = date("YmdHis");
        $params = array(
                        'cpm_site_id' => $request['cpm_site_id'],
                        'cpm_trans_id' => $request['cpm_trans_id'],
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=checkPayStatus";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $json = json_decode($resultat, true);

        //apres avoir décodé la reponse de l'apî call on fait les tests

      if ($json->transaction->cpm_result == '00' && $json->transaction->cpm_amount == '30000' && $json->transaction->signature == $oldSignature) {

        $achat=Achat::create([
                          'email' => Session::get('email'),
                          'nom' => Session::get('name'),
                          'prenoms' => Session::get('prenoms'),
                          'tel' => Session::get('tel')
                        ]);

       //envpi mail utilisateur
        Mail::send('mailsAchat.mail', ['achat' => $achat], function($message) use ($achat){
          $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre inscription a bien été pris en compte !');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin
        Mail::send('mailsAchat.mail-admin', ['achat' => $achat], function($message) use ($achat){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouvelle inscription à Oschool Code');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
        return redirect('/')->with('status', 'Achat validé ! Suivez immédiatement les instructions que nous vous avons laissées dans votre boîte de réception.');

      }

      else {
        //envoi mail admin
        Mail::send('mailsAchat.echec', ['achat' => $achat], function($message) use ($achat){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Echec de paiement pour Oschool code');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
      }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $achat=Achat::create([
                        'email' => Session::get('email'),
                        'nom' => Session::get('name'),
                        'prenoms' => Session::get('prenoms'),
                        'tel' => Session::get('tel')
                      ]);

     //envpi mail utilisateur
      Mail::send('mailsAchat.mail', ['achat' => $achat], function($message) use ($achat){
        $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre inscription a bien été pris en compte !');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //envoi mail admin
      Mail::send('mailsAchat.mail-admin', ['achat' => $achat], function($message) use ($achat){
        $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouvelle inscription à Oschool Code');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });
      return redirect('/')->with('status', 'Achat validé ! Suivez immédiatement les instructions que nous vous avons laissées dans votre boîte de réception.');

    }

    public function achat()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function show(Achat $achat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achat $achat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        //
    }
}
