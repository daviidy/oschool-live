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


      <!-- Course
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/cm.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Community Manager</a></div>
            <div class="course_info">
              <ul>
                <li><a href="#">Web Marketing</a></li>
                <li><a href="#">4 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Gérer la présence des marques sur les réseaux sociaux</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark trans_200"><a href="#">Bientôt</a></div>
          </div>
        </div>
      </div>


      <!-- Course -->
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/cm.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{url('socialmedia')}}">Certification Social Media</a></div>

          </div>
          
        </div>
      </div>

      <!-- Course
      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/new/images/cours/blog.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{url('blog')}}">Devenez blogueur professionnel</a></div>
            <div class="course_info">
              <ul>
                <li><a href="#">Web Marketing</a></li>
                <li><a href="#">3 mois</a></li>
              </ul>
            </div>
            <div class="course_text">
              <p>Gagnez votre vie en bloguant.
                Comme les plateformes gratuites telles que WordPress.com, Tumblr et Medium deviennent plus populaires,
                de plus en plus de personnes lancent des blogs.</p>
            </div>
          </div>
          <div class="course_footer d-flex flex-row align-items-center justify-content-start">
            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
            <div class="course_mark  trans_200"><a href="#">Bientôt</a></div>
          </div>
        </div>
      </div>

    -->


    </div>

    <div class="row">
      <div class="col">
        <div class="home_button"><a href="/#schools">Voir nos écoles</a></div>
      </div>
    </div>
  </div>
</div>



@endsection
