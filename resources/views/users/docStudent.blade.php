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
          <h3>Guides Etudiants</h3>
          <form action="#" class="pull-right position">
            <input type="text" placeholder="Search" class="form-control search-btn ">
          </form>
        </div>
        <div class="room-desk">
          <h4 class="pull-left">Pour avoir une meilleure expérience d'apprentissage Oschool</h4>
          <a href="#" class="pull-right btn btn-theme02">+ Formez-vous avec Oschool</a>
          <div class="room-box">
            <h5 class="text-primary"><a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/10/GuideEtudiantstlprsentiel.pdf">Guide étudiants du télé présentiel (A lire obligatoirement)</a></h5>
            <p>Il faut absolument lire ce guide pour savoir comment t'en sortir dans ta formation</p>
            <p><span class="text-muted"> <a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/10/GuideEtudiantstlprsentiel.pdf">Télécharger le guide</a> </span></p>
          </div>
          <div class="room-box">
            <h5 class="text-primary"><a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/10/prerequis-etudiants.pdf">Outils pour suivre les formations</a></h5>
            <p>Ce document vous montre quels sont les outils requis pour suivre convenablement
            les formations en télé présentiel sur Oschool</p>
            <p><span class="text-muted"> <a target="_blank" href="https://oschool.ci/wp-content/uploads/2018/10/prerequis-etudiants.pdf">Télécharger le guide</a> </span></p>
          </div>
        </div>

      </aside>
      <aside class="right-side">
        <div class="user-head">
          <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
          <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
        </div>
        <div class="invite-row">
          <h4 class="pull-left">Mon formateur</h4>
        </div>
        <ul class="chat-available-user">
          @if(Auth::user()->teacher)
          <li>
            <a href="chat_room.html">
              <img class="img-circle" src="/avatars/users/{{Auth::user()->teacher->photo}}" width="32">
              <a href="{{url('users', Auth::user()->teacher->id)}}">{{Auth::user()->teacher->name}}</a>
              </a>
          </li>
          @endif
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
