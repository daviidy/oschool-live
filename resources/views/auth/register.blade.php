@extends('layouts.registration')
@section('title', 'Inscription Formateur')

@section('content')

<div class="limiter">
  <div class="container-login100" style="background-image: url('/registration/images/bg-01.jpg');">
    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
      <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
        <span class="login100-form-title p-b-53">
          Inscrivez-vous à l'espace Formateurs Oschool.
        </span>




        <div class="p-t-31 p-b-9">
          <span class="txt1">
            Nom d'utilisateur
          </span>
        </div>
        @csrf
        <!--username-->
        <div class="wrap-input100 validate-input" data-validate = "Username is required">
          <input class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
          <span class="focus-input100"></span>
          @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
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
            Password
          </span>
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
        <!--confirm password-->
        <div class="p-t-31 p-b-9">
          <span class="txt1">
            Confirmez le mot de passe
          </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          <span class="focus-input100"></span>
        </div>
        <div class="container-login100-form-btn m-t-17">
          <button type="submit" class="login100-form-btn">
            S'inscrire
          </button>
        </div>

        <div class="w-full text-center p-t-55">
          <span class="txt2">
            Déjà membre ?
          </span>

          <a href="{{ route('login') }}" class="txt2 bo1">
            Connectez-vous maintenant
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

-->
@endsection
