<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Rikudo Technologies">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Tableau de bord Utilisateur | Parcours Oschool</title>

  <!-- Favicons -->
  <link href="/dashboard/img/image-profil.png" rel="icon">
  <link href="/dashboard/img/image-profil.png" rel="image-profil">

  <!-- Bootstrap core CSS -->
  <link href="/dashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/dashboard/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/dashboard/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="/dashboard/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="/dashboard/css/style.css" rel="stylesheet">
  <link href="/dashboard/css/style-responsive.css" rel="stylesheet">
  <script src="/dashboard/lib/chart-master/Chart.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>




  <!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('2uy6g3spxi59');
</script>
<!-- End of Async Drift Code -->


<!--
<script>
(function(t, e, s, o) {
    var n, c, l;
    t.SMCX = t.SMCX || [], e.getElementById(o) || (n = e.getElementsByTagName(s), c = n[n.length - 1], l = e.createElement(s), l.type = "text/javascript", l.async = !0, l.id = o, l.src = ["https:" === location.protocol ? "https://" : "http://", "widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd74sI3xlunBQAIjQsFqSKW8haM9hHIihQtBRyMcuCT1_2B.js"].join(""), c.parentNode.insertBefore(l, c))
})(window, document, "script", "smcx-sdk");
</script>

-->




  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

@if ($message = Session::get('success'))
<div class="w3-panel w3-green w3-display-container">
    <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-green w3-large w3-display-topright">&times;</span>
    <p>{!! $message !!}</p>
</div>
<?php Session::forget('success');?>
@endif

@if ($message = Session::get('error'))
<div class="w3-panel w3-red w3-display-container">
    <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-red w3-large w3-display-topright">&times;</span>
    <p>{!! $message !!}</p>
</div>
<?php Session::forget('error');?>
@endif

