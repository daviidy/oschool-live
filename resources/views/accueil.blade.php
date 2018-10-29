@extends('layouts.menu-new')

@section('content')


<!-- Home -->

<div class="home">
  <div class="home_background" style="background-image: url(/new/images/fond.jpg);"></div>
  <div class="home_content">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1 class="home_title">Apprenez à votre rythme le sujet de votre choix. Avec un formateur dédié en télé présentiel</h1>
          <div class="home_button trans_200"><a href="#">Commencez</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Language -->

<div class="language">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="language_slider_container">

          <!-- Language Slider -->

          <div class="owl-carousel owl-theme language_slider">

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/web-dev.png" alt=""></div>
                <div class="lang_name">Développement web</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/mobile-dev.png" alt=""></div>
                <div class="lang_name">Android/iOS</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/design.png" alt=""></div>
                <div class="lang_name">Front-end</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/photoshop.png" alt=""></div>
                <div class="lang_name">Design numérique</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/cm.png" alt=""></div>
                <div class="lang_name">Community management</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/social.png" alt=""></div>
                <div class="lang_name">Social Média</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/blog.png" alt=""></div>
                <div class="lang_name">Blogging</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/photo.png" alt=""></div>
                <div class="lang_name">Photographie</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/bourse.png" alt=""></div>
                <div class="lang_name">Investissement en bourse</div>
              </a>
            </div>

          </div>

          <div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
          <div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Courses -->

<div id="schools" class="courses">
  <div class="courses_background"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="section_title text-center">Construisez votre futur carrière dans nos écoles</h2>
      </div>
    </div>
    <div class="row courses_row">

      <!-- Course -->

      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/devweb.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="ecoleprog">Ecole de Programmation</a></div>

          </div>

        </div>
      </div>

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/cm.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="ecolemarketing">Ecole du Web Marketing</a></div>
          </div>

        </div>
      </div>

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/business.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="/ecolebusiness">Ecole du business</a></div>

          </div>

        </div>
      </div>


    </div>

    <div class="row courses_row">


      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/datascience.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Ecole de la Data Science</a></div>
          </div>

        </div>
      </div>

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/ai.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Ecole de l'Intelligence Artificielle</a></div>

          </div>

        </div>
      </div>

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/langues.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="/ecolelang">Ecole des Langues</a></div>

          </div>

        </div>
      </div>


    </div>
  </div>
</div>

<!-- Instructors -->

<div class="instructors">
  <div class="instructors_background" style="background-image:url(/new/images/instructors_background.png)"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="section_title text-center">Comment ca marche ?</h2>
      </div>
    </div>
    <div class="row instructors_row">

      <!-- Instructor -->
      <div class="col-lg-4 instructor_col">
        <div class="instructor text-center">
          <div class="instructor_image_container">
            <div class="instructor_image"><img style="padding: 25px;" src="/new/images/visio.png" alt=""></div>
          </div>
          <div class="instructor_name"><a href="instructors.html">Suis une formation en télé présentiel</a></div>
          <div class="instructor_text">
            <p>Economise de l'argent et des efforts, en suivant nos formations en télé présentiel, avec un formateur dédié. <br>
            De plus, tu as le formateur pour toi seul; tu ne le partages pas avec d'autres étudiants pendant la séance. </p>
          </div>
        </div>
      </div>

      <!-- Instructor -->
      <div class="col-lg-4 instructor_col">
        <div class="instructor text-center">
          <div class="instructor_image_container">
            <div class="instructor_image"><img style="padding: 25px;" src="/new/images/code.png" alt=""></div>
          </div>
          <div class="instructor_name"><a href="instructors.html">Fais les exercices et projets</a></div>
          <div class="instructor_text">
            <p>La formation est encore plus intéressante, car tu as tous les outils d'apprentissage à ta formation. <br>
              Réalise les nombreux exercices et projets qui ont trait à la vie réelle. </p>
          </div>
        </div>
      </div>

      <!-- Instructor -->
      <div class="col-lg-4 instructor_col">
        <div class="instructor text-center">
          <div class="instructor_image_container">
            <div class="instructor_image"><img src="/new/images/win.jpg" alt=""></div>
          </div>
          <div class="instructor_name"><a href="instructors.html">Soutiens et gagne !</a></div>
          <div class="instructor_text">
            <p>Réalise le projet de fin de formation, soutiens ce projet, et obtiens ton certificat ! <br>
              Mais par dessus-tout, à la fin de ta formation, tu acquiers les compétences recherchées par les entreprises</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Register -->

