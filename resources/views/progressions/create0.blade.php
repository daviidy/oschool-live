@extends('layouts.menu-login')
@section('title', 'Marquer une progression')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-02.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('progressions.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Créer une progression
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Titre de la progression</label>
          <input class="input100" type="text" name="titre" placeholder="Nom du support de cours...">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>

        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">URL du support</label>
          <input class="input100" type="text" name="lien" placeholder="Lien du support de cours...">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>

        </div>

        <div class="wrap-input100 validate-input" data-validate = "Jour de la séance">
          <label for="">Formation</label>
          <select name="formation_id" class="form-control" style="">
            @foreach($formations as $formation)
            <option value="{{ $formation->id }}">{{ $formation->nom }}</option>
            @endforeach
          </select>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Confirmez la formation</label>
          <select name="formation" class="form-control" style="">
            @foreach($formations as $formation)
            <option value="{{ $formation->nom }}">{{ $formation->nom }}</option>
            @endforeach
          </select>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Pour quel projet cette progression sera t-elle utile</label>
          <select name="formation" class="form-control" style="">
            @foreach($projets as $projet)
            <option value="{{ $projet->id }}">{{ $projet->titre }}</option>
            @endforeach
          </select>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Créer la progression
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="{{url('home')}}">
            Annuler
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
