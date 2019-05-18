<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Salle de classe | Oschool</title>
    <link rel="stylesheet" href="/css/new_oschool/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!--
    <link href="/dashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  -->
    <!--external css-->
    <link href="/dashboard/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />




    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        ! function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                        t[e] = t.factory(e);
                    }), t.load = function(t) {
                        var e = 3e5,
                            n = Math.ceil(new Date() / e) * e,
                            o = document.createElement("script");
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





</head>

<body lang="fr-FR" dir="ltr" cz-shortcut-listen="true">

    @if ($message = Session::get('success'))
    <div class="w3-panel w3-green w3-display-container">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <p>{!! $message !!}</p>
    </div>
    <?php Session::forget('success');?>
    @endif

    @if ($message = Session::get('error'))
    <div class="w3-panel w3-red w3-display-container">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>
        <p>{!! $message !!}</p>
    </div>
    <?php Session::forget('error');?>
    @endif




    <div id="app">
      <div id="main">
        <style type="text/css">
          #intercom-container {
            display: none;
          }
        </style>
        <div class="content">
          <div id="main">
            <style type="text/css">
              #intercom-container {
                display: none;
              }
            </style>
            <div class="content">
              @if (session('status'))
              <div style="z-index: 999;" class="w3-panel w3-red w3-display-container">
                  {{ session('status') }}
              </div>
              @endif
              <div data-test="course-container">
                <div>
                  <div class="_layout-module--container--3f2U4">

                    <nav class="_layout-module--nav--3qaiq _layout-module--small-primary--rlHms ">
                        <div class="_layout-module--nav-contents--3VsBp">
                            <div class="_layout-module--primary-nav--x6Tkg">
                                <div class="_nav-module--nav-small--3uIgM _nav-module--_nav--2rp19">
                                    <a href="https://oschool.ci" target="_blank">
                                        <img style="width: 80%;display: block;margin-right: auto;margin-left: auto;" src="https://oschool.ci/wp-content/uploads/2017/05/image-profil.png" alt="">
                                    </a>
                                    <div class="_nav-module--nav-groups--3Eal6">
                                        <ul class="_nav-module--nav-group--2Tv0l">
                                            <li class="_nav-module--nav-item--2yHv8"><a href="{{url('home')}}" title="{{Auth::user()->type3 == 'admin' ? "Accueil Admin" : "Accueil"}}"><span class="_nav-module--nav-item-icon-container--2gNdP"><span class="_nav-module--nav-item-icon--rHRSl"><i class="vds-icon vds-icon--lg"
                                                              role="img"><svg viewBox="0 0 32 32">
                                                                    <path d="M11 25v-4a5 5 0 0 1 10 0v4h3V13.838l-8-6.546-8 6.546V25h3zm15-9.526V25a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-9.526l-.367.3a1 1 0 1 1-1.266-1.548l11-9a1 1 0 0 1 1.266 0l11 9a1 1 0 1 1-1.266 1.548l-.367-.3zM19 25v-4a3 3 0 0 0-6 0v4h6z"
                                                                      fill-rule="nonzero"></path>
                                                                </svg></i></span></span></a></li>

                                                                @if(Auth::user()->type3 == 'admin')
                                                                <li class="_nav-module--nav-item--2yHv8"><a href="/dashboard-teacher"  title="Accueil"><span class="_nav-module--nav-item-icon-container--2gNdP"><span class="_nav-module--nav-item-icon--rHRSl"><i
                                      class="fa fa-laptop vds-icon vds-icon--lg" role="img"></i></span></span></a></li>
                                                                @endif

                                            <li class="_nav-module--nav-item--2yHv8"><a href="https://oschool.ci/#schools" target="_blank" title="Catalogue"><span class="_nav-module--nav-item-icon-container--2gNdP"><span class="_nav-module--nav-item-icon--rHRSl"><i
                                                              class="vds-icon vds-icon--lg" role="img"><svg viewBox="0 0 32 32">
                                                                    <path d="M17.21 17.21l1.209-3.629-3.628 1.21 2.418 2.418zM15 26.954A11.003 11.003 0 0 1 5.045 17H5a1 1 0 0 1 0-2h.045A11.003 11.003 0 0 1 15 5.045V5a1 1 0 0 1 2 0v.045A11.003 11.003 0 0 1 26.955 15H27a1 1 0 0 1 0 2h-.045A11.003 11.003 0 0 1 17 26.955V27a1 1 0 0 1-2 0v-.045zM16 25a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm2.949-6.684a1 1 0 0 1-.633.633l-6 2a1 1 0 0 1-1.265-1.265l2-6a1 1 0 0 1 .633-.633l6-2a1 1 0 0 1 1.265 1.265l-2 6z"
                                                                      fill-rule="nonzero"></path>
                                                                </svg></i></span></span></a></li>




                                            @if(count(Auth::user()->formations))
                                                                                        <li class="_nav-module--nav-item--2yHv8"><a href="{{route('classrooms.index')}}"  title="Mes sessions"><span class="_nav-module--nav-item-icon-container--2gNdP"><span class="_nav-module--nav-item-icon--rHRSl"><i
                                                              class="fa fa-laptop vds-icon vds-icon--lg" role="img"></i></span></span></a></li>

                                            @endif
                                            <li class="_nav-module--nav-item--2yHv8"><a href="{{route('guides.index')}}" title="Guides"><span class="_nav-module--nav-item-icon-container--2gNdP"><span class="_nav-module--nav-item-icon--rHRSl"><i
                                                              class="fa fa-user vds-icon vds-icon--lg" role="img"></i></span></span></a></li>

                                            <li class="_nav-module--nav-item--2yHv8"><a href="https://discord.gg/hhbzcHE" target="_blank" title="Forum"><span class="_nav-module--nav-item-icon-container--2gNdP"><span class="_nav-module--nav-item-icon--rHRSl"><i
                                                              class="fa fa-group vds-icon vds-icon--lg" role="img"></i></span></span></a></li>



                                        </ul>
                                        <ul class="_nav-module--nav-group--2Tv0l">
                                            <li class="_nav-module--nav-item--2yHv8"><a href="/settings" title="Settings"><span class="_nav-module--nav-item-icon-container--2gNdP"><span class="_nav-module--nav-item-icon--rHRSl"><i class="vds-icon vds-icon--lg"
                                                              role="img"><svg viewBox="0 0 32 32">
                                                                    <path d="M18 8.252v-2.25L13.99 6c.006 0 .009.75.01 2.252a7.993 7.993 0 0 0-3.76 2.196l-1.871-1.08-2.008 3.47c.003-.004.64.36 1.91 1.092a8.025 8.025 0 0 0-.066 3.875l-1.836 1.06c-.001 0 .666 1.158 2.002 3.473-.003-.004.56-.332 1.685-.983A7.997 7.997 0 0 0 14 23.748v2.25l4.01.002c-.006 0-.009-.75-.01-2.252a7.998 7.998 0 0 0 3.965-2.417l1.729.998 2.007-3.471c-.003.004-.635-.357-1.898-1.085a8.027 8.027 0 0 0-.065-3.812l1.956-1.13-2.002-3.473c.002.004-.634.375-1.91 1.113A7.993 7.993 0 0 0 18 8.252zm-6 16.916a9.997 9.997 0 0 1-2.225-1.342l-.406.235a2.002 2.002 0 0 1-2.73-.723l-2.01-3.48a1.99 1.99 0 0 1 .74-2.725l.659-.381a10.142 10.142 0 0 1 .026-1.793l-.685-.395a2.002 2.002 0 0 1-.74-2.726l2.01-3.48a1.99 1.99 0 0 1 2.73-.723l.63.365A9.991 9.991 0 0 1 12 6.832v-.83C12 4.902 12.895 4 13.99 4h4.02C19.113 4 20 4.89 20 6.003v.83a9.992 9.992 0 0 1 2.028 1.187l.666-.385a2.002 2.002 0 0 1 2.73.723l2.009 3.48a1.99 1.99 0 0 1-.74 2.726l-.743.429a10.119 10.119 0 0 1 .025 1.724l.719.416a2.002 2.002 0 0 1 .739 2.725l-2.01 3.48a1.99 1.99 0 0 1-2.73.723l-.441-.256A9.998 9.998 0 0 1 20 25.168v.83A2.002 2.002 0 0 1 18.01 28h-4.02A1.99 1.99 0 0 1 12 25.997v-.83zM16 20a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                                                                      fill-rule="nonzero"></path>
                                                                </svg></i></span></span></a></li>
                                            <li class="_nav-module--nav-item--2yHv8">
                                                <a href="{{ route('logout') }}" title="Logout" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                    <span class="_nav-module--nav-item-icon-container--2gNdP">
                                                        <span class="_nav-module--nav-item-icon--rHRSl">
                                                            <i class="vds-icon vds-icon--lg" role="img">

                                                                <svg viewBox="0 0 32 32">
                                                                    <path d="M9.414 15H21a1 1 0 0 1 0 2H9.414l3.293 3.293a1 1 0 0 1-1.414 1.414l-5-5a1 1 0 0 1 0-1.414l5-5a1 1 0 0 1 1.414 1.414L9.414 15zM24 8h-4v2a1 1 0 0 1-2 0V7a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-3a1 1 0 0 1 2 0v2h4V8z"
                                                                      fill-rule="nonzero"></path>
                                                                </svg>
                                                            </i>
                                                        </span>
                                                    </span>

                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <main class="_layout-module--main--20EWg">
                      <div class="_layout-module--title-area--1yynf">
                        <div class="_header-module--header--1boX-">
                          <div>
                            <nav class="index--light-header--1Yl7t index--_header--36qYf">
                              <div class="vds-flex vds-flex--align-center vds-flex--full vds-flex--justify-start vds-flex--spacing-2x">
                                <div class="vds-flex__item">
                                                <div class="hamburger--hamburger--1oS_7 index--hamburger--31PjM">
                                                    <a style="display:none; color: black;" href="#" class="hamburger--hamburger-link--3-KRS">
                                                        <i class="vds-icon vds-color--cerulean" role="img">
                                                            <span class="vds-visually-hidden">Afficher/Cacher le menu latéra</span>
                                                            <svg viewBox="0 0 32 32">
                                                                <path d="M8 23a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2H8zm0-6a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2H8zm0-6a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2H8z" fill-rule="nonzero">
                                                                </path>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                  </div>
                                <div class="vds-flex__item">
                                  <h1 id="header-title" aria-live="assertive">@yield('titre')</h1>
                                </div>
                                <div class="vds-flex__item"><span></span></div>
                              </div>
                            </nav>
                          </div>
                        </div>
                      </div>
                      <div class="_layout-module--content-area--tGmoA" style="background-color: rgb(250, 251, 252);">
                        <div aria-hidden="true" class="_layout-module--hidden-header--3JZ5t">
                          <div class="_header-module--header--1boX-">
                            <div>
                              <nav class="index--light-header--1Yl7t index--_header--36qYf">
                                <div class="vds-flex vds-flex--align-center vds-flex--full vds-flex--justify-start vds-flex--spacing-2x">
                                  <div class="vds-flex__item"></div>
                                  <div class="vds-flex__item">
                                    <h1 id="header-title" aria-live="assertive">@yield('titre')</h1>
                                  </div>
                                  <div class="vds-flex__item"><span></span></div>
                                </div>
                              </nav>
                            </div>
                          </div>
                        </div>
                        <div id="content"></div>
                        <div id="main-layout-content" aria-labelledby="header-title" class="_body-module--body--UXv_5">
                          <div class="setting-container--body--2vHpj layout--body--3U2qN setting-container--settings--ozLhS">
                            <div class="setting-container--nav--1uLCY">
                              <nav>
                                <h4 class="hidden-xs _nav--submenu-header--2VnVI form--header-text--ZDMyT">Compte</h4>

                                <ul id="tabs" class="_nav--submenu-wrapper--3Mz7w">
                                  <li class="_nav--submenu-container--3FWhR"><a href="#info" class="activetab _nav--submenu-link--ZUUQK _nav--item--3mD7y">Informations personnelles </a></li>
                                  <!--
                                  <li class="_nav--submenu-container--3FWhR"><a href="#password" class="_nav--submenu-link--ZUUQK _nav--item--3mD7y">Mot de passe </a></li>
                                -->
                                  @if(Auth::user()->type2 == 'teacher')
                                  <li class="_nav--submenu-container--3FWhR"><a href="#students" class="_nav--submenu-link--ZUUQK _nav--item--3mD7y">Mes étudiants </a></li>
                                  @endif
                                  @if(Auth::user()->type == 'default' && Auth::user()->type2 !== 'teacher' && Auth::user()->type3 !== 'admin')
                                  <li class="_nav--submenu-container--3FWhR"><a href="#livrables" class="_nav--submenu-link--ZUUQK _nav--item--3mD7y">Mes livrables </a></li>
                                  @endif
                                  <!--
                                  <li class="_nav--submenu-container--3FWhR"><a href="#teacher" class="_nav--submenu-link--ZUUQK _nav--item--3mD7y">Attribuer un formateur </a></li>
                                -->
                                </ul>
                                <h4 class="hidden-xs _nav--submenu-header-second--3A0tH _nav--submenu-header--2VnVI form--header-text--ZDMyT">Facturation</h4>
                                <ul id="tabs2" class="_nav--submenu-wrapper--3Mz7w">
                                  <li class="_nav--submenu-container--3FWhR"><a href="#state" class="_nav--submenu-link--ZUUQK _nav--item--3mD7y" href="#state">Etat </a></li>
                                  <li class="_nav--submenu-container--3FWhR"><a href="#courses" class="_nav--submenu-link--ZUUQK _nav--item--3mD7y" href="#courses">Cours </a></li>
                                </ul>
                              </nav>
                            </div>

                            @yield('content')

                          </div>
                        </div>
                      </div>
                    </main>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <script src="/css/new_oschool/index2.js" type="text/javascript"></script>
</body>

</html>
