<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="en">

<head>
  <meta charset="utf-8">

  <meta name="theme-color" content="#3C7DC0" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes">

  <style>
    :root {
      --theme-primary-bg: #ecf1f9;
      --theme-primary-light: #a1bbd5;
      --theme-primary: #3c7dc0;
      --theme-primary-dark: #3364AA;
    }
  </style>


  <link rel="stylesheet" type="text/css" href="/css/hackr.css">
  <!-- CSS --

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <title>Parcours Oschool | @yield('title')</title>
  <meta name="description" content="Nous résolvons vos problèmes les plus teigneux">
  <meta itemprop="name" content="Oui! Patron | Nous résolvons vos problèmes les plus teigneux">
  <meta itemprop="description" content="Nous résolvons vos problèmes les plus teigneux">
  <meta itemprop="image" content="https://hackr.io/assets/images/code-images/code-logo-120.png">

  <meta name="csrf-token" content="lpdr45sh6CANKvxJNhj9RwfiwgSVIzxefKeSOjA7">


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <script type="text/javascript">

  function toggle() {
    var x = document.getElementById("menu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

  </script>




</head>

<body class="
      hacknlearn
          desktop
            signin">

  <nav class="navbar navbar-fixed-top scrolled" role="navigation">
    <div class="container no-padding">
      <div class="navbar-holder">
        <div class="nav-main">
          <div class="left">
            <div class="navbar-header">
              <a class="navbar-brand" href="/">
                <img src="https://code.oschool.ci/new/images/logo.png" alt="">
              </a>
              <div onclick="toggle()" class="site-toggle marginleft-xs"><i class="ion-arrow-down-b"></i></div>
              <div class="dropdown site-toggle-dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                </button>
              </div>

            </div>
            <div class="navbar-subnav">
              <ul class="nav navbar-nav">
                <li><a href="/#schools" class="navbar-subnav-links  site-navigation" data-site="Programming">Voir nos écoles</a></li>
                <li><span style="height: 6px; width: 6px; background-color: red; border-radius: 4px; position: absolute; top: 0; right: 0;"></span><a target="_blank" href="https://calendly.com/oschool_e-learning/demo-oschool-code" class="navbar-subnav-links  site-navigation">Demandez une démo</a></li>
              </ul>
            </div>
          </div>
          <div class="right">
            <button class="nav-btn visible-xs btn btn-primary btn-as-link mob-signup open-signup-modal"> <a href="{{route('login')}}">Salle de classe</a></button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
              <ul class="nav navbar-nav">
                <li>
                  <a href="{{route('login')}}" class="home_button">Salle de classe</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="mobile-search visible-xs">
          <div class="mobile-navbar-search search-bar">
            <div class="form-holder">
              <div class="navbarSearch">
                <input class="typeahead form-control nav-input js-navbar-search-input" type="text" placeholder="Search for Python, AngularJS, ...">
              </div>
              <i class="icon ion-ios-search-strong"></i>
            </div>
          </div>
        </div>

      </div>
      <div id="menu" class="site-toggle-dropdown">
        <p>Voir</p>
        <a href="/#schools" class="site-navigation">
          <img class="emoji-png" src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/programming.png" alt="programming">Nos écoles
        </a>
        <a target="_blank" href="https://calendly.com/oschool_e-learning/demo-oschool-code" class="site-navigation">
          <img class="emoji-png" src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/design.png" alt="design">Une démo
        </a>

      </div>
    </div>
  </nav>

  @yield('content')


  <div class="row u-margin-t-xxx-lg align-row ">
    <div style="padding-left: 10rem;" class="col-xs-12 col-sm-6">
      <div class="c-how__section">
        <div class="c-how__sectionContent">
          <h4 class="h4 u-bold">Vous n'êtes pas satisfaits ? Nous vous remboursons votre argent</h4>
          <p class="u-margin-t-md subHeading">Bénéficiez d'une garantie de satisfaction inconditionnelle de 14 jours sur cette formation</p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="c-how__sectionImages">
        <img src="/img/page-parcours/congrats.svg" />
      </div>
    </div>
  </div>
</div>

<!-- <div class="container full-width c-pricing">
<div class="row">
  <div class="col-xs-12">
    <div class="c-pricing__heading">
      <h3 class="h3 u-bold">Simple, fair pricing</h3>
      <p class="u-margin-t-md subHeading">Learning should be Free and it is, However if you do get stuck and need some experts help, we have a paid plan for
        you.
      </p>
    </div>
  </div>
</div>
<div class="c-pricing__list row">
  <div class="col-md-8">
    <div class="col-xs-12 col-sm-6 c-pricing__item">
      <div class="c-pricing__itemHeading">Starters Plan</div>
      <img src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/hacknlearn/pricing-1.svg" />
      <div class="c-pricing__features">
        <div class="c-pricing__feature">5 challenges with assets for practicing</div>
        <div class="c-pricing__feature">Solutions of all assignments</div>
        <div class="c-pricing__feature">Access to Hack n Learn discussions Forum</div>
        <div class="c-pricing__price">Free</div>
        <a href="https://hackr.io/hack-n-learn/react" class="btn btn-primary fw-bold u-margin-t-md  subscribe-hacknlearn login-required " data-url="https://hackr.io/hack-n-learn/react" data-message="Please login to start React assignments.">Start Now!</a>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 c-pricing__item">
      <div class="c-pricing__itemHeading">Premium Plan</div>
      <img src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/hacknlearn/pricing-2.svg" />
      <div class="c-pricing__features">
        <div class="c-pricing__feature">5 challenges with assets for practicing</div>
        <div class="c-pricing__feature">Solutions of all assignments</div>
        <div class="c-pricing__feature">Access to Hack n Learn discussions Forum</div>
        <div class="c-pricing__feature">
          <strong>Technical Guidance via email</strong>
        </div>
        <div class="c-pricing__feature">
          <strong>Technical Assistance via skype over a 30 min session for each task</strong>
        </div>
        <div class="c-pricing__price">Coming Soon!</div>
      </div>
    </div>
  </div>
</div>
</div> -->
<div class="container alt">
  <div class="row c-learn">
    <div class="col-xs-12 col-sm-6 c-learn__list">
      <div>
        <img width="300" src="/img/page-parcours/reviews.png" />
      </div>

    </div>
    <div class="col-xs-12 col-sm-6 c-learn__content">
      <h3 class="h3 u-bold">Découvrez ce que disent nos étudiants</h3>
      <p class="u-margin-t-md subHeading">Ils ont été nombreux cette formation en télé présentiel et <a href="https://discord.gg/hhbzcHE" target="_blank">voici ce qu'ils en pensent</a> </p>
    </div>
  </div>
</div>
</div>
<div class="container alt c-getStarted" id="get-started">
  <div class="row align-row c-getStarted__content">
    <div class="col-xs-12 col-sm-6">
      <div class="h3 u-bold">Lancez-vous dès maintenant dans un monde plein d'opportunités et d'aventures </div>
      <p class="u-margin-t-sm subHeading">Maitrisez cette compétence pour développer de nouvelles compétences,
        travailler dans une entreprise, ou créer la sienne !</p>
      <div class="c-form__footer l-form__footer">
        <div class="l-form__submit">
          <a class="home_button" href="#payment">Inscrivez-vous maintenant</a>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 c-getStarted__contentRight">
      <img src="/img/page-parcours/comp2.png" />
    </div>
  </div>
</div>



<footer>
  <div class="container alt">
    <div class="row">
      <div class="col-xs-12">
        <div class="footer-holder">
          <div class="links">
            <ul class="fx-links">
              <li><a href="https://code.oschool.ci/cours">Nos parcours</a></li>
              <li><a href="https://oschool.ci/blog/">Blog</a></li>
              <li><a href="http://oschool.ci/questions-courantes/">Des questions ?</a></li>
              <li>
                <a data-toggle="modal" data-target="#modalFeedback" href="javascript:void(0)">
                  Nous vous <img class="emoji-png" src="https://d1eq8vvyuam4eq.cloudfront.net/assets/images/heart.svg" alt="heart-icon">beaucoup</a></li>
            </ul>
          </div>
          <div class="social-links links">
            <ul class="fx-links">
              <li><a href="https://www.facebook.com/Oschool.ci/" target="_blank" rel="noopener" class="facebook"><i class="fa fa-facebook"></i>Facebook</a></li>
              <li><a href="https://www.linkedin.com/school/oschool/" target="_blank" rel="noopener" class="twitter"><i class="fa fa-twitter"></i>LinkedIn</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


</body>

</html>
