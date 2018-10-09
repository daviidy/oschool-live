@extends('layouts.menu-login')
@section('title', 'Ajouter une formation')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('supportformations.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter un support de formation
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="text" name="titre" placeholder="Titre du support" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Formation concernée</label>
          <select name="formation_id" class="form-control" style="" required>
            @foreach($formations as $formation)
            <option value="{{ $formation->id }}">{{ $formation->nom }}</option>
            @endforeach
          </select>
        </div>

        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="url" name="lien" placeholder="Lien Google drive du support" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ajouter le document
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
