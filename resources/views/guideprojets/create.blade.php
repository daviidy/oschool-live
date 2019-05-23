@extends('layouts.menu-login')
@section('title', 'Ajouter un guide projet')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="display: block;margin-left: auto;margin-right: auto;width: 25%;" src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('guideprojets.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter un guide projet
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="text" name="title" placeholder="Titre du guide" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="url" name="link" placeholder="Lien du guide" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Quel est le type du guide ?</label>
          <select name="type" class="form-control" style="" required>
            <option value="video">Vidéo</option>
            <option value="texte">Texte</option>
          </select>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Quel est le projet concerné ?</label>
          <select name="projet_id" class="form-control" style="" required>
            @foreach($projets as $projet)
            <option value="{{$projet->id}}">{{$projet->titre}}</option>
            @endforeach
          </select>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ajouter le guide
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
