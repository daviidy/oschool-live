@extends('layouts.menu-login')
@section('title', 'Ajouter une séance de cours')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('classrooms.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter une séance de cours effectuée avec un étudiant
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100 validate-input" data-validate = "Jour de la séance">
          <label for="">Jour de la séance</label>
          <input class="input100" type="date" name="date" placeholder="" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Etudiant</label>
          <select name="etudiant" class="form-control" style="" required>
            @foreach(Auth::user()->students as $student)
            <option value="{{ $student->name }}">{{ $student->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Confirmer l'étudiant</label>
          <select name="idEtudiant" class="form-control" style="" required>
            @foreach(Auth::user()->students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
          </select>
        </div>

        <div style="display: none;" class="wrap-input100 validate-input">
          <input class="input100" value="{{Auth::user()->name}}" type="text" name="formateur" placeholder="">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div style="display: none;" class="wrap-input100 validate-input">
          <input class="input100" value="{{Auth::user()->id}}" type="text" name="user_id" placeholder="">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input">
          <textarea required placeholder="Commentaire de la session" rows="50" style="height: 300px;" class="input100" name="commentaire" placeholder=""></textarea>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ajouter la séance
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="{{url('home')}}">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
