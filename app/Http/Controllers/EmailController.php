<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\User;
use App\Contact;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check() && Auth::user()->type3 == "admin") {
          $emails = Email::orderby('id', 'asc')->paginate(30);
          return view('emails.index', ['emails' => $emails]);
        }

      else {
        return redirect('home');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check() && Auth::user()->type3 == 'admin') {
        return view('emails.create');
      }
      else {
        return redirect('home');
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
        $email = Email::create($request->all());
        if ($email->titre == "Intérêt Parcours") {
          return view('emails.interet_parcours', ['email' => $email]);
        }
        elseif ($email->titre == "Gazette Etudiants") {
          return view('emails.gazette_etudiants', ['email' => $email]);
        }
        elseif ($email->titre == "Gazette Formateurs") {
          return view('emails.gazette_formateurs', ['email' => $email]);
        }
        elseif ($email->titre == "Top Semaine") {
          return view('emails.top_semaine', ['email' => $email]);
        }
        elseif ($email->titre == "Message Ceo") {
          return view('emails.message_ceo', ['email' => $email]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
      if ($email->titre == "Intérêt Parcours") {
        return view('emails.interet_parcours', ['email' => $email]);
      }
      elseif ($email->titre == "Gazette Etudiants") {
        return view('emails.gazette_etudiants', ['email' => $email]);
      }
      elseif ($email->titre == "Gazette Formateurs") {
        return view('emails.gazette_formateurs', ['email' => $email]);
      }
      elseif ($email->titre == "Top Semaine") {
        return view('emails.top_semaine', ['email' => $email]);
      }
      elseif ($email->titre == "Message Ceo") {
        return view('emails.message_ceo', ['email' => $email]);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
      $email->update($request->all());

      if ($email->titre == "Intérêt Parcours") {
        $users = Contact::where('parcours', $email->parcours)->orderby('id', 'asc')->paginate(1000);
        foreach ($users as $user) {
          //envoi mail utilisateur inscription
           Mail::send('mails.interet_parcours', ['email' => $email, 'user' => $user], function($message) use($user){
             $message->to($user->email, 'Notre sélection pour vous')->subject('Notre sélection pour vous');
             $message->from('eventsoschool@gmail.com', 'Oschool');
           });
        }
        return redirect('emails')->with('status', 'Le mail a bien été envoyé !');
      }
      elseif ($email->titre == "Gazette Etudiants") {

        $users = User::orderby('id', 'asc')->paginate(1000);
        foreach ($users as $user) {
          if ($user->type == 'default' && count($user->formations) && $user->type2 !== 'teacher' && $user->type3 !== 'admin') {
            //envoi mail utilisateur inscription
             Mail::send('mails.gazette_etudiants', ['email' => $email, 'user' => $user], function($message) use($user){
               $message->to($user->email, 'La gazette des étudiants')->subject('La gazette des étudiants');
               $message->from('eventsoschool@gmail.com', 'Oschool');
             });
          }

        }
        return redirect('emails')->with('status', 'Le mail a bien été envoyé !');
      }
      elseif ($email->titre == "Gazette Formateurs") {

        $users = User::where('type2', 'teacher')->orderby('id', 'asc')->paginate(1000);
        foreach ($users as $user) {
          //envoi mail utilisateur inscription
           Mail::send('mails.gazette_formateurs', ['email' => $email, 'user' => $user], function($message) use($user){
             $message->to($user->email, 'La gazette des formateurs')->subject('La gazette des formateurs');
             $message->from('eventsoschool@gmail.com', 'Oschool');
           });
        }
        return redirect('emails')->with('status', 'Le mail a bien été envoyé !');
      }
      elseif ($email->titre == "Top Semaine") {

        $users = User::orderby('id', 'asc')->paginate(1000);
        foreach ($users as $user) {
          //envoi mail utilisateur inscription
           Mail::send('mails.top_semaine', ['email' => $email, 'user' => $user], function($message) use($user){
             $message->to($user->email, 'Voici le top de la semaine')->subject('Voici le top de la semaine');
             $message->from('eventsoschool@gmail.com', 'Oschool');
           });
        }

        $contacts = Contact::orderby('id', 'asc')->paginate(1000);
        foreach ($contacts as $user) {
          //envoi mail utilisateur inscription
           Mail::send('mails.top_semaine', ['email' => $email, 'user' => $user], function($message) use($user){
             $message->to($user->email, 'Voici le top de la semaine')->subject('Voici le top de la semaine');
             $message->from('eventsoschool@gmail.com', 'Oschool');
           });
        }

        return redirect('emails')->with('status', 'Le mail a bien été envoyé !');
      }
      elseif ($email->titre == "Message Ceo") {

        //on cible les contacts dont le parcours = email->parcours = aucun
      /*  $users = Contact::where('parcours', $email->parcours)->orderby('id', 'asc')->paginate(1000);*/

        $users = Contact::orderby('id', 'asc')->paginate(1000);
        foreach ($users as $user) {
          //envoi mail utilisateur inscription
           Mail::send('mails.message_ceo', ['email' => $email, 'user' => $user], function($message) use($user){
             $message->to($user->email, 'Prenez en main votre avenir')->subject('Prenez en main votre avenir');
             $message->from('eventsoschool@gmail.com', 'Oschool');
           });
        }
        return redirect('emails')->with('status', 'Le mail a bien été envoyé !');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }
}
