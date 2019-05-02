@extends('layouts.menu-new')

@section('title', $category->nom)
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
        <div class="language_title">L'école de {{$category->nom}}</div>
      </div>
    </div>

  </div>
</div>
<!-- Courses -->

<div class="courses">
  <div class="container">
    <div class="row courses_row">
      @foreach($category->formations as $formation)
        @if($formation->state == "active")

      <!-- Course -->

      <div class="col-lg-4 course_col">
        <div class="course">
          <div class="course_image"><img src="/avatars/courses/{{$formation->image}}" alt=""></div>
          <div class="course_body">
            <div class="course_title"><a href="{{ route('formation.slug', $formation->slug) }}">{{$formation->nom}}</a></div>


          </div>

        </div>
      </div>
        @endif
      @endforeach


    </div>

    @include('includes.schools')
  </div>
</div>



@endsection