<div class="register">
  <div class="container">

    <div class="row espace">

      <!-- Register Form -->

      <div class="col-lg-12 text-center">
          <h2>Oschool a changé leur vie</h2>
                <iframe style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="https://player.vimeo.com/video/297699968?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div> <!--fin row-->




    <div class="row espace">

      <!-- Register Form -->

      <div class="col-lg-6">
        <div class="register_form_container">
          <div class="register_form_title">Des doutes ? Laissez-vous convaincre par nos MOOC</div>
            <div class="row register_row">
              <div class="col">
                <a href="https://oschool.ci">
                  <button type="submit" class="form_button trans_200">Obtenir les cours	</button>
                </a>
              </div>
            </div>
        </div>
      </div>

      <!-- Register Timer -->

      <div class="col-lg-6">
        <img width="400" src="/new/images/dashboard.png" alt="">
        <!--
        <div class="register_timer_container">
          <div class="register_timer_title">Register Now</div>
          <div class="register_timer_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
          </div>
          <div class="timer_container">
            <ul class="timer_list">
              <li><div id="day" class="timer_num">00</div><div class="timer_ss">days</div></li>
              <li><div id="hour" class="timer_num">00</div><div class="timer_ss">hours</div></li>
              <li><div id="minute" class="timer_num">00</div><div class="timer_ss">minutes</div></li>
              <li><div id="second" class="timer_num">00</div><div class="timer_ss">seconds</div></li>
            </ul>
          </div>
        </div>
      -->
      </div>
    </div> <!--fin row-->

    <div class="row espace">

      <div class="col-lg-6">

        <img width="450" src="/new/images/img-programme.jpg" alt="">

      </div>
      <div class="col-lg-6" style="padding: 70px;">
        <div class="register_form_title">Programme Immersif</div>
        <p class="text">Un programme qui vous permet d'apprendre vite.
          Apprentissage pratique, contenu interactif, progrès mesurables. Et
          réalisez des projets du monde réel avec des projets conçus par l'industrie,
            une expertise, des résultats prêts pour un beau portfolio.</p>
      </div>

    </div>

    <div class="row espace">

      <div class="col-lg-6" style="padding: 70px;">
        <div class="register_form_title">Vous n'êtes pas seul dans votre apprentissage</div>
        <p class="text">Formateurs engagés, conseils d'experts et aide de notre communauté d'étudiants</p>
      </div>

      <div class="col-lg-6">

        <img width="450" src="/new/images/chat.png" alt="">

      </div>

    </div>


    <div class="row espace">

      <div class="col-lg-6">

        <img width="450" src="/new/images/img-career.jpg" alt="">

      </div>
      <div class="col-lg-6" style="padding: 70px;">
        <div class="register_form_title">Votre carrière</div>
        <p class="text">Préparation aux entretiens, conseils d'expert, création de votre CV</p>
      </div>

    </div>

  </div>
</div>

<!-- Events -->

<div class="events">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="section_title text-center">Prochains événements</h2>
      </div>
    </div>
    <div class="row events_row">

      <!-- Event -->
      <div class="col-lg-4 event_col">
        <div class="event">
          <div class="event_image"><img src="/new/images/fblive.png" alt=""></div>
          <div class="event_date d-flex flex-column align-items-center justify-content-center">
            <div class="event_day">5</div>
            <div class="event_month">nov</div>
          </div>
          <div class="event_body d-flex flex-row align-items-center justify-content-start">
            <div class="event_title"><a href="#">Facebook Live</a></div>
            <div class="event_tag ml-auto">Gratuit</div>
          </div>
        </div>
      </div>

      <!-- Event -->
      <div class="col-lg-4 event_col">
        <div class="event">
          <div class="event_image"><img src="/new/images/cours/jeux.png" alt=""></div>
          <div class="event_date d-flex flex-column align-items-center justify-content-center">
            <div class="event_day">23</div>
            <div class="event_month">nov</div>
          </div>
          <div class="event_body d-flex flex-row align-items-center justify-content-start">
            <div class="event_title"><a href="#">Festival de l'Electronique et du Jeu Vidéo d'Abidjan</a></div>
          </div>
        </div>
      </div>

      <!-- Event -->
      <div class="col-lg-4 event_col">
        <div class="event">
          <div class="event_image"><img src="/new/images/event_3.jpg" alt=""></div>
          <div class="event_date d-flex flex-column align-items-center justify-content-center">
            <div class="event_day">14</div>
            <div class="event_month">dec</div>
          </div>
          <div class="event_body d-flex flex-row align-items-center justify-content-start">
            <div class="event_title"><a href="#">Meetup de la team Oschool</a></div>
            <div class="event_tag ml-auto">Gratuit</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Blog -->

<!--
<div class="blog">
  <div class="container">
    <div class="row row-lg-eq-height">


      <div class="col-lg-6">
        <div class="blog_left">
          <div style="font-size: 20px;" class="blog_title">Apprenez maintenant les compétences les plus recherchées dans ces domaines</div>
          <div class="blog_categories">
            <div class="row categories_row">

              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/devweb.png" alt=""></div>
                    <div class="blog_category_title">programmation</div>
                  </div>
                </a>
              </div>

              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/cm.png" alt=""></div>
                    <div class="blog_category_title">web marketing</div>
                  </div>
                </a>
              </div>

              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/blog_3.jpg" alt=""></div>
                    <div class="blog_category_title">langues</div>
                  </div>
                </a>
              </div>

              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/webmobile.png" alt=""></div>
                    <div class="blog_category_title">data science</div>
                  </div>
                </a>
              </div>

              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/finance.png" alt=""></div>
                    <div class="blog_category_title">finance</div>
                  </div>
                </a>
              </div>

              <!-- Category -->
              <!--
              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/frontend.png" alt=""></div>
                    <div class="blog_category_title">blogging</div>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Blog Right -->
      <!--

      <div class="col-lg-6">
        <div class="blog_right">
          <div class="blog_image" style="background-image:url(/new/images/forum.png)"></div>
          <div class="blog_title_container">
            <div class="blog_right_category"><a href="#">le saviez-vous ?</a></div>
            <div class="blog_right_title"><a target="_blank" href="https://discord.gg/hhbzcHE">On apprend mieux quand on n'est pas seul</a></div>
            <div class="blog_right_text">
              <p>Rejoignez notre communauté et posez toutes les questions qui vous apssent par la tête. Vos amis
              se feront un plaisir de vous aider</p>
            </div>
            <div class="read_more"><a href="https://discord.gg/hhbzcHE">Rejoignez notre communauté <img src="/new/images/right.png" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->



@endsection
