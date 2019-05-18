@extends('layouts.menu-dashboard-settings')
@section('titre', 'Paramètres pour '.Auth::user()->name)

@section('content')

@include('includes.settings.info_perso')

@include('includes.settings.my_courses')


@if(Auth::user()->type2 !== 'teacher' && Auth::user()->type3 !== 'admin' && Auth::user()->type == 'default')

@include('includes.settings.livrables')

@include('includes.settings.facturation_student')

@endif

@if(Auth::user()->type2 == 'teacher')

@include('includes.settings.my_students')

@include('includes.settings.facturation_teacher')

@endif


@endsection
