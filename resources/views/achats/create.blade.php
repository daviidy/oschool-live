@extends('layouts.menu-login')
@section('title', 'Inscription')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/cup.jpg" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="https://secure.cinetpay.com/" class="login100-form validate-form">
        <span class="login100-form-title">
          Veuillez vérifier les informations ci-dessous avant de valider votre achat.<br><br>
          Vous paierez {{session('montant')}} FCFA<br><br>
          Important: cliquer sur "Retourner sur Oschool pour valider le paiement" !
        </span>
        <!--
        <p style="color: red;">Rappel: il ne reste que {{5 - $achats->count()}} places !</p><br>
      -->
        <ul>
          <li>Nom: <strong>{{session('name')}}</strong> </li>
          <li>Prénoms: <strong>{{session('prenoms')}}</strong> </li>
          <li>Email: <strong>{{session('email')}}</strong> </li>
          <li>Formation: <strong>{{session('formation')}}</strong> </li>
        </ul><br>
        {{ csrf_field() }}
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_id">
            <option value="{{$temps}}">trans id</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_amount">
            <option value="{{session('montant')}}">montant</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_currency">
            <option value="CFA">currency</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_site_id">
            <option value="113043">Id site</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_language">
            <option value="fr">language</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_version">
            <option value="V1">version</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_payment_config">
            <option value="SINGLE">payment config</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_page_action">
            <option value="PAYMENT">page action</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_date">
            <option value="{{$time}}">trans date</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="apikey">
            <option value="134714631658c289ed716950.86091611">api key</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="signature">
            <option value="{{$signature}}">Signature</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_designation">
            <option value="Achat Oschool Live">Désignation</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="return_url">
            <option value="{{ route('achats.store') }}">url retour</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cancel_url">
            <option value="https://code.oschool.ci">url cancel</option>
          </select>
        </div>
        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Confirmer le paiement
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="{{ url()->previous() }}">
            Annuler
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
