<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Image;
use Auth;
use App\Classroom;
use App\Progression;
use App\Formation;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()->isAdmin()) {
        $teachers = User::orderby ('id','asc')->where('type', 'teacher')->paginate(30);
        $students = User::orderby ('id','asc')->where('type', 'default')->paginate(30);
        return view('users.list', ['teachers' => $teachers, 'students' => $students]);
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
        if ($user->type == 'default') {
          $classroomsstudents = Classroom::where('etudiant', $user->name)->get();
          $teachers = User::orderby ('id','asc')->where('type', 'teacher')->paginate(30);
          return view('users.show', ['user' => $user, 'teachers' => $teachers, 'classroomsstudents' => $classroomsstudents]);
        }
        $teachers = User::orderby ('id','asc')->where('type', 'teacher')->paginate(30);
        return view('users.show', ['user' => $user, 'teachers' => $teachers]);
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
      return redirect('home')->with('status', 'L\'utilisateur a bien été supprimé');;
    }
}
