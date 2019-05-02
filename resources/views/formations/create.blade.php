@extends('layouts.menu-login')
@section('title', 'Ajouter une formation')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('formations.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter un nouveau parcours
        </span>
        {{ csrf_field() }}



        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="text" name="nom" placeholder="Titre du parcours" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Catégorie</label>
          <select name="category_id" class="form-control" style="" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->nom }}</option>
            @endforeach
          </select>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for=""> <strong>Langues du parcours</strong> </label><br>
        @foreach($languages as $language)
          <input type="checkbox" name="language_id[]" value="{{$language->id}}">{{$language->name}}<br>
        @endforeach
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for=""> <strong>Partenaires du parcours</strong> </label><br>
        @foreach($partners as $partner)
          <input type="checkbox" name="partner_id[]" value="{{$partner->id}}">{{$partner->name}}<br>
        @endforeach
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for=""> <strong>Prérequis du parcours</strong> </label><br>
        @foreach($prerequisites as $prerequisite)
          <input type="checkbox" name="prerequisite_id[]" value="{{$prerequisite->id}}">{{$prerequisite->description}}<br>
        @endforeach
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Statut du parcours</label>
          <select name="state" class="form-control" style="" required>
            <option value="active">Actif</option>
            <option value="inactive">Inactif</option>
          </select>
        </div>

        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="text" name="duration" placeholder="Durée (en mois)" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input">
          <label for="">Choisis une image de cours</label>
          <input class="input100" value="" type="file" name="image" placeholder="">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input">
          <textarea required placeholder="Description" rows="50" style="height: 300px;" class="input100" name="description" placeholder=""></textarea>
        </div>

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