<body>
  <section id="container">


    <!--annonce a la udemy-->
    <!--
        <div class="ud-app-loader ud-component--smart-bar--app ud-app-loaded" data-module-id="smart-bar" ng-non-bindable="">
          <div data-purpose="smart-bar-wrapper" class="mb0 " style="margin-bottom: 0px;">
              <div data-purpose="smart-bar-container" class="" style="height: auto;">
                  <div data-purpose="smart-bar" class="smart-bar--smart-bar--1rOkE smart-bar--smart-bar--teal--Qijai smart-bar--smart-bar-dark-theme--18ulO"><span style="font-size: 0px;"></span>
                      <div class="smart-bar--smart-bar__content--3X42a basic-with-timer--centered-content--QtJd8">
                          <div data-purpose="basic-with-timer" class="basic-with-timer--centered-content__text--2t0l3"><span data-purpose="smart-bar-copy" class=""><span class="smart-bar--smart-bar__title--1LFsk" data-purpose="smart-bar-title">
                                      Oschool vous souhaite une excellente année 2019 !</span><span class="smart-bar--smart-bar__subtitle--I38FP" data-purpose="smart-bar-subtitle" role="presentation">
                                        Nous vous réservons de très agréables surprises pour cette nouvelle année.
                                      </span></span>
                              <div data-purpose="smart-bar-timer" class="smart-bar-timer--timer-container--2mwOn"><span data-purpose="timer-x-days-left"> <a style="color: #fff;" href="#">Apprenez toujours !</a> </span></div>
                          </div>
                      </div>
                      <div aria-label="Close" class="smart-bar--smart-bar__close--3mCup" data-purpose="smart-bar-hide" role="button" tabindex="0"><span class="udi-small udi udi-close"></span></div>
                  </div>
              </div>
            </div>
          </div>

          <!--fin annonce a la udemy-->


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
      <!--
    @if(!count(Auth::user()->formations))

    <div style="position: fixed; width: 100%;top: 0; z-index: 2000; color: #000;" class="alert alert-info">
        La meilleure facon d'apprécier l'expérience Oschool, est de rejoindre un
        de nos parcours. <a style="color: red;" href="https://code.oschool.ci">Rejoignez-nous maintenant !</a>
    </div>
    @endif
  -->
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header style="" class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="https://oschool.ci/" class="logo"><img width="100" src="/dashboard/img/thumbnail.png"></a>
      <!--logo end-->

      <div class="top-menu">

        <ul class="nav pull-right top-menu">


          <li>

            <a data-toggle="dropdown" class="dropdown-toggle change" href="#">Changer</a>
            <ul class="dropdown-menu">
              <li>
                <p> <a href="/teacher">Tableau de bord prof</a> </p>
              </li>

            </ul>

          </li>


          <li>

            <a class="logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Se déconnecter') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

          </li>

        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul style="{{ !count(Auth::user()->formations) ? 'margin-top: 120px;' : '' }}" class="sidebar-menu" id="nav-accordion">
          <h5 class="centered">{{Auth::user()->name}} <br> ( {{Auth::user()->type3}} ) </h5>
          <li class="mt">
            <a href="/dashboard-admin">
              <i class="fa fa-laptop"></i>
              <span>Profil</span>
              </a>
          </li>
          <li class="mt">
            <a target="_blank" href="https://discord.gg/hhbzcHE">
              <i class="fa fa-group"></i>
              <span>Forum des étudiants</span>
              </a>
          </li>



          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Formations</span>
              </a>
            <ul class="sub">

              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('formations.index') }}">
                    Toutes les formations
                </a>

              </li>

              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('categories.index') }}">
                    Toutes les catégories
                </a>

              </li>

              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('projets.create') }}">
                    Créer un projet
                </a>

              </li>
              <!--
              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('supportformations.create') }}">
                    Ajouter un support de cours
                </a>

              </li>
            -->
              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('formations.create') }}">
                    Créer une formation
                </a>

              </li>
              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('progressions.create') }}">
                    Créer une progression
                </a>

              </li>
              <li>

                <a style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('categories.create') }}">
                    Créer une catégorie
                </a>

              </li>

              <li>

                <a style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('partners.create') }}">
                    Créer un partenaire
                </a>

              </li>

              <li>

                <a style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('prerequisites.create') }}">
                    Créer un prérequis
                </a>

              </li>

              <li>

                <a style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('languages.create') }}">
                    Créer une langue
                </a>

              </li>

              <li>

                <a style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('achats.create') }}">
                    Ajouter un achat
                </a>

              </li>

            </ul>
          </li>

          <li class="mt">
            <a href="{{route('users.index')}}">
              <i class="fa fa-group"></i>
              <span>Liste des utilisateurs</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Emails</span>
              </a>
            <ul class="sub">

              <li>

                <a data-toggle="modal" data-target="#email"  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout">
                    Créer un template
                </a>

              </li>
              <!--
              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('supportformations.create') }}">
                    Ajouter un support de cours
                </a>

              </li>
            -->
              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="{{ route('emails.index') }}">
                    Modifier un template actuel
                </a>

              </li>

              <li>

                <a  style="border-radius:8px; text-decoration: underline; background-color: transparent;" class="logout" href="/import">
                    Importer un fichier CSV pour les utilisateurs par intérêt
                </a>

              </li>

            </ul>
          </li>

          <li class="mt">
            <a href="/paiements">
              <i class="fa fa-money"></i>
              <span>Etat des paiements</span>
            </a>
          </li>

          <li class="mt">
            <a href="/rapportProf">
              <i class="fa fa-user"></i>
              <span>Sessions des professeurs</span>
            </a>
          </li>

          <!--li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li-->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->





    <!-- The Modal -->
    <div class="modal fade" id="email">
    <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 style="font-size: 24px;" class="modal-title">Créer un email</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
      <form method="post" action="{{ route('emails.store') }}">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="">Titre du template</label>
        <input type="text" name="titre" value="">
      </div>
      <div class="form-group">
        <label for="">Lien de l'appel à l'action</label>
        <input type="url" name="lien" value="">
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
    </div>

    </div>
    </div>
    </div>

    <!--end modal-->





    <!-- The Modal -->
    <div class="modal fade" id="popup">
    <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 style="font-size: 24px;" class="modal-title">Formation concernée</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
      <form method="post" action="{{url('progression')}}">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="">De quelle formation s'agit-il ?</label>
        <select class="js-select3" name="formation">
          @foreach(Auth::user()->formations as $formation)
            <option value="{{ $formation->nom }}">{{ $formation->nom }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
    </div>

    </div>
    </div>
    </div>

    <!--end modal-->

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 style="font-size: 24px;" class="modal-title">Remplissez ce formulaire pour vous réabonner à la formation</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
    <form method="post" action="{{url('envoiRenew')}}">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="">Email:</label>
      <input value="{{Auth::check() ? Auth::user()->email : ''}}" type="email" class="form-control" id="" placeholder="Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text" class="form-control" id="" placeholder="Nom" name="nom" required>
    </div>
    <div class="form-group">
      <label for="">Prénoms</label>
      <input type="text" class="form-control" id="" placeholder="Prénoms" name="prenoms" required>
    </div>
    <div class="form-group">
      <label for="">Numéro de téléphone</label>
      <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel" required>
    </div>

    <div class="form-group">
      <label for="">Formation</label>
      @auth
      @if(count(Auth::user()->formations))
        @foreach(Auth::user()->formations as $formation)
        <select class="" name="formation">
          <option value="{{$formation->nom}}">{{$formation->nom}}</option>
        </select>
        @endforeach
      @endif
      @else
      <select class="" name="formation">
        <option value="Développeur Web Junior">Développeur Web Junior</option>
      </select>
      @endauth
    </div>

    <div class="form-group">
      <label for="">Prix</label>
      <select class="" name="montant">
        <option value="30000">30.000 FCFA</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
    </div>

    </div>
    </div>
    </div>

    <!--end modal-->



















    @yield('content')

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong></strong> 2018-2019. Oschool. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          ->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>-->
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="/dashboard/lib/jquery/jquery.min.js"></script>
  <script src="/dashboard/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="/dashboard/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/dashboard/lib/jquery.scrollTo.min.js"></script>
  <script src="/dashboard/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="/dashboard/lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Oschool'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>


  <script>
    $(document).ready(function(){

     fetch_customer_data();

     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('live_search.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('#students').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }

     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
  </script>




</body>

</html>
