@extends('layouts.menu-dashboard-show')
@section('titre', 'A propos de '.$user->name)

@section('content')

@include('includes.show.about_user')

@include('includes.show.courses_user')

@include('includes.show.livrables_student')

@include('includes.show.sessions_user')

@include('includes.show.assign_teacher')

@include('includes.show.students_user')



@endsection
