<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Mail;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check() && Auth::user()->type2 !== "teacher") {
          $classrooms = Classroom::where('etudiant', Auth::user()->name)->orderby('date', 'desc')->paginate(30);
          return view('classrooms.index', ['classrooms' => $classrooms]);
        }
      elseif (Auth::check() && Auth::user()->type2 == "teacher") {
          $sessions = Classroom::where('formateur', Auth::user()->name)->orderby('date', 'desc')->paginate(30);
          return view('classrooms.index', ['sessions' => $sessions]);
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
    public function create(Request $request)
    {
        if (Auth::check() && Auth::user()->isTeacher()) {
          $students = Auth::user()->students()->where('statut', 'OK')->get();
          return view('classrooms.ajouter', ['students' => $students]);
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
      $classroom = Classroom::create($request->all());

      $user = User::find($request['idEtudiant']);

      //envoi mail étudiant
      Mail::send('mails.planification-session', ['classroom' => $classroom, 'user' => $user], function($message) use ($user){
        $message->to($user->email, 'Cher(ère) Etudiant(e)')->subject('Une nouvelle séance de formation a été programmée pour toi');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //envoi mail teacher
      Mail::send('mailsTeacher.planification-session', ['classroom' => $classroom], function($message) use ($classroom){
        $message->to(Auth::user()->email, 'A '.Auth::user()->name)->subject('Vous venez de programmer une nouvelle séance de formation');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      return redirect('classrooms')->with('status', 'La session a bien été créée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit', ['classroom' => $classroom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $classroom->update($request->all());

        $detail=$request->commentaire;

        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getelementsbytagname('img');

        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/img/classrooms/'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', '/img/classrooms/'. $image_name);
        }

        $detail = $dom->savehtml();
        $classroom->commentaire = $detail;
        $classroom->save();
        return redirect('classrooms')->with('status', 'Vos informations ont bien été entregistrées !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
