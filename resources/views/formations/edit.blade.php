@extends('layouts.menu-login')
@section('title', 'Modifier une formation')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="display: block;margin-left: auto;margin-right: auto;width: 25%;" src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ url('formations', $formation) }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Modifier le parcours {{$formation->nom}}
        </span>
        {{ csrf_field() }}
        {{ method_field('patch') }}



        <div class="wrap-input100 validate-input">
          <input class="input100" value="{{ $formation->nom }}" type="text" name="nom" placeholder="Titre du parcours" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <label for=""> <strong>Date de rentrée</strong> </label>
        <input value="{{$formation->start_date}}" name="start_date" type="datetime" id="datepicker">

        <div class="wrap-input100">
          <input class="input100" value="{{$formation->video}}" type="text" name="video" placeholder="Lien de la vidéo (optionnel)">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" value="{{$formation->program}}" type="text" name="program" placeholder="Lien du programme (optionnel)">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <label for=""> <strong>Catégorie</strong> </label>
        <select id="my-select1" name="category_id">
          @foreach($categories as $category)
          @if($category->id == $formation->category->id)
          <option selected value="{{$formation->category->id}}">{{$formation->category->nom}}</option>
          @else
          <option value="{{$category->id}}">{{$category->nom}}</option>
          @endif
          @endforeach
        </select>

        <label for=""> <strong>Langue(s)</strong> </label>
        <select id="my-select2" name="language_id[]" multiple="multiple">
          @if(count($formation->languages))
            @foreach($formation->languages as $language)
          <option selected value="{{$language->id}}">{{$language->name}}</option>
            @endforeach
          @endif
          @foreach($languages as $language)
            @if(!$formation->ownLanguage($language->id))
            <option value="{{$language->id}}">{{$language->name}}</option>
            @endif
          @endforeach

        </select>

        <label for=""> <strong>Partenaire(s)</strong> </label>
        <select id="my-select3" name="partner_id[]" multiple="multiple">
          @if(count($formation->partners))
            @foreach($formation->partners as $partner)
          <option selected value="{{$partner->id}}">{{$partner->name}}</option>
            @endforeach
          @endif
          @foreach($partners as $partner)
            @if(!$formation->ownPartner($partner->id))
            <option value="{{$partner->id}}">{{$partner->name}}</option>
            @endif
          @endforeach

        </select>

        <label for=""> <strong>Prérequis</strong> </label>
        <select id="my-select4" name="prerequisite_id[]" multiple="multiple">
          @if(count($formation->prerequisites))
          @foreach($formation->prerequisites as $prerequisite)
          <option selected value="{{$prerequisite->id}}">{{$prerequisite->description}}</option>
          @endforeach
          @endif
          @foreach($prerequisites as $prerequisite)
            @if(!$formation->ownPrerequisite($prerequisite->id))
            <option value="{{$prerequisite->id}}">{{$prerequisite->description}}</option>
            @endif
          @endforeach
        </select>

        <label for=""> <strong>Formateur Principal</strong> </label>
        <select id="my-select5" name="teacher">
          @foreach($users as $user)
          @if($formation->teacher == $user->name)
          <option selected value="{{$user->name}}">{{$user->name}}</option>
          @else
          <option value="{{$user->name}}">{{$user->name}}</option>
          @endif
          @endforeach
        </select>

        <label for=""> <strong>Offres de prix</strong> </label>
        <select id="my-select6" name="offer_id[]" multiple="multiple">
          @if(count($formation->offers))
            @foreach($formation->offers as $offer)
          <option selected value="{{$offer->id}}">{{$offer->name}}({{$offer->amount}} FCFA)</option>
            @endforeach
          @endif
          @foreach($offers as $offer)
            @if(!$formation->ownOffer($offer->id))
            <option value="{{$offer->id}}">{{$offer->name}}</option>
            @endif
          @endforeach
        </select>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Statut du parcours</label>
          <select name="state" class="form-control" style="" required>
            <option selected value="{{$formation->state}}">{{$formation->state}}</option>
            <option value="{{$formation->state =='active' ? "inactive" : "active"}}">{{$formation->state =='active' ? "inactive" : "active"}}</option>
          </select>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Type</label>
          <select name="type" class="form-control" style="" required>
            <option selected value="{{$formation->type}}">{{$formation->type}}</option>
            <option value="{{$formation->type =='bootcamp' ? "parcours" : "bootcamp"}}">{{$formation->type =='bootcamp' ? "parcours" : "bootcamp"}}</option>
          </select>
        </div>

        <div class="wrap-input100 validate-input">
          <input class="input100" value="{{ $formation->duration }}" type="text" name="duration" placeholder="Durée (en mois)" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <label for="">Choisis une image de cours</label>
          <input class="input100" value="" type="file" name="image" placeholder="">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <label for="">Ecrivez une description courte</label>
          <textarea placeholder="Description" rows="50" style="height: 300px;" class="input100" name="description" placeholder="">{{$formation->description}}</textarea>
        </div>

        <div class="wrap-input100">
          <label for="">Ecrivez une description longue</label>
          <textarea placeholder="Description Longue" rows="50" style="height: 300px;" class="input100" name="description_longue" placeholder="">{{$formation->description_longue}}</textarea>
        </div>

        <div class="wrap-input100">
          <label for="">Ecrivez une phrase d'accroche</label>
          <textarea placeholder="Accroche" rows="50" style="height: 300px;" class="input100" name="accroche" placeholder="">{{$formation->accroche}}</textarea>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Modifier le parcours
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
