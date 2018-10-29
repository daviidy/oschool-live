<?php

namespace App\Http\Controllers;

use App\Achat;
use App\User;
use App\Formation;
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
      $achats = Achat::orderby('created_at','asc')->paginate(30);
      return view('achats.index', ['achats' => $achats]);
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
      Session::put('montant', $request['montant']);
      Session::put('formation', $request['formation']);

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
        $params = array('cpm_amount' => Session::get('montant'),
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
        $formations = Formation::orderby('id','asc')->paginate(30);


        return view('achats.create',['signature' => str_replace('"',"",$resultat),
                                     'temps' => $temps,
                                     'time' => $time,
                                     'achats' => $achats,
                                     'montant' => Session::get('montant'),
                                     'formations' => $formations,
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
                          'tel' => Session::get('tel'),
                          'montant' => Session::get('montant'),
                          'formation' => Session::get('formation')
                        ]);

       //envoi mail utilisateur
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
      //on crée l'achat
      $achat=Achat::create([
                        'email' => Session::get('email'),
                        'nom' => Session::get('name'),
                        'prenoms' => Session::get('prenoms'),
                        'tel' => Session::get('tel'),
                        'montant' => Session::get('montant'),
                        'user_id' => Auth::user()->id,
                        'formation' => Session::get('formation')
                      ]);
      //on ajoute 30 jours à la date actuelle pour déterminer la date d'expiration de l'abonnement
      //et on met a jour le statut de l'étudiant
      $date_paiement = Carbon::now();
      Auth::user()->fin_abonnement = $date_paiement->addDays(30);
      Auth::user()->statut = 'OK';
      Auth::user()->save;

      //on met aussi a jour les informations du user comme son nom et prenoms
      if (Auth::user()->nom == "aucun nom") {
        Auth::user()->nom = $request['nom'];
        Auth::user()->save;
      }

      if (Auth::user()->prenoms == "aucun prénom") {
        Auth::user()->prenoms = $request['prenoms'];
        Auth::user()->save;
      }

     //envoi mail utilisateur (mail assignation formation)
      Mail::send('mailsAchat.mail', ['achat' => $achat], function($message) use ($achat){
        $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a bien été pris en compte !');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //envoi mail admin (mail assignation formation)
      Mail::send('mailsAchat.mail-admin', ['achat' => $achat], function($message) use ($achat){
        $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouveau paiement à Oschool Parcours');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });


      //inscrire etudiant a une formation si il n'est pas inscrit à une formation
      if(!count(Auth::user()->formations()))
      {
        $formation = Formation::where('nom', $request['formation'])->get();
        $user = User::find($request['user_id']);
        $user->formations()->attach($formation);
      }

      //sinon si il est inscrit a une ou plusieurs formations
      //on verifie si la formation achetée n'est pas dans ses formations
      elseif (!in_array($request['formation'], Auth::user()->formations())) {
        $formation = Formation::where('nom', $request['formation'])->get();
        $user = User::find($request['user_id']);
        $user->formations()->attach($formation);
      }

      return redirect('home')->with('status', 'Achat validé ! Suivez immédiatement les instructions que nous vous avons laissées dans votre boîte de réception.');

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
