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
use Auth;

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
      if (Auth::check() && Auth::user()->isAdmin()) {
        $users = User::orderby('id','asc')->paginate(1000);
        $formations = Formation::orderby('id','asc')->paginate(30);
        return view('achats.ajout', ['users' => $users, 'formations' => $formations]);
      }

    }

    //recuperation des infos utilisateur a envoyer
    //a la page de paiement

    public function envoi(Request $request)
    {

      Session::put('name', $request['nom']);
      Session::put('prenoms', $request['prenoms']);
      Session::put('email', $request['email']);
      Session::put('tel', $request['tel']);

      Session::put('formation', $request['formation']);

      Session::put('montant', $request['montant']);


      //on verifie si le code promo est exact, sinon on garde le montant initial
      if ($request['promo'] == 'OSCHOOL2019') {
        $montant = '100';
        Session::put('montant', $montant);
      }

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

        //on crée l'achat qui aura un statut en cours par défaut
        $achat=Achat::create([
                          'email' => $request['email'],
                          'nom' => $request['nom'],
                          'prenoms' => $request['prenoms'],
                          'tel' => $request['tel'],
                          'montant' => $request['montant'],
                          'formation' => $request['formation'],
                          'trans_id' => $temps,
                          'signature' => str_replace('"',"",$resultat),
                          'date' => Carbon::now(),
                          'user_id' => $request['user_id'],
                          'type' => $request['type'],
                        ]);


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



    //on récupère la signature stockée dans la bdd et qui correspond au trans_id de l'achat
    //on obtient une collection
    //etant donné qu'on sait que c'est un seul élément qu'on aura dans la collection
    //on peut utiliser la methode first pour le transformer en objet
    $achat = Achat::where('trans_id', $request['cpm_trans_id'])->first();
    if ($achat->statut == 'Validé') {
      return;
    }


      //on fait un api call a https://api.cinetpay.com/v1/?method=checkPayStatus avec
      //les donnees recueillies dans $request (trans_id et site_id)
      //et notre apikey etant deja connu

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

      if ($json['transaction']['cpm_result'] == '00' && $json['transaction']['cpm_amount'] == $achat->montant && $json['transaction']['signature'] == $achat->signature)
      {

                  //on récupère l'id Utilisateur
                  $user = User::find($achat->user_id);

                  //on met le statut de l'achat à jour
                    $achat->statut = 'Validé';
                    $achat->save();

                  //on ajoute 30 jours à la date actuelle pour déterminer la
                  //date d'expiration de l'abonnement
                  //et on met a jour le statut de l'étudiant
                  $date_paiement = Carbon::now();
                  $user->fin_abonnement = $date_paiement->addDays(30);
                  $user->statut = 'OK';
                  $user->save();

                  //on met aussi a jour les informations du user comme son nom et prenoms
                  if ($user->nom == "aucun nom") {
                    $user->nom = $achat->nom;
                    $user->save();
                  }

                  if ($user->prenoms == "aucun prénom") {
                    $user->prenoms = $achat->prenoms;
                    $user->save();
                  }

                  //si l'étudiant n'est pas déjà
                  //inscrit a la formation en question
                  //on l'inscrit

                    $formation = Formation::where('nom', $achat->formation)->first();

                    if ($achat->type == 'new') {

                      $user->formations()->attach($formation);
                      //envoi mail utilisateur inscription
                       Mail::send('mailsAchat.mail', ['achat' => $achat], function($message) use($achat){
                         $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre inscription a été effectuée avec succès !');
                         $message->from('eventsoschool@gmail.com', 'Oschool');
                       });

                       //envoi mail admin inscription
                       Mail::send('mailsAchat.mail-admin', ['achat' => $achat], function($message) use($achat){
                         $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Une commande a été traitée avec succès');
                         $message->from('eventsoschool@gmail.com', 'Oschool');
                       });
                    }
                    else {
                      //envoi mail utilisateur reabonnement
                       Mail::send('mailsAchat.renew', ['achat' => $achat], function($message) use($achat){
                         $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre renouvellement a été effectué avec succès !');
                         $message->from('eventsoschool@gmail.com', 'Oschool');
                       });

                       //envoi mail admin reabonnement
                       Mail::send('mailsAchat.renew-admin', ['achat' => $achat], function($message) use($achat){
                         $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Une commande a été traitée avec succès');
                         $message->from('eventsoschool@gmail.com', 'Oschool');
                       });

                  }

        }


      else {
        //envoi mail admin
        Mail::send('mailsAchat.echec', ['cpm_result' => $json['transaction']['cpm_result'], 'signature' => '5aae6b75723132259953e7c3c2746e58334a7b8fc11104c7e53a4a8ad71b50f9'], function($message){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Echec de paiement pour Oschool code');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
      }


    } //fin fonction notify



    /**
     * Pour une nouvelle inscription
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
      Auth::user()->save();

      //on met aussi a jour les informations du user comme son nom et prenoms
      if (Auth::user()->nom == "aucun nom") {
        Auth::user()->nom = $request['nom'];
        Auth::user()->save();
      }

      if (Auth::user()->prenoms == "aucun prénom") {
        Auth::user()->prenoms = $request['prenoms'];
        Auth::user()->save();
      }

     //envoi mail utilisateur pour notification de paiement
      Mail::send('mailsAchat.mail', ['achat' => $achat], function($message) use ($achat){
        $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a bien été pris en compte !');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //envoi mail admin pour notification de paiement
      Mail::send('mailsAchat.mail-admin', ['achat' => $achat], function($message) use ($achat){
        $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouveau paiement à Oschool Parcours');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //étant donné que c'est un premier et nouvel achat, on suppose que l'étudiant n'est pas
      //encore inscrit à la formation, donc
      //inscrire etudiant a la formation

        $formation = Formation::where('nom', $request['formation'])->get();
        $user = User::find(Auth::user()->id);
        $user->formations()->attach($formation);

        //envoi mail pour notifier l'ajout à une formation
        Mail::send('mails.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to($user->email, 'Cher(ère) Utilisateur(trice)')->subject('Vous avez été ajouté à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin pour notifier l'ajout à une formation
        Mail::send('mailsAdmin.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouvelle inscription à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

      return redirect('home')->with('status', 'Achat validé ! Suivez immédiatement les instructions que nous vous avons laissées dans votre boîte de réception.');

    }

    /*fonction pour ajouter un achat manuellement*/

    public function achat(Request $request)
    {


      //on crée l'achat
      $achat=Achat::create($request->all());
      //on ajoute 30 jours à la date actuelle pour déterminer la date d'expiration de l'abonnement
      //et on met a jour le statut de l'étudiant

      $date_paiement = Carbon::parse($request['date']);
      $user = User::where('id', $request['user_id'])->first();
      $user->fin_abonnement = $date_paiement->addDays(30);
      $user->statut = 'OK';
      $user->save();

      //on met aussi a jour les informations du user comme son nom et prenoms
      if ($user->nom == "aucun nom") {
        $user->nom = $request['nom'];
        $user->save();
      }

      if ($user->prenoms == "aucun prénom") {
        $user->prenoms = $request['prenoms'];
        $user->save();
      }

      /*
     //envoi mail utilisateur (mail notification achat)
      Mail::send('mailsAchat.mail', ['achat' => $achat], function($message) use ($achat){
        $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a été effectué avec succès !');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });
      */

      //envoi mail admin (mail notification achat)
      Mail::send('mailsAchat.mail-admin', ['achat' => $achat], function($message) use ($achat){
        $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour ajout manuel d\'un achat de Parcours Oschool');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //étant donné que c'est l'admin qui fait cet ajout
      //pas besoin d'inscrire l'étudiant à la formation
      //l'admin le fera manuellement


      /*
      //inscrire etudiant a une formation si il n'est pas inscrit à une formation
      if(!Auth::user()->formations())
      {
        $formation = Formation::where('nom', $request['formation'])->get();
        $user = User::find($request['user_id']);
        $user->formations()->attach($formation);

        //envoi mail pour notifier l'ajout à une formation
        Mail::send('mails.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to($user->email, 'Cher(ère) Utilisateur(trice)')->subject('Vous avez été ajouté à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin pour notifier l'ajout à une formation
        Mail::send('mailsAdmin.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouvelle inscription à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
      }

      //sinon si il est inscrit a une ou plusieurs formations
      //on verifie si la formation achetée n'est pas dans ses formations
      elseif (!in_array($request['formation'], Auth::user()->formations())) {
        $formation = Formation::where('nom', $request['formation'])->get();
        $user = User::find($request['user_id']);
        $user->formations()->attach($formation);

        //envoi mail pour notifier l'ajout à une formation
        Mail::send('mails.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to($user->email, 'Cher(ère) Utilisateur(trice)')->subject('Vous avez été ajouté à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin pour notifier l'ajout à une formation
        Mail::send('mailsAdmin.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouvelle inscription à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
      }
      */

      return redirect('home')->with('status', 'Achat validé ! Suivez immédiatement les instructions que nous vous avons laissées dans votre boîte de réception.');


    }

/*fonction pour renouveler son abonnement */
    public function renew(Request $request)
    {

      //on crée l'achat
      $achat=Achat::create($request->all());
      //on ajoute 30 jours à la date actuelle pour déterminer la date d'expiration de l'abonnement
      //et on met a jour le statut de l'étudiant
      $date_paiement = Carbon::now();
      Auth::user()->fin_abonnement = $date_paiement->addDays(30);
      Auth::user()->statut = 'OK';
      Auth::user()->save();

      //on met aussi a jour les informations du user comme son nom et prenoms
      if (Auth::user()->nom == "aucun nom") {
        Auth::user()->nom = $request['nom'];
        Auth::user()->save();
      }

      if (Auth::user()->prenoms == "aucun prénom") {
        Auth::user()->prenoms = $request['prenoms'];
        Auth::user()->save();
      }

     //envoi mail utilisateur (mail assignation formation)
      Mail::send('mailsAchat.renew', ['achat' => $achat], function($message) use ($achat){
        $message->to($achat->email, 'Cher(ère) Etudiant(e)')->subject('Votre renouvellement a été effectué avec succès !');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //envoi mail admin (mail assignation formation)
      Mail::send('mailsAchat.renew-admin', ['achat' => $achat], function($message) use ($achat){
        $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Renouvellement à un Parcours Oschool');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });



      return redirect('home')->with('status', 'Renouvellment effectué ! Votre abonnement est valide jusqu\'au '.Carbon::parse(Auth::user()->fin_abonnement)->format('d-m-Y H:i'));


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
