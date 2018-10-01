@extends('layouts.menu-dashboard-teacher')

@section('content')

<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- page start-->
    <div class="chat-room mt">
      <aside class="mid-side">
        <div class="chat-room-head">
          <h3>Guides formateurs</h3>
          <form action="#" class="pull-right position">
            <input type="text" placeholder="Search" class="form-control search-btn ">
          </form>
        </div>
        <div class="room-desk">
          <h4 class="pull-left">Pour bien commencer votre carrière de formateur Oschool</h4>
          <a href="#" class="pull-right btn btn-theme02">+ Formez-vous avec Oschool</a>
          <div class="room-box">
            <h5 class="text-primary"><a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/09/guide-formateurs-tele-presentiel.pdf">Guide formateurs (format PDF)</a></h5>
            <p>Il faut absolument lire ce guide popur savoir comment devenir formateur Oschool,
              et prendre en main son premier étudiant</p>
            <p><span class="text-muted"> <a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/09/guide-formateurs-tele-presentiel.pdf">Télécharger le guide</a> </span></p>
          </div>
          <div class="room-box">
            <h5 class="text-primary"><a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/09/Enseignez-Partagez-Souriez.pdf">Outils du formateur</a></h5>
            <p>Ce document vous montre quels sont les outils requis pour enseigner convenablement
            sur Oschool</p>
            <p><span class="text-muted"> <a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/09/Enseignez-Partagez-Souriez.pdf">Télécharger le guide</a> </span></p>
          </div>
          <div class="room-box">
            <h5 class="text-primary"><a target="_blank" href="https://docs.google.com/document/d/e/2PACX-1vSd41Dq3-4LqHNtpAmPNYT3cwFD1yJWB-02OtRmJJ2k8_DgbLUGD7oxhwsfB3JUAa9NcY2hfA4khz0m/pub">Facturation</a></h5>
            <p>Dans ce document, nous vous expliquons comment vous gagnez
            concrètement de l'argent avec Oschool</p>
            <p><span class="text-muted"> <a target="_blank" href="https://docs.google.com/document/d/e/2PACX-1vSd41Dq3-4LqHNtpAmPNYT3cwFD1yJWB-02OtRmJJ2k8_DgbLUGD7oxhwsfB3JUAa9NcY2hfA4khz0m/pub">Télécharger le guide</a> </span></p>
          </div>
        </div>
        <div class="room-desk">
          <h4 class="pull-left">apprendre par des exemples</h4>
          <div class="room-box">
            <h5 class="text-primary"><a href="chat_room.html">Voir comment se passe la formation de facon concrète</a></h5>
            <p>Nous ne vous laissons pas à votre propre sort. En effet, vous pourrez trouver sur une page
            dédiée, des exemples sur la bonne facon de procéder en tant que formateur sur Oschool.</p>
            <p><span class="text-muted"> <a href="#">Voir les exemples</a> </span></p>
          </div>
        </div>
      </aside>
      <aside class="right-side">
        <div class="user-head">
          <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
          <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
        </div>
        <div class="invite-row">
          <h4 class="pull-left">Mes étudiants</h4>
          <a href="#" class="btn btn-theme04 pull-right">+ Inviter des gens</a>
        </div>
        <ul class="chat-available-user">
          @foreach(Auth::user()->students as $student)
          <li>
            <a href="chat_room.html">
              <img class="img-circle" src="/avatars/users/{{$student->photo}}" width="32">
              <a href="{{url('users', $student)}}">{{$student->name}}</a>
              </a>
          </li>
          @endforeach
        </ul>
      </aside>
    </div>
    <!-- page end-->
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

@endsection
