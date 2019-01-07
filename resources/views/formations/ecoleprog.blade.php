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

  </div>
</div>

<!-- Courses -->

<div class="courses">
  <div class="container">
    <div class="row courses_row">

      <!-- Course -->

      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/devweb.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="/devweb">Développeur Web Junior</a></div>


          </div>

        </div>
      </div>

      <!-- Course -->

      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/devweb3.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Développeur Web Front-End</a></div>


          </div>

        </div>
      </div>

      <!-- Course -->

      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/devweb2.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Développeur Web Full Stack</a></div>


          </div>

        </div>
      </div>



      <!-- Course
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/webmobile.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{url('devmobile')}}">Développeur d'applications mobiles</a></div>
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

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/android2.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{url('android')}}">Développeur d'Applications Android</a></div>

          </div>

        </div>
      </div>

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/android3.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Les bases d'Android</a></div>

          </div>

        </div>
      </div>


      <!-- Course -->

      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/kali.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="/kali-linux">Hacking Ethique avec Kali Linux</a></div>


          </div>

        </div>
      </div>

      <!-- Course
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/python.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{url('python')}}">Développeur d'Applications Python</a></div>
            <div class="course_info">
              <ul>
                <li><a href="#">Programmation et développement</a></li>
                <li><a href="#">4 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Maîtrisez Python, le langage des startups et des scientifiques, pour réaliser vos propres applications web !</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>20</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark course_free trans_200"><a href="#">Certifié</a></div>
          </div>
        </div>
      </div>


      <!-- Course
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/frontend.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{url('frontend')}}">Développeur front-end</a></div>
            <div class="course_info">
              <ul>
                <li><a href="#">Programmation et développement</a></li>
                <li><a href="#">4 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Réalisez des projets web de A à Z et spécialisez-vous dans l'optimisation des interfaces de vos sites.</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>35</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark course_free trans_200"><a href="#">Certifié</a></div>
          </div>
        </div>
      </div>

      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/jeux.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{url('jeuxvideos')}}">Développeur de jeux vidéos</a></div>

          </div>

        </div>
      </div>





    </div>

    <div class="row">
      <div class="col">
        <div class="home_button"><a href="/#schools">Voir les autres écoles</a></div>
      </div>
    </div>
  </div>
</div>



@endsection
