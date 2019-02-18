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


<script>
(function(t, e, s, o) {
    var n, c, l;
    t.SMCX = t.SMCX || [], e.getElementById(o) || (n = e.getElementsByTagName(s), c = n[n.length - 1], l = e.createElement(s), l.type = "text/javascript", l.async = !0, l.id = o, l.src = ["https:" === location.protocol ? "https://" : "http://", "widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd74sI3xlunBQAIjQsFqSKW8haM9hHIihQtBRyMcuCT1_2B.js"].join(""), c.parentNode.insertBefore(l, c))
})(window, document, "script", "smcx-sdk");
</script>


<script type="text/javascript">

$(document).ready(function(){

  $('.progression').click(function(){

    var currentProgression = $(this).parents(".card__inner").next();

    currentProgression.toggle(function () {
    currentProgression.css({maxHeight: "0"});
}, function () {
    currentProgression.css({maxHeight: "23rem"});
});

    $(this).toggleClass("expanded");





  });

});

</script>





  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">








    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header style="{{ !count(Auth::user()->formations) ? 'top: 0px;' : '' }}" class="header black-bg">
    @if(!count(Auth::user()->formations))
      <!--annonce a la udemy-->
          <div class="ud-app-loader ud-component--smart-bar--app ud-app-loaded" data-module-id="smart-bar" ng-non-bindable="">
            <div data-purpose="smart-bar-wrapper" class="mb0 " style="margin-bottom: 0px;">
                <div data-purpose="smart-bar-container" class="" style="height: auto;">
                    <div style="width: 104%;margin-left: -15px;" data-purpose="smart-bar" class="smart-bar--smart-bar--1rOkE smart-bar--smart-bar--teal--Qijai smart-bar--smart-bar-dark-theme--18ulO"><span style="font-size: 0px;"></span>
                        <div class="smart-bar--smart-bar__content--3X42a basic-with-timer--centered-content--QtJd8">
                            <div data-purpose="basic-with-timer" class="basic-with-timer--centered-content__text--2t0l3">
                              <span data-purpose="smart-bar-copy" class="">
                                <span class="smart-bar--smart-bar__title--1LFsk" data-purpose="smart-bar-title">
                               Jusqu'au 17 février,
                              </span>
                               <span class="smart-bar--smart-bar__subtitle--I38FP" data-purpose="smart-bar-subtitle" role="presentation">
                              entrez dans le PARCOURS de votre choix à seulement 10.000 FCFA, offrez une formation gratuitement
                              à un être cher !
                              </span>
                            </span>
                            <div data-purpose="smart-bar-timer" class="smart-bar-timer--timer-container--2mwOn"><span data-purpose="timer-x-days-left"> <a style="color: #000;" target="_blank" href="https://oschool.ci/#schools">Cliquez ici pour vous inscrire maintenant</a> </span></div>
                            </div>
                        </div>
                        <div aria-label="Close" class="smart-bar--smart-bar__close--3mCup" data-purpose="smart-bar-hide" role="button" tabindex="0"><span class="udi-small udi udi-close"></span></div>
                    </div>
                </div>
              </div>
            </div>

            <!--fin annonce a la udemy-->
      @endif

      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="https://oschool.ci/" class="logo"><img width="100" src="/dashboard/img/thumbnail.png"></a>
      <!--logo end-->
      <!--si la date d'expiration - 10 jours est inférieur ou égal à aujourd'hui et si la date d'expiration est supérieure ou égale à aujourd'hui-->
      @if(count(Auth::user()->formations) && !Auth::user()->isTeacher() && !Auth::user()->isAdmin() && Auth::user()->fin_abonnement->subDays(10) <= Carbon\Carbon::now() && Auth::user()->fin_abonnement >= Carbon\Carbon::now())
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">1</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Vous avez une nouvelle notification</p>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Votre abonnement expire <br>
                  le {{Carbon\Carbon::parse(Auth::user()->fin_abonnement)->format('d-m-Y H:i')}}.
                  </a>
              </li>

            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>

      <!--sinon si la date d'expiration est inférieure à aujourd'hui-->
      @elseif(count(Auth::user()->formations) && !Auth::user()->isTeacher() && !Auth::user()->isAdmin() && Auth::user()->fin_abonnement < Carbon\Carbon::now())
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">1</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Vous avez une nouvelle notification</p>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Votre abonnement a expiré. <br>
                  Merci de le renouveler.
                  </a>
              </li>

            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      @endif
      <div class="top-menu">

        <ul class="nav pull-right top-menu">

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
        <!--  <p class="centered"><a href="{{url('home')}}"><img src="/avatars/users/{{Auth::user()->photo}}" class="img-circle" width="80"></a></p> -->
          <h5 class="centered">{{Auth::user()->name}} <br> ( student ) </h5>
          @if(count(Auth::user()->formations))
          <li class="mt">
            <a href="{{route('classrooms.index')}}">
              <i class="fa fa-dashboard"></i>
              <span>Mes sessions</span>
              </a>
          </li>
          @endif

          @if(count(Auth::user()->formations))
          <li class="mt">
            <a href="{{ url('projets') }}">
              <i class="fa fa-dashboard"></i>
              <span>Mes projets</span>
              </a>
          </li>
          @endif

          <li class="mt">
            <a href="/documentsStudent">
              <i class="fa fa-book"></i>
              <span>Guides étudiants</span>
              </a>
          </li>

          <li class="mt">
            <a target="_blank" href="https://discord.gg/hhbzcHE">
              <i class="fa fa-group"></i>
              <span>Forum des étudiants</span>
              </a>
          </li>


          @auth


          @if(count(Auth::user()->formations))
          <!--
          <li class="mt">
            <a href="{{ url('progression', Auth::user()) }}">
              <i class="fa fa-dashboard"></i>
              <span>Ma progression</span>
              </a>
          </li>
        -->

          @endif


          @if(count(Auth::user()->formations))
          <li class="mt">
            <a href="{{url('achats')}}">
              <i class="fa fa-money"></i>
              <span>Etat de mon abonnement</span>
            </a>
          </li>
          @endif
          <li class="mt">
            <a href="/dashboard-default">
              <i class="fa fa-laptop"></i>
              <span>Profil</span>
              </a>
          </li>
        @endauth
      <!--    <li class="mt">
            <a href="/programme">
              <i class="fa fa-calendar"></i>
              <span>Programme de la formation</span>
              </a>
          </li> -->

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
</body>

</html>
