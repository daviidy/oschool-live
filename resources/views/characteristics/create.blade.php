@extends('layouts.menu-login')
@section('title', 'Ajouter une caractéristique d\'offre')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="display: block;margin-left: auto;margin-right: auto;width: 25%;" src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('characteristics.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter une caractéristique d'offre
        </span>
        {{ csrf_field() }}



        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="text" name="description" placeholder="Description de la caractéristique" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>


        <label for=""> <strong>Catégorie</strong> </label>
        <select name="categorycharac_id">
          @foreach($categorycharacs as $categorycharac)
          <option value="{{$categorycharac->id}}">{{$categorycharac->name}}</option>
          @endforeach
        </select><br>

        <label for=""> <strong>Statut</strong> </label>
        <select name="state">
          <option value="Aucun">Aucun</option>
          <option value="Nouveau">Nouveau</option>
          <option value="Amélioré">Amélioré</option>
        </select>


        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ajouter le parcours
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
