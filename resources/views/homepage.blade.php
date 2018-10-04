@extends('layouts.menu-new')

@section('content')


<!-- Home -->

<div class="home">
  <div class="home_background" style="background-image: url(/new/images/fond.jpg);"></div>
  <div class="home_content">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1 class="home_title">Apprenez à votre rythme le sujet que vous souhaitez. Avec un formateur dédié en télé présentiel</h1>
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

<div class="courses">
  <div class="courses_background"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="section_title text-center">Métiers en vogue</h2>
      </div>
    </div>
    <div class="row courses_row">

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/devweb.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="course.html">Développeur web</a></div>
            <div class="course_info">
              <ul>
                <li><a href="instructors.html">Programmation et développement</a></li>
                <li><a href="#">4 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Faites vos premiers pas dans le monde du développement web : créez des sites web et donnez vie aux maquettes !</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>20</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark course_free trans_200"><a href="#">Certifié</a></div>
          </div>
        </div>
      </div> 

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/socialmedia.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Certification Social Media</a></div>
            <div class="course_info">
              <ul>
                <li><a href="#">Web Marketing</a></li>
                <li><a href="#">4 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Apprenez à définir une stratégie social média, et utilisez les bons outils pour augmenter l'influence des entreprises sur les réseaux sociaux</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark course_free trans_200"><a href="#">Certifié</a></div>
          </div>
        </div>
      </div>

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/webmobile.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Développeur d'applications mobiles</a></div>
            <div class="course_info">
              <ul>
                <li><a href="#">Programmation et développement</a></li>
                <li><a href="#">4 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Avec Flutter, vous allez pouvoir profiter de vos connaissances du développement Angular pour développer des applications mobiles multi-plateformes.</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark course_free trans_200"><a href="#">Certifié</a></div>
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
    <div class="row">

      <!-- Register Form -->

      <div class="col-lg-6">
        <div class="register_form_container">
          <div class="register_form_title">Des doutes ? Laissez-vous convaincre par nos MOOC</div>
          <form action="#" id="register_form" class="register_form">
            <div class="row register_row">
              <div class="col-lg-6 register_col">
                <input type="text" class="form_input" placeholder="Nom" required="required">
              </div>
              <div class="col-lg-6 register_col">
                <input type="email" class="form_input" placeholder="Email" required="required">
              </div>
              <div class="col-lg-6 register_col">
                <input type="tel" class="form_input" placeholder="Téléphone">
              </div>
              <div class="col-lg-6 register_col">
                <input type="url" class="form_input" placeholder="Site (facultatif)">
              </div>
              <div class="col">
                <button type="submit" class="form_button trans_200">Obtenir les cours	</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Register Timer -->

      <div class="col-lg-6">
        <img width="600" src="/new/images/dashboard.png" alt="">
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
            <div class="event_day">26</div>
            <div class="event_month">aug</div>
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
            <div class="event_day">26</div>
            <div class="event_month">aug</div>
          </div>
          <div class="event_body d-flex flex-row align-items-center justify-content-start">
            <div class="event_title"><a href="#">Orange Gaming Tour</a></div>
            <div class="event_tag ml-auto">2000FCFA</div>
          </div>
        </div>
      </div>

      <!-- Event -->
      <div class="col-lg-4 event_col">
        <div class="event">
          <div class="event_image"><img src="/new/images/event_3.jpg" alt=""></div>
          <div class="event_date d-flex flex-column align-items-center justify-content-center">
            <div class="event_day">26</div>
            <div class="event_month">aug</div>
          </div>
          <div class="event_body d-flex flex-row align-items-center justify-content-start">
            <div class="event_title"><a href="#">Meetup</a></div>
            <div class="event_tag ml-auto">Free</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Blog -->

<div class="blog">
  <div class="container">
    <div class="row row-lg-eq-height">

      <!-- Blog Left -->
      <div class="col-lg-6">
        <div class="blog_left">
          <div style="font-size: 20px;" class="blog_title">Apprenez maintenant les compétences les plus recherchées dans ces domaines</div>
          <div class="blog_categories">
            <div class="row categories_row">

              <!-- Category -->
              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/devweb.png" alt=""></div>
                    <div class="blog_category_title">programmation</div>
                  </div>
                </a>
              </div>

              <!-- Category -->
              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/cm.png" alt=""></div>
                    <div class="blog_category_title">web marketing</div>
                  </div>
                </a>
              </div>

              <!-- Category -->
              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/blog_3.jpg" alt=""></div>
                    <div class="blog_category_title">langues</div>
                  </div>
                </a>
              </div>

              <!-- Category -->
              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/webmobile.png" alt=""></div>
                    <div class="blog_category_title">data science</div>
                  </div>
                </a>
              </div>

              <!-- Category -->
              <div class="col-md-4 blog_category_col">
                <a href="blog.html">
                  <div class="blog_category">
                    <div class="blog_category_image"><img src="/new/images/cours/finance.png" alt=""></div>
                    <div class="blog_category_title">finance</div>
                  </div>
                </a>
              </div>

              <!-- Category -->
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

      <div class="col-lg-6">
        <div class="blog_right">
          <div class="blog_image" style="background-image:url(/new/images/cours/devweb.png)"></div>
          <div class="blog_title_container">
            <div class="blog_right_category"><a href="#">programmation</a></div>
            <div class="blog_right_title"><a href="blog_single.html">Et si vous appreniez à coder ?</a></div>
            <div class="blog_right_text">
              <p>Faites vos premiers pas dans le monde du développement web : créez des sites web et donnez vie aux maquettes !</p>
            </div>
            <div class="read_more"><a href="blog_single.html">En savoir plus <img src="/new/images/right.png" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
