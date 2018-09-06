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
          <img src="/avilon/img/scrimba.png" alt="">
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
        <div class="col-lg-6 about-img wow fadeInLeft">
          <img src="/avilon/img/cours.png" alt="">
        </div>
      </div>
      <div class="row">

        <div class="col-lg-12">
          <div class="text-center">
            <a href="#" class="get-started-btn text-center btn btn-primary">Demander une démo</a>

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
            <h3 class="section-title">La méthode</h3>
            <span class="section-divider"></span>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 features-img">
          <img src="/avilon/img/about.jpg" alt="" class="wow fadeInLeft">
        </div>

        <div class="col-lg-8 col-md-7 ">

          <div class="row">

            <div class="col-lg-6 col-md-6 box wow fadeInRight">
              <div class="icon"><i class="ion-ios-flask-outline"></i></div>
              <h4 class="title"><a href="">1. Remplissez un formulaire d'inscription</a></h4>
              <p class="description">Nous verrons si vous êtes éligible ou pas pour apprendre le métier de développeur web
              dans notre école.</p>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
              <div class="icon"><i class="ion-android-laptop"></i></div>
              <h4 class="title"><a href="">Suivez le cours, depuis votre maison, avec un formateur en téléprésentiel</a></h4>
              <p class="description">Après votre inscription, vous suivez le cours en fonction d'un emploi
              du temps bien défini (2 heures/semaine). Ce cours est dispensé dans la classe virtuelle par
            un formateur, qui se chargera de votre encadrement tout au long de la formation.</p>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight data-wow-delay"="0.2s">
              <div class="icon"><i class=" ion-android-phone-portrait"></i></div>
              <h4 class="title"><a href="">Faites les exercices et projets</a></h4>
              <p class="description">Pendant les cours, vous ferez des exercices et après les cours vous travaillez sur des projets
              avec l'aide de votre formateur. Vous avez même la possibilité d'enregistrer chaque session de cours
            pour pouvoir regarder après. De plus, vous pouvez cloner l'espace de travail du cours pour avoir une
          copie du code source</p>
            </div>
            <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">Soutenez et obtenez votre certificat !</a></h4>
              <p class="description">A la fin de la formation, vous passez une soutenance devant le jury Oschool,
              à la fin de laquelle vous obtenez un certificat qui vous permet d'être embauché par les entreprises.</p>
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
              <a href="#" class="get-started-btn text-center btn btn-primary">Demander une démo</a>

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
        <h3 class="section-title">Une formation en téléprésentiel innovante !</h3>
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
    Clients
  ============================-->
  <section id="clients">
    <div class="container">

      <div class="row wow fadeInUp">
        <div class="col-md-12" style="text-align: center;">
            <h2>Travaillez comme</h2>
        </div>

        <div class="col-md-2">
          <img src="/avilon/img/clients/client-1.png" alt="">
        </div>

        <div class="col-md-2">
          <img src="/avilon/img/clients/client-2.png" alt="">
        </div>

        <div class="col-md-2">
          <img src="/avilon/img/clients/client-3.png" alt="">
        </div>

        <div class="col-md-2">
          <img src="/avilon/img/clients/client-4.png" alt="">
        </div>

        <div class="col-md-2">
          <img src="/avilon/img/clients/client-5.png" alt="">
        </div>

        <div class="col-md-2">
          <img src="/avilon/img/clients/client-6.png" alt="">
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
        <h3 class="section-title">Prix</h3>
        <span class="section-divider"></span>
        <p class="section-description">Des prix pensés pour chacun de vous</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="box wow fadeInLeft">
            <h3>Free</h3>
            <h4><sup>$</sup>0<span> month</span></h4>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
              <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
              <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
              <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
              <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="box featured wow fadeInUp">
            <h3>Business</h3>
            <h4><sup>$</sup>29<span> month</span></h4>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
              <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
              <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
              <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
              <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="box wow fadeInRight">
            <h3>Developer</h3>
            <h4><sup>$</sup>49<span> month</span></h4>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
              <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
              <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
              <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
              <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
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
            <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
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
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div>
              <i class="ion-ios-email-outline"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="ion-ios-telephone-outline"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
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
              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #contact -->

</main>

@endsection
