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
          <div class="course_image"><img src="/new/images/cours/finance.png" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="#">Apprenez le trading</a></div>

          </div>
          
        </div>
      </div>



    </div>

    <div class="row">
      <div class="col">
        <div class="home_button"><a href="#">Voir plus de cours</a></div>
      </div>
    </div>
  </div>
</div>



@endsection
