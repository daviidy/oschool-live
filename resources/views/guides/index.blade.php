@extends('layouts.menu-dashboard-projects')
@section('titre', 'Guides Etudiants')
@section('description', 'Important pour réussir vos parcours')

@section('content')

@foreach($guides as $guide)
<li>
  <div>
    <div class="index--lesson-card--mwX1V index--card-interactive--1EHiQ shared--card-interactive--2Jtvl shared--card--3X88h"><a class="index--curtain--3sKxm shared--curtain--2_FSP" href="/courses/ud806/lessons/7585925729/concepts/last-viewed">Continue</a>
      <div class="index--container--1pEmR"><span id="lesson-card-scroll-target-7585925729" class="index--scroll-target--kzi6f"></span>
        <div class="_lesson-expanded--lesson-expanded--1F90t _lesson-expanded--_lesson-expanded--12yZy"><span id="lesson-card-scroll-target-7585925729"></span>
          <div class="_lesson-expanded--details--2ORBR">
            <div class="_lesson-expanded--text--1jM3p">
              <div class="_lesson-expanded--header--rATlm">
                <div class="_lesson-expanded--tag-container--Fn1Eu">
                  <h5 class="_lesson-expanded--tag--Dx7Iu shared--header-meta--19afO">Important à lire</h5>
                </div>
                <h4>{{$guide->title}}</h4>
              </div>
              <div class="_lesson-expanded--summary--UWDE8">
                <div class="index-module--markdown--2MdcR ureact-markdown ">
                  <p>{{$guide->description}}</p><
                </div>
              </div>
            </div>
            <div class="_lesson-expanded--actions--KkY9y">
              <div class="_lesson-expanded--action-info--3kCSZ"><button class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i
                      class="vds-icon" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                        <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                      </svg></i> <a style="color: #02b3e4;" href="{{$guide->link}}">Voir le guide</a> </span></button></div>
                      <!--
              <div class="_lesson-expanded--progress--16Jyl">
                <div class="_progress-bar--progress-bar-container--3ckXh">
                  <div class="_progress-bar--progress-bar--1CyhZ" style="width: 80px; height: 4px;">
                    <div class="_progress-bar--progress-bar-inner--3Aemj" style="width: 42%;"></div>
                  </div><span class="_progress-bar--completion-amount--1Gmbl shared--subtitle-small--1lMk2">42%</span>
                </div>
                <div>
                  <div class="duration--duration--3qykr shared--condensed-subtitle--3eA8A shared--subtitle-small--1lMk2">2 hours 19 minutes left</div>
                  <div class="duration--short-duration--3nGeN shared--condensed-subtitle--3eA8A shared--subtitle-small--1lMk2">2h 19m left</div>
                </div>
              </div>
            -->
            </div>
          </div>
          <div class="_lesson-expanded--image-placeholder--2SiZ3">
            <img src="/avatars/guides/{{$guide->image}}" alt="{{$guide->image}}">
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
@endforeach



@endsection
