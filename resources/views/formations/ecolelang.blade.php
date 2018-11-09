@extends('layouts.menu-new')

@section('content')

<!-- Home -->

<div class="home">
  <div class="breadcrumbs_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
            <li><a href="/">accueil</a></li>
            <li>parcours</li>
          </ul>
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
        <div class="language_title">Développez des compétences pour aujourd'hui, demain et le futur</div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="language_slider_container">

          <!-- Language Slider -->

          <div class="owl-carousel owl-theme language_slider">

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/web-dev.png" alt=""></div>
                <div class="lang_name">Ecole de programmation</div>
              </a>
            </div>


            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/photoshop.png" alt=""></div>
                <div class="lang_name">Ecole du design</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/cm.png" alt=""></div>
                <div class="lang_name">Ecole du Web Marketing</div>
              </a>
            </div>


            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="/new/images/icones/bourse.png" alt=""></div>
                <div class="lang_name">Ecole du Business</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="https://cdn1.iconfinder.com/data/icons/world-flags-circular/1000/Flag_of_United_Kingdom_-_Circle-512.png" alt=""></div>
                <div class="lang_name">Ecole des langues</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdjYVAAeHxJxhw1JZk_0m4E5PjMLv5VkxBrqCM-3Y6K9JrAFlr" alt=""></div>
                <div class="lang_name">Ecole de la data science</div>
              </a>
            </div>

            <!-- Flag -->
            <div class="owl-item language_item">
              <a href="#">
                <div class="flag"><img src="https://cdn2.vectorstock.com/i/1000x1000/52/41/artificial-intelligence-brain-icon-ai-vector-21645241.jpg" alt=""></div>
                <div class="lang_name">Ecole de l'intelligence Artificielle</div>
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
  <div class="container">
    <div class="row courses_row">

      <!-- Course -->

      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/anglais.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="/anglais">Parlez couramment l'Anglais</a></div>
            <div class="course_info">
              <ul>
                <li><a href="#">Langue</a></li>
                <li><a href="#">4 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Développez vos compétences en Anglais pour obtenir plus de chances
              d'être embauché</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>20</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark course_free trans_200"><a href="#">Certifié</a></div>
          </div>
        </div>
      </div>



    </div>

    <div class="row">
      <div class="col">
        <div class="home_button"><a href="/#schools">Voir nos écoles</a></div>
      </div>
    </div>
  </div>
</div>



@endsection
