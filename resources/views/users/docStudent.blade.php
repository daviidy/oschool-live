@extends('layouts.menu-dashboard-default')

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
            <h5 class="text-primary"><a target="_blank" href="https://docs.google.com/document/d/1-xKgvHNuEIkalz4v0AUNT4dPZO-Z1-ixncv_uyzJv-0/edit?usp=sharing">Comment valider ses projets sur Oschool</a></h5>
            <p>Ce guide vous explique comment se déroule la gestion des projets sur Oschool</p>
            <p><span class="text-muted"> <a target="_blank" href="https://docs.google.com/document/d/1-xKgvHNuEIkalz4v0AUNT4dPZO-Z1-ixncv_uyzJv-0/edit?usp=sharing">Télécharger le guide</a> </span></p>
          </div>
          <div class="room-box">
            <h5 class="text-primary"><a target="_blank" href="https://docs.google.com/document/d/1-nYSwE-ZM86VICWgtBYKRuW1gqYu3g-Lqg-GpbdPZUo/edit?usp=sharing">Guide étudiants du télé présentiel (A lire obligatoirement)</a></h5>
            <p>Il faut absolument lire ce guide pour savoir comment t'en sortir dans ta formation</p>
            <p><span class="text-muted"> <a target="_blank" href="https://docs.google.com/document/d/1-nYSwE-ZM86VICWgtBYKRuW1gqYu3g-Lqg-GpbdPZUo/edit?usp=sharing">Télécharger le guide</a> </span></p>
          </div>
          <div class="room-box">
            <h5 class="text-primary"><a target="_blank" href="https://drive.google.com/file/d/1ihKHmukvYioQ6VfS_eaqSuIq4gOgnxcA/view?usp=sharing">Outils pour suivre les formations</a></h5>
            <p>Ce document vous montre quels sont les outils requis pour suivre convenablement
            les formations en télé présentiel sur Oschool</p>
            <p><span class="text-muted"> <a target="_blank" href="https://drive.google.com/file/d/1ihKHmukvYioQ6VfS_eaqSuIq4gOgnxcA/view?usp=sharing">Télécharger le guide</a> </span></p>
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
