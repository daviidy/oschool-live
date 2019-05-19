<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Image;
use Auth;
use App\Classroom;
use App\Progression;
use App\Formation;
use App\Achat;
use Mail;
use DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function default()
    {
      $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);

      if (Auth::check()) {
        return view('users.dashboard', ['teachers' => $teachers]);
      }
      else {
        return redirect('home');
      }
    }


    //voir l'état d'abonnement des étudiants

    public function statutCheck()
    {
      if (Auth::user()->type3 == "admin")
      {
        $date = Carbon::now();
        //get users which subscription expires in 10 days
        $users = User::where('type', 'default')->where('type2', 'aucun')->where('type3', 'aucun')->orderby('id', 'asc')->paginate(1000);

        foreach ($users as $user) {
          //dans le cas où la date a expiré
          if ($user->fin_abonnement < $date && count($user->formations))
          {
            $user->statut = 'aucun';
            $user->save();


            if ($user->user_id != 0) {
              $teacher = User::find($user->user_id);
              //on envoie message à son formateur
              Mail::send('mails.expiration_notif', ['user' => $user], function($message) use ($user, $teacher){
                $message->to($teacher->email, 'Oschool')->subject('Annulation de la formation de '.$user->name);
                $message->from('eventsoschool@gmail.com', 'Oschool');
              });

            }



            //Send email to the users
            Mail::send('mails.expiration', ['user' => $user], function($message) use ($user){
              $message->to($user->email, 'Oschool')->subject('Votre abonnement Oschool a expiré');
              $message->from('eventsoschool@gmail.com', 'Oschool');
            });

            //on supprime le formateur
            $user->user_id = '0';
            $user->save();
            //on supprime l'utilisateurde la formation
            $user->formations()->detach();
          }

          // dans le cas où la date va bientôt arriver à expiration
          elseif ($user->fin_abonnement->subDays(10) <= $date && $user->fin_abonnement >= $date && count($user->formations))
          {
            //Send email to the users
            Mail::send('mails.fin-abonnement', ['user' => $user], function($message) use ($user){
              $message->to($user->email, 'Oschool')->subject('Votre abonnement va bientôt prendre fin !');
              $message->from('eventsoschool@gmail.com', 'Oschool');
            });
          }

        }//fin foreach

      }

      else {
        return redirect('home');
      }

        return redirect('paiements')->with('status', 'Le statut des abonnés a bien été mis à jour');
      }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()->isAdmin()) {
        $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(1000);
        $students = User::orderby ('id','asc')->where('type', 'default')->paginate(1000);
        $formations = Formation::orderby ('id','asc')->paginate(1000);
        return view('users.list', ['teachers' => $teachers, 'students' => $students, 'formations' => $formations]);
      }
      else {
        return redirect('home');
      }
    }


    public function accueil()

    {

        $formations = Formation::orderby ('id','asc')->paginate(30);
        return view('accueil', ['formations' => $formations]);

    }

    //fonction pour voir la page factures (ou on demandera au prof de choisir un mois
    //et une annee)
    public function factures(Request $request)

    {
      if (Auth::check() && Auth::user()->isTeacher()) {
        return view('users.factures');
      }
      else {
        return redirect('home');
      }

    }


    //fonction pour affichern la page de parametres de l'utilisateur
    public function settings()

    {
      if (Auth::check()) {
        return view('users.settings');
      }
      else {
        return redirect('home');
      }

    }


    //fonction pour permettre aux profs de voir ses etudiants

    public function mesEtudiants()

    {
      if (Auth::check() && Auth::user()->type2 == 'teacher') {
        return view('users.etudiants');
      }
      else {
        return redirect('home');
      }

    }





    //fonction pour voir la page facturation du professeur
    public function moisFactures(Request $request)

    {
      //on récupere le mois et l'annee choisi par le prof, et on les caste en entier
      //ensuite on selectionne toutes les sessions du mois, de l'annee et appartenant
      //au prof

      if (Auth::check() && Auth::user()->isTeacher()) {
      $mois = (int)$request['month'];
      $an = (int)$request['year'];
      $classrooms = Classroom::whereMonth('date', '=', $mois)->whereYear('date', '=', $an)->where('user_id', Auth::user()->id)->where('statut', 'Réalisée')->get();
      return view('includes.settings.mois_facturation_teacher', ['classrooms' => $classrooms, 'mois' => $mois, 'an' => $an]);
      }
      else {
        return redirect('home');
      }
    }


    //fonction pour voir la page paiments pour les admins (ou on demandera a l'admin de choisir un mois
    //et une annee)
    public function paiements(Request $request)

    {
      if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->type4 == "partner") {
        return view('users.paiements');
      }
      else {
        return redirect('home');
      }

    }


    //fonction pour voir la page paiements pour les admins
    public function moisPaiements(Request $request)

    {
      //on récupere le mois et l'annee choisi par le prof, et on les caste en entier
      //ensuite on selectionne toutes les sessions du mois, de l'annee et appartenant
      //au prof
      if (Auth::check() && Auth::user()->isAdmin()) {

        $mois = (int)$request['month'];
        $an = (int)$request['year'];
        //montant total des achats toute formation confondue
        $total = Achat::whereMonth('date', '=', $mois)->whereYear('date', '=', $an)->where('statut', 'Validé')->sum('montant');
        //ensemble de tous les achats
        $achats = Achat::whereMonth('date', '=', $mois)->whereYear('date', '=', $an)->get();
        return view('users.moisPaiements', ['achats' => $achats, 'mois' => $mois, 'an' => $an, 'total' => $total]);
      }
      elseif (Auth::check() && Auth::user()->type4 == "partner") {
        $formation = $request['formation'];
        $mois = (int)$request['month'];
        $an = (int)$request['year'];
        $total = Achat::where('formation', $formation)->whereMonth('date', '=', $mois)->whereYear('date', '=', $an)->where('statut', 'Validé')->sum('montant');
        $achats = Achat::where('formation', $formation)->whereMonth('date', '=', $mois)->whereYear('date', '=', $an)->get();
        return view('users.moisPaiements', ['achats' => $achats, 'mois' => $mois, 'an' => $an, 'total' => $total]);
      }
      else {
        return redirect('home');
      }
    }




    //fonction pour voir la page des sessions de prof (pour les admins seulement)
    //l'admin choisit le mois et l'année
    public function rapportProf(Request $request)

    {
      if (Auth::check() && Auth::user()->isAdmin()) {
        return view('users.rapport-sessions');
      }
      else {
        return redirect('home');
      }

    }


    //fonction pour voir la page des sessions des profs pour un mois donné
    public function rapportMoisProf(Request $request)

    {
      //on récupere le mois et l'annee choisi par le prof, et on les caste en entier
      //ensuite on selectionne toutes les sessions du mois, de l'annee et appartenant
      //au prof
      if (Auth::check() && Auth::user()->isAdmin()) {
      $mois = (int)$request['month'];
      $an = (int)$request['year'];
      $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(1000);
      $classrooms = Classroom::whereMonth('date', '=', $mois)->whereYear('date', '=', $an)->where('statut', 'Réalisée')->get();
      return view('users.rapport-sessions-mois', ['teachers' => $teachers, 'mois' => $mois, 'an' => $an, 'classrooms' => $classrooms]);
      }
      else {
        return redirect('home');
      }

    }










    //montrer les guides formateurs aux formateurs

    public function documentsTeacher()
    {
      if (Auth::user()->isTeacher() || Auth::user()->isAdmin()) {
        return view('users.docTeacher');
      }
      else {
        return redirect('home');
      }
    }

    //montrer les guides étudiants aux étudiants

    public function documentsStudent()
    {
      if (!Auth::user()->isTeacher() || Auth::user()->isAdmin()) {
        return view('users.docStudent');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Inscrire un étudiant à une formation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //function to add manually a user to a given course
    public function inscription(Request $request)
    {
      //première chose, on retrouve l'étudiant à partir de l'id envoyé en paramètre
      //secondo on attache cet etudiant à la formation en question

      if (Auth::check() && Auth::user()->isAdmin() ) {
        $formation = Formation::find($request['formation_id']);
        $user = User::find($request['user_id']);
        $user->formations()->attach($formation);

        //envoi mail inscrit
        Mail::send('mails.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to($user->email, 'Cher(ère) Utilisateur(trice)')->subject('Vous avez été ajouté à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin
        Mail::send('mailsAdmin.inscription-formation', ['user' => $user, 'formation' => $formation], function($message) use ($user){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Notification pour nouvelle inscription à une formation');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        return redirect('home')->with('status', 'L\'utilisateur a bien été inscrit à la formation');
      }
      else {
        return redirect('home');
      }


    }


    public function inscrire(User $user)
    {
      //première chose, on retrouve l'étudiant à partir de l'id envoyé en paramètre
      //secondo on attache cet etudiant à la formation en question

      if (Auth::check() && Auth::user()->isAdmin() ) {
        $formations = Formation::orderby ('id','asc')->paginate(30);
        return view('users.inscription', ['user' => $user, 'formations' => $formations]);
      }
      else {
        return redirect('home');
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if ($user->type == 'default' && $user->type2 !== 'teacher' && $user->type3 !== 'admin') {
          $classrooms = Classroom::where('etudiant', $user->name)->paginate(30);
          $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);
          return view('users.show', ['user' => $user, 'teachers' => $teachers, 'classrooms' => $classrooms]);
        }
        elseif ($user->type2 == 'teacher') {
          $classrooms = Classroom::where('formateur', $user->name)->paginate(30);
          $teachers = User::orderby ('id','asc')->where('type2', 'teacher')->paginate(30);
          return view('users.show', ['user' => $user, 'teachers' => $teachers, 'classrooms' => $classrooms]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $user->update($request->all());

      if ($request['user_id']) {
        //envoi mail étudiant
        Mail::send('mails.attribution-formateur', ['user' => $user], function($message) use ($user){
          $message->to($user->email, 'Cher(ère) Etudiant(e)')->subject('Vous avez un nouveau formateur');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail teacher
        Mail::send('mailsTeacher.attribution-formateur', ['user' => $user], function($message) use ($user){
          $message->to($user->teacher->email, 'A '.$user->teacher->name)->subject('Vous avez un nouvel étudiant !');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin
        Mail::send('mailsAdmin.attribution-formateur', ['user' => $user], function($message) use ($user){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Un étudiant a recu un nouveau formateur !');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
      }

      if($request->hasFile('photo')){
        $image = $request->file('photo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/avatars/users/' . $filename));
        $user->photo = $filename;
        $user->save();
    }
    return back()->with('status', 'Vos informations ont bien été entregistrées !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $user->delete();
      return redirect('home')->with('status', 'L\'utilisateur a bien été supprimé');
    }
}
