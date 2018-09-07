@extends('layouts.menuOnline')

@section('content')

<!--==========================
  Intro Section
============================-->
<section id="intro">

  <div class="intro-text">
    <h2>Nouvelle facon d'apprendre à coder</h2>
    <p>Jouez avec le code des instructeurs à tout moment, directement dans le lecteur.</p>
    <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
  </div>

  <div class="product-screens">

    <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
      <img width="600" src="/avilon/img/online1.png" alt="">
    </div>

  </div>

</section><!-- #intro -->

<main id="main">

  <!--==========================
    About Us Section
  ============================-->
  <section id="about" class="section-bg">
    <div class="container-fluid">
      <div class="section-header">
        <h3 class="section-title">Un duo gagnant: Oschool et Scrimba</h3>
        <span class="section-divider"></span>
        <p class="section-description">
          Oschool, vous permet d'apprendre le code autrement. Une première en Francophonie !
          Nous utilisons pour vous un nouveau moyen puissant d'apprendre le code.
            Jouez avec le code des formateurs à tout moment, directement dans le lecteur.
        </p>
      </div>

      <div class="row">
        <div class="col-lg-6 about-img wow fadeInLeft">
          <img src="/avilon/img/scrimba.png" alt="">
        </div>

        <div class="col-lg-6 content wow fadeInRight">
          <h2>Nouvelle facon d'apprendre à coder</h2>
          <h3>On sait tous ce que ca fait de suivre des cours de programmation en ligne, regarder pendant des
          heures le code du professeur, et souffrir à faire la même chose sur son ordi. Oschool a repensé la facon d'apprendre
        le code, pour les apprentis codeurs qui aiment la pratique et l'efficacité</h3>
          <p>
            Voilà ce que vous gagnez à apprendre le code avec Oschool et Scrimba.
          </p>

          <ul>
            <li><i class="ion-android-checkmark-circle"></i> Modification du code des formateurs directement en ligne</li>
            <li><i class="ion-android-checkmark-circle"></i> Visualisation des résultats en live</li>
            <li><i class="ion-android-checkmark-circle"></i> Séance de code en direct avec un formateur</li>
          </ul>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-12">
          <div class="text-center">
            <a href="#" class="get-started-btn text-center btn ">Essayez gratuitement</a>

          </div>
        </div>

      </div>

    </div>
  </section><!-- #about -->

  <!--==========================
    Product Featuress Section
  ============================-->
  <section id="features">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 offset-lg-4">
          <div class="section-header wow fadeIn" data-wow-duration="1s">
            <h3 class="section-title">Fonctionnalités</h3>
            <span class="section-divider"></span>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 features-img">
          <img src="/avilon/img/image3.jpg" alt="" class="wow fadeInLeft">
        </div>

        <div class="col-lg-8 col-md-7 ">

          <div class="row">

            <div class="col-lg-6 col-md-6 box wow fadeInRight">
              <div class="icon"><i class="ion-ios-flask-outline"></i></div>
              <h4 class="title"><a href="">Mettre en pause et interagir avec le code</a></h4>
              <p class="description">Oschool vous permet d'interagir avec le code à l'intérieur de la vidéo
                quand vous le souhaitez. C’est une bouée de sauvetage lorsque vous ne comprenez pas complètement
                le code et que vous devez vous en servir pour le comprendre. C’est également idéal lorsque vous souhaitez
                simplement copier un morceau de code de la vidéo, pour le mettre dans votre environnement local.</p>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
              <div class="icon"><i class="ion-android-laptop"></i></div>
              <h4 class="title"><a href="">Suivez le cours, depuis n'importe quel écran</a></h4>
              <p class="description">Nous adoptons le contenu des vidéos sur votre appareil.
                Petit écran ? Nous allons augmenter la taille de la police. Vous préférez regarder en portrait
                plutôt qu'en paysage ? Pas de soucis,
                nous allons réorganiser le contenu de la page pour qu’elle soit correcte.</p>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight data-wow-delay"="0.2s">
              <div class="icon"><i class=" ion-android-phone-portrait"></i></div>
              <h4 class="title"><a href="">Etudiez, même avec une faible connexion internet</a></h4>
              <p class="description">Une vidéo de 200 mégaoctets pèse 2 mégaoctets sur la plateforme partenaire Scrimba.
                Cela signifie que vous pouvez regarder des vidéos même
                lorsque votre connexion Internet est lente, par exemple lorsque vous vous déplacez.</p>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">Jamais pixellisé</a></h4>
              <p class="description">Les vidéos sont toujours 100% nets. La résolution est infinie,
                ce qui signifie que vous ne verrez plus jamais un screencast de codage pixélisé.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- #features -->

  <!--==========================
    Product Advanced Features Section
  ============================-->
  <section id="advanced-features">

    <div class="features-row section-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img width="400" class="advanced-feature-img-right wow fadeInRight" src="/avilon/img/frontend.png" alt="">
            <div class="wow fadeInLeft">
              <h2>Plus besoin de vous déplacer pour apprendre, ou d'acheter des cours en ligne qu'il serait difficile de suivre après</h2>
              <h3>Restez chez vous à la maison, ou dans l'endroit qui vous sied le plus et suivez votre cours.</h3>
              <p>Un formateur sera en ligne avec vous aux heures prévues, et vous enseignera ce qu'il y a à savoir,
              en fonction du programme du cours</p>
              <p>Apprenez les langages de programmation web plus rapidement et de facon plus pratique</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="text-center">
              <a href="#" class="get-started-btn text-center btn ">Demander une démo</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="features-row">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img width="600" class="advanced-feature-img-left" src="/avilon/img/cours.png" alt="">
            <div class="wow fadeInRight">
              <h2>Le programme de la formation</h2>
              <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
              <p class="wow fadeInRight" data-wow-duration="0.5s">Inscrivez-vous à nos différentes rentrées</p>
              <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
              <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4" data-wow-duration="0.5s"></i>
              <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--
    <div class="features-row section-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img class="advanced-feature-img-right wow fadeInRight" src="/avilon/img/advanced-feature-3.jpg" alt="">
            <div class="wow fadeInLeft">
              <h2>Le programme des rentrées</h2>
              <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
              <i class="ion-ios-albums-outline"></i>
              <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>  -->
  </section><!-- #advanced-features -->

  <!--==========================
    Call To Action Section
  ============================-->
  <section id="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Essayez dès maintenant et GRATUITEMENT !</h3>
          <p class="cta-text"> Demandez une démo et nous vous montrerons comment ca marche gratuitement. Après vous êtes libre de prendre votre décision.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Demander une démo</a>
        </div>
      </div>

    </div>
  </section><!-- #call-to-action -->

  <!--==========================
    More Features Section
  ============================-->
  <section id="more-features" class="section-bg">
    <div class="container">

      <div class="section-header">
        <h3 class="section-title">Un apprentissage innovant !</h3>
        <span class="section-divider"></span>
        <p class="section-description">Disponibles 24/7, pour apprendre à son rythme, et 100% en ligne.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="box wow fadeInLeft">
            <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
            <h4 class="title"><a href="">Des compétences prisées.</a></h4>
            <p class="description">Développement web, front-end, back-end, fullstack</p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInRight">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Une approche nouvelle</a></h4>
            <p class="description">Une formation en ligne, en live, dans une classe virtuelle, qui marche même avec une
            faible connexion Internet</p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInLeft">
            <div class="icon"><i class="ion-ios-heart-outline"></i></div>
            <h4 class="title"><a href="">Un engagement maximum</a></h4>
            <p class="description">L'expérience de l'apprentissage collaboratif, l'accompagnement de la communauté</p>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box wow fadeInRight">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Votre budget maîtrisé</a></h4>
            <p class="description">Jusqu'à 5x moins coûteux qu'une formation en présentiel.
            <br>Temps de trajet Maison - Ecole = 0 seconde </p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- #more-features -->




  <!--==========================
    Clients
  ============================-->
  <section id="clients">
    <div class="container">

      <div class="row wow fadeInUp">
        <div class="col-md-12" style="text-align: center;">
            <h2>Travaillez comme</h2>
        </div>

        <div class="col-md-3">
          <img src="/avilon/img/clients/client-1.png" alt="">
        </div>

        <div class="col-md-3">
          <img src="/avilon/img/clients/client-2.png" alt="">
        </div>

        <div class="col-md-3">
          <img src="/avilon/img/clients/client-3.png" alt="">
        </div>

        <div class="col-md-3">
          <img src="/avilon/img/clients/client-8.png" alt="">
        </div>

      </div>
    </div>
  </section><!-- #more-features -->

  <!--==========================
    Pricing Section
  ============================-->
  <section id="pricing" class="section-bg">
    <div class="container">

      <div class="section-header">
        <h3 class="section-title">Vous êtes unique. Notre prix aussi.</h3>
        <span class="section-divider"></span>
        <p class="section-description">Un prix qui vous séduira certainement</p>
      </div>

      <div class="row">


        <div class="col-lg-4 col-md-6" style="width: 50%; margin: auto;">
          <div class="box featured wow fadeInUp">
            <h3>Un seul prix</h3>
            <h4>20.000<sup>FCFA</sup><span> à vie</span></h4>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Accès à la communauté Oschool</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès aux mises à jour du cours</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès aux fichiers PDF</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès à un compte Oschool</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès au cours DEVELOPPEUR WEB sur oschool.ci</li>
            </ul>
            <a href="#" class="get-started-btn">Je m'inscris !</a>
          </div>
        </div>



      </div>
    </div>
  </section><!-- #pricing -->



  <!--==========================
    Our Team Section
  ============================-->
  <section id="team" class="section-bg">
    <div class="container">
      <div class="section-header">
        <h3 class="section-title">La team Oschool</h3>
        <span class="section-divider"></span>
        <p class="section-description">Pleins d'expérience, d'humour et d'inspiration pour vous servir</p>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="/avilon/img/team/david.png" alt=""></div>
            <h4>David YAO</h4>
            <span>Co-fondateur Oschool</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="/avilon/img/team/perborgen.jpg" alt=""></div>
            <h4>Per Harald Borgen</h4>
            <span>Co-fondateur Scrimba</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="/avilon/img/team/arsenegimp.jpeg" alt=""></div>
            <h4>Arsène Kouassi</h4>
            <span>CTO et co-fondateur Oschool</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="/avilon/img/team/adamsgimp.jpeg" alt=""></div>
            <h4>Adams Tehoua</h4>
            <span>Marketing Director et co-fondateur Oschool</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- #team -->

  <!--==========================
    Gallery Section
  ============================-->
  <section id="gallery">
    <div class="container-fluid">
      <div class="section-header">
        <h3 class="section-title">Nos cours</h3>
        <span class="section-divider"></span>
        <p class="section-description">Vous apprendrez principalement les langages du front-end</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="/avilon/img/gallery/js.jpg" class="gallery-popup">
              <img src="/avilon/img/gallery/html.jpg" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="/avilon/img/gallery/js.jpg" class="gallery-popup">
              <img src="/avilon/img/gallery/js.jpg" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="/avilon/img/gallery/bootstrap.png" class="gallery-popup">
              <img src="/avilon/img/gallery/bootstrap.png" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="/avilon/img/gallery/react.png" class="gallery-popup">
              <img src="/avilon/img/gallery/react.png" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="/avilon/img/gallery/angular.png" class="gallery-popup">
              <img src="/avilon/img/gallery/angular.png" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="/avilon/img/gallery/vue.png" class="gallery-popup">
              <img src="/avilon/img/gallery/vue.png" alt="">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #gallery -->

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact">
    <div class="container">
      <div class="row wow fadeInUp">

        <div class="col-lg-4 col-md-4">
          <div class="contact-about">
            <h3>Oschool</h3>
            <p>Oschool est une plateforme de formations, sur laquelle vous pouvez suivre
            et/ou créer des formations dans les domaines du web</p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="info">
            <div>
              <i class="ion-ios-location-outline"></i>
              <p>Abidjan<br>Côte d'Ivoire</p>
            </div>

            <div>
              <i class="ion-ios-email-outline"></i>
              <p>info@oschool.ci</p>
            </div>

            <div>
              <i class="ion-ios-telephone-outline"></i>
              <p>+225 21-37-12-77</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
          <!--
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </form> -->
            <div class="text-center"><a href="/online" class="get-started-btn text-center btn ">Essayez gratuitement</a></div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #contact -->

</main>

@endsection
