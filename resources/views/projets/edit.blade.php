@extends('layouts.menu-login')
@section('title', 'Modifier un projet')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="display: block;margin-left: auto;margin-right: auto;width: 25%;" src="/avatars/projects/{{$projet->image}}" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ url('projets', $projet) }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Modifier le projet: {{$projet->titre}}
        </span>
        {{ csrf_field() }}
        {{ method_field('patch') }}



        <div class="wrap-input100 validate-input">
          <input class="input100" value="{{$projet->titre}}" type="text" name="name" placeholder="Titre du projet" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" value="{{$projet->enonce}}" type="url" name="enonce" placeholder="Le lien Google Drive du projet">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <label for=""> <strong>Formation(s) concernée(s)</strong> </label>
        <select id="my-select3" name="formation_id[]" multiple="multiple">
          @if(count($projet->formations))
          @foreach($projet->formations as $formation)
          <option selected value="{{$formation->id}}">{{$formation->nom}}</option>
          @endforeach
          @endif
          @foreach($formations as $formation)
            @if(!$projet->own($formation->id))
            <option value="{{$formation->id}}">{{$formation->nom}}</option>
            @endif
          @endforeach

        </select>

				<label for=""> <strong>Image du projet</strong> </label><br>
				<img width="50" src="/avatars/projects/{{$projet->image}}" alt="">
				<div class="wrap-input100">
          <input class="input100" type="file" name="image">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>


        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Modifier le projet
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
