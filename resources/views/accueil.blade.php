@extends('layouts.menu')

@section('content')

<!--==========================
  Intro Section
============================-->
<section id="intro">

  <div class="intro-text">
    <h2>Salut, Futurs Codeurs</h2>
    <p>Embarquez dans nos salles de classe virtuelles pour apprendre le métier de développeur.
    <br>  Un seul objectif : faire de vous un développeur web compétent, diplômé et recruté ! Ca vous dit ?</p>
    <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
  </div>

  <div class="product-screens">

    <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
      <img width="650" src="/avilon/img/scrimba.png" alt="">
    </div>

    <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
      <img width="600" src="/avilon/img/chat.png" alt="">
    </div>

    <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
      <img width="300" src="/avilon/img/slider2.png" alt="">
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
        <h3 class="section-title">1 étudiant. 1 formateur</h3>
        <span class="section-divider"></span>
        <p class="section-description">
          Oschool, vous permet d'apprendre le code autrement. Une première en Francophonie !
          Nous utilisons pour vous un nouveau moyen puissant d'apprendre le code.
            Jouez avec le code des formateurs à tout moment, directement dans le lecteur.
        </p>
      </div>

      <div class="row">
        <div class="col-lg-6 about-img wow fadeInLeft">
          <img src="/avilon/img/cours.png" alt="">
        </div>

        <div class="col-lg-6 content wow fadeInRight">
          <h2>Pourquoi ?</h2>
          <h3>Beaucoup d'entre nous aiment le côté humain des cours en présentiel. D'autres préfèrent
            l'économie qu'engendrent les cours en ligne. Pourquoi faire un choix si vous pouvez avoir les deux ?
            </h3>
          <p>
            Avec Oschool, c'est :
          </p>

          <ul>
            <li><i class="ion-android-checkmark-circle"></i> Un cours en ligne en téléprésentiel avec un formateur sur 4 mois</li>
            <li><i class="ion-android-checkmark-circle"></i> Un emploi du temps léger et adapté au vôtre</li>
            <li><i class="ion-android-checkmark-circle"></i> Un ensemble de projets réalisés et une soutenantce pour valider son parcours </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 content wow fadeInRight">
          <h2>Ce qu'ils en pensent</h2>
          <h3>Cette école suscite déjà de l'engouement dans la communauté Oschool ! Rejoignez le forum pour discuter
            avec d'autres étudiants de ce programme</h3>
          <div style="text-align: center;margin-bottom: 2em;" class="">

            <a href="https://discord.gg/hhbzcHE" target="_blank">
              Rejoindre la communauté
            </a>

          </div>
        </div>
        <div class="col-lg-6 about-img wow fadeInLeft">
          <img style="border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="/avilon/img/forum.png" alt="">
        </div>
      </div>
      <div class="row">

        <div class="col-lg-12">
          <div class="text-center">
            <a target="_blank" href="https://calendly.com/oschool_e-learning/demo-oschool-code" class="get-started-btn text-center btn ">Demander une démo</a>

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

        <div class="col-lg-12">
          <div class="section-header wow fadeIn" data-wow-duration="1s">
            <h3 class="section-title">Comment ca marche concrètement ?</h3>
            <span class="section-divider"></span>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 ">

          <div class="row">

            <div class="col-lg-12 col-md-12 box wow fadeInRight">
              <iframe src="https://player.vimeo.com/video/290234963?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
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
            <img width="400" class="advanced-feature-img-right wow fadeInRight" src="/avilon/img/demo.gif" alt="">
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
              <a target="_blank" href="https://calendly.com/oschool_e-learning/demo-oschool-code" class="get-started-btn text-center btn ">Demander une démo</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="programme" class="features-row">
      <div class="container">
        <h4>Programme des cours</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline7">
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                        <span class="year">Semaine 1</span>
                        <div class="timeline-content">
                            <h5 class="title" style="margin-right: 32px;">Sections</h5>
                            <p class="description" style="margin-right: 32px;">
                                - Bienvenue
                                <br><br>
                               - Comment fonctionne le web?
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-laptop"></i></div>
                        <span class="year">Semaine 2</span>
                        <div class="timeline-content">
                            <h5 class="title">Sections</h5>
                            <p class="description">
                                - HTML: Structure d'un site web
                                <br><br>
                               - Un regard plus attentif sur CSS
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-laptop"></i></div>
                        <span class="year">Semaine 3</span>
                        <div class="timeline-content">
                            <h5 class="title" style="margin-right: 32px;">Sections</h5>
                            <p class="description" style="margin-right: 32px;">
                                - Bordures et espaces
                                <br><br>
                               - Construire avec Bootstrap
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-file-code-o"></i></div>
                        <span class="year">Semaine 4</span>
                        <div class="timeline-content">
                            <h5 class="title">Sections</h5>
                            <p class="description">
                                - Créez un site web interactif: Faire un menu déroulant
                                <br><br>
                               - Site web interactif: Menu coulissant
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-laptop"></i></div>
                        <span class="year">Semaine 5</span>
                        <div class="timeline-content">
                           <h5 class="title" style="margin-right: 32px;">Sections</h5>
                            <p class="description" style="margin-right: 32px;">
                                - Javascript: les bases
                                <br><br>
                               - Les évènements
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-file-code-o"></i></div>
                        <span class="year">Semaine 6</span>
                        <div class="timeline-content">
                            <h5 class="title">Sections</h5>
                            <p class="description">
                                - Site web interactif : Construisez un fil d'actualités
                                <br><br>
                               - Le DOM
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-file-code-o"></i></div>
                       <span class="year">Semaine 7</span>
                        <div class="timeline-content">
                            <h5 class="title" style="margin-right: 32px;">Sections</h5>
                            <p class="description" style="margin-right: 32px;">
                                - Site web interactif: Construisons la page d'accueil de Flipboard
                                <br><br>
                               - PHP: Introduction
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-laptop"></i></div>
                        <span class="year">Semaine 8</span>
                        <div class="timeline-content">
                            <h5 class="title">Sections</h5>
                            <p class="description">
                                - Les bases en PHP
                                <br><br>
                               - Transmettre les données de page en page
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-laptop"></i></div>
                        <span class="year">Semaine 9</span>
                        <div class="timeline-content">
                            <h5 class="title" style="margin-right: 32px;">Sections</h5>
                            <p class="description" style="margin-right: 32px;">
                                - PHP MySQL
                                <br><br>
                               - Wordpress
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-laptop"></i></div>
                       <span class="year">Semaine 10</span>
                        <div class="timeline-content">
                            <h5 class="title">Sections</h5>
                            <p class="description">
                                - Hébergement et noms de domaines
                                <br><br>
                               - Qu'avons-nous appris de ce cours ?
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline-icon"><i class="fa fa-laptop"></i></div>
                        <span class="year">Semaine 11 et 12</span>
                        <div class="timeline-content">
                            <h5 class="title" style="margin-right: 32px;">Sections</h5>
                            <p class="description" style="margin-right: 32px;">
                                - Projets
                                <br><br>
                               - Soutenances
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="features-row section-bg">
      <div class="container">
        <h4>Le programme des rentrées</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline8">
                    <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="year">1er Octobre 2018 - 4 Janvier 2019</span>
                        <div class="timeline-content">
                            <h3 class="title">La Genèse</h3>
                            <p class="description">
                              La première promotion ouvre ses portes ! C'est la génération
                              la plus chanceuse, vu toutes les opportunités qu'elle aura...
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="year">5 novembre 2018 - 8 février 2019</span>
                        <div class="timeline-content">
                            <h3 class="title">Le défi</h3>
                            <p class="description">
                              Deuxième embarcation vers la planète des codeurs, où vous
                              devrez relever de nombreux défis
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <span class="timeline-icon"></span>
                        <span class="year">Février - Mars 2019</span>
                        <div class="timeline-content">
                            <h3 class="title">Date bientôt dévoilée</h3>
                            <p class="description">
                                <img src="/avilon/img/ambassador.gif" style="width: 100%;" alt="">
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>
  </section><!-- #advanced-features -->

  <!--==========================
    Call To Action Section
  ============================-->
  <section id="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Essayez dès maintenant et GRATUITEMENT !</h3>
          <p style="font-size: 22px;" class="cta-text"> Demandez une démo et nous vous montrerons comment ca marche gratuitement. Après vous êtes libre de prendre votre décision.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a target="_blank" class="cta-btn align-middle" href="https://calendly.com/oschool_e-learning/demo-oschool-code">Demander une démo</a>
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
        <h3 class="section-title">Une formation en téléprésentiel innovante !</h3>
        <span class="section-divider"></span>
        <p class="section-description">Disponibles 24/7, pour apprendre à son rythme, et 100% en ligne.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="box wow fadeInLeft">
            <div class="icon"><i class="ion-ios-flame-outline"></i></div>
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
            <p class="description">L'expérience de l'apprentissage collaboratif, l'accompagnement des formateurs</p>
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
    Pricing Section
  ============================-->
  <section style="background-color: #fff;" id="pricing" class="section-bg">
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
            <h4>30.000<sup>FCFA</sup><span> /mois</span></h4>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Un formateur dédié en télé présentiel chaque semaine</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès à tableau de bord spécial</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès à la communauté Oschool</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès aux mises à jour du cours</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès aux fichiers PDF</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès à un compte Oschool normal</li>
              <li><i class="ion-android-checkmark-circle"></i> Accès au cours DEVELOPPEUR WEB sur oschool.ci</li>
            </ul>
            <a data-toggle="modal" data-target="#myModal" href="#" style="width: 173px; height: 35px; background: #FFB400;" class="get-started-btn">Je m'inscris !</a>
          </div>
        </div> 

        <!-- The Modal -->
