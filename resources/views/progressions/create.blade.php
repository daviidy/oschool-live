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
          Marquer la progression d'un étudiant
        </span>
        {{ csrf_field() }}

        <div style="display: none;" class="wrap-input100 validate-input" data-validate = "Jour de la séance">
          <label for="">Formation</label>
          <input value="Développeur Web Junior" class="input100" type="text" name="formation" placeholder="">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Section</label>
          <input class="input100" type="text" name="section" placeholder="Comme indiqué dans le programme">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>

        </div>

        <div class="wrap-input100 validate-input">
          <label for="">Chapitre</label>
          <input class="input100" type="text" name="session" placeholder="Comme indiqué dans le programme">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div style="display: none;" class="wrap-input100 validate-input">
          <input class="input100" value="{{Auth::user()->id}}" type="text" name="user_id" placeholder="">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Etudiant">
          <label for="">Statut</label>
          <select name="etudiant" class="form-control" style="">
            <option value="A revoir">A revoir</option>
            <option value="Validé">Validé</option>
          </select>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Marquer la progression
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
