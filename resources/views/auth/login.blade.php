@extends('layouts.registration')
@section('title', 'Connexion')

@section('content')

<div class="limiter">
  <div class="container-login100" style="background-image: url('/registration/images/bg-01.jpg');">
    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
      <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
        <span style="padding-bottom: 0px;" class="login100-form-title p-b-53">
          Connectez-vous à votre espace membre Oschool.
        </span>



        @csrf
        <!--email-->

        <div class="p-t-31 p-b-9">
          <span class="txt1">
            Email
          </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Email is required">
          <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
          <span class="focus-input100"></span>
          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <!--password-->
        <div class="p-t-13 p-b-9">
          <span class="txt1">
            Mot de passe
          </span>

            <a class="txt2 bo1 m-l-5" href="{{ route('password.request') }}">
              {{ __('Mot de passe oublié ?') }}
          </a>

        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          <span class="focus-input100"></span>
          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember">
              {{ __('Se souvenir de moi') }}
          </label>
        </div>

        <div class="container-login100-form-btn m-t-17">
          <button type="submit" class="login100-form-btn">
            Se connecter
          </button>
        </div>

        <div class="w-full text-center p-t-55">
          <a href="/register" class="txt2 bo1">
            Nouveau ? Inscrivez-vous gratuitement
          </a>
        </div>

        <div class="w-full text-center p-t-55">
          <a href="/" class="txt2 bo1">
            Retour à la page d'accueil
          </a>
        </div>
      </form>
    </div>
  </div>
</div>






<!--

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <d  iv class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