<div class="modal fade" id="myModal">
<div class="modal-dialog">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 style="font-size: 24px;" class="modal-title">Remplissez ce formulaire pour vous inscrire à la formation</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
      <form method="post" action="{{url('envoi')}}">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="">Email:</label>
          <input type="email" class="form-control" id="" placeholder="Email" name="email" required>
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

  <section id="clients">
    <div class="container">

      <div class="row wow fadeInUp">
        <div class="col-md-12" style="text-align: center;">
            <h2>Nos partenaires</h2>
        </div>

        <div class="col-md-4">
          <img src="/avilon/img/clients/client-4.png" alt="">
        </div>

        <div class="col-md-4">
          <img src="/avilon/img/clients/client-5.png" alt="">
        </div>

        <div class="col-md-4">
          <img src="/avilon/img/clients/client-6.png" alt="">
        </div>

      </div>
    </div>
  </section><!-- #more-features -->


  <!--==========================
    Gallery Section
  ============================-->
  <!--
  <section id="gallery">
    <div class="container-fluid">
      <div class="section-header">
        <h3 class="section-title">Nos cours</h3>
        <span class="section-divider"></span>
        <p class="section-description"></p>
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
            <a href="/avilon/img/gallery/php.png" class="gallery-popup">
              <img src="/avilon/img/gallery/php.png" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="gallery-item wow fadeInUp">
            <a href="/avilon/img/gallery/wordpress.png" class="gallery-popup">
              <img src="/avilon/img/gallery/wordpress.png" alt="">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- #gallery -->

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
            <div class="text-center"><a target="_blank" href="https://calendly.com/oschool_e-learning/demo-oschool-code" class="get-started-btn text-center btn ">Demander une démo</a></div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #contact -->

</main>

@endsection
