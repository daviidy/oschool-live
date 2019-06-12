@extends('layouts.menu-login')
@section('title', 'Modifier une offre')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="display: block;margin-left: auto;margin-right: auto;width: 25%;" src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ url('offers', $offer) }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Modifier l'offre: {{$offer->name}}
        </span>
        {{ csrf_field() }}
        {{ method_field('patch') }}



        <div class="wrap-input100 validate-input">
          <input class="input100" value="{{$offer->name}}" type="text" name="name" placeholder="Nom de l'offre" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" value="{{$offer->amount}}" type="number" name="amount" placeholder="Prix de l'offre (par mois)">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <label for=""> <strong>Caractéristiques de l'offre</strong> </label>
        <select id="my-select3" name="characteristic_id[]" multiple="multiple">
          @if(count($offer->characteristics))
          @foreach($offer->characteristics as $characteristic)
          <option selected value="{{$characteristic->id}}">{{$characteristic->description}}</option>
          @endforeach
          @endif
          @foreach($characteristics as $characteristic)
            @if(!$offer->own($characteristic->id))
            <option value="{{$characteristic->id}}">{{$characteristic->description}}</option>
            @endif
          @endforeach

        </select>


        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Modifier l'offre
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
