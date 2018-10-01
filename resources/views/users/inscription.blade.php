@extends('layouts.menu-login')
@section('title', 'Inscrire un étudiant à une formation')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{url('inscription')}}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter un nouvel utilisateur à une formation
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Nom d'utilisateur</label>
          <select name="user_id" class="form-control" style="" required>
            <option value="{{ $user->id }}">{{ $user->name }}</option>
          </select>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Formation</label>
          <select name="formation_id" class="form-control" style="" required>
            @foreach($formations as $formation)
            <option value="{{ $formation->id }}">{{ $formation->nom }}</option>
            @endforeach
          </select>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ajouter l'utilisateur
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
