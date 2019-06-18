@extends('layouts.menu-parcours')

@section('title', $formation->nom)
@section('description', $formation->description)
@section('image', 'https://code.oschool.ci/avatars/courses/'.$formation->image)

@section('content')

  <div class="container alt section-space">
    <div class="row c-how__heading align-row">
      <div class="col-xs-12 col-sm-6 c-how__headingLeft">
        <h1>{{$formation->nom}}</h1>
        <h2 style="font-size: 20px; margin-bottom: 3rem;" class="h2 u-bold">{{$formation->description}}</h2>
        @if(\Carbon\Carbon::parse($formation->start_date) > \Carbon\Carbon::now())
        <a class="home_button" href="#offres">
          Inscrivez-vous maintenant
        </a>
        @endif
      </div>
      <div class="col-xs-12 col-sm-6 c-how__headingRight">
        <img style="width:90%;" src="/avatars/courses/{{$formation->image}}" />

        <!--image du parcours et countdown-->
        <div class="row">

          <div class="col-sm-12 text-center">
            @if(\Carbon\Carbon::parse($formation->start_date) > \Carbon\Carbon::now())

            <h3 id="info">Inscrivez-vous avant le: <span style="color:#3C7DC0">{{\Carbon\Carbon::parse($formation->start_date)->format('d-m-Y')}}</span> </h3>
            @else

            <h1 style="color:red" id="info">Les inscriptions sont terminées</h3>

            @endif

          </div>

        </div>
        <!--
        <div id="countdown" _ngcontent-c87="" class="countdown ng-star-inserted">
          <div _ngcontent-c87="">
              <!---->
              <!---->
              <!---
              <ul _ngcontent-c87="" class="ng-star-inserted">
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="jours"></span><span _ngcontent-c87="">JOURS</span></li>
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="heures"></span><span _ngcontent-c87="">HRS</span></li>
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="minutes"></span><span _ngcontent-c87="">MIN</span></li>
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="secondes"></span><span _ngcontent-c87="">SEC</span></li>
              </ul>
          </div>
      </div>
    -->
      <!--fin image parcours et countdown-->




      </div>
    </div>
  </div>




  @include('includes.course.infos')









<!-- collaboration section-->


<section _ngcontent-c18="" class="ng-star-inserted">
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <ir-nd-partners _ngcontent-c18="" _nghost-c30="" class="ng-star-inserted">
        <div _ngcontent-c30="" class="contain nd-partners">
            <h6 _ngcontent-c30="" class="mb-0 text-center">
                <!---->En collaboration avec</h6>
            <!---->
            <!---->
            <ul _ngcontent-c30="">
                <!---->
                <!---->
                <!---->
                @foreach($formation->partners as $partner)
                <li _ngcontent-c30="" class="ng-star-inserted">
                    <!----><a target="_blank" href="{{$partner->link}}"><img style="margin: 2rem;" width="200" src="/avatars/partners/{{$partner->image}}"></a>
                    <!---->
                </li>
                @endforeach

                <!---->
                <!---->
            </ul>
        </div>
    </ir-nd-partners>
    <!---->
</section>


<!--end collaboration section-->







  <div class="container alt section-space">
    <div class="row">
      <div class="col-xs-12 text-center">
        @if($formation->video !== "aucune")
        <h3 class="h3 u-bold text-cent  er u-margin-b-sm">Apprenez avec un formateur chaque semaine.<br>
          Tout a été fait pour vous permettre d'apprendre sereinement<br>
            Suivez notre parcours certifiant et développez de nouvelles compétences</h3>
        <div class="c-browser">
          <div class="c-browser__chrome">
            <div class="c-browser__buttons">
              <div class="c-browser__button"></div>
              <div class="c-browser__button"></div>
              <div class="c-browser__button"></div>
            </div>
          </div>
          <div class="c-browser__image">
            {{!!$formation->video!!}}
          </div>
        </div>
        @endif


          @include('includes.course.why')



        @if(\Carbon\Carbon::parse($formation->start_date) > \Carbon\Carbon::now())
        <a class="home_button" href="#offres">
          Inscrivez-vous maintenant, n'attendez pas !
        </a>
        @endif
      </div>

    </div>
  </div>

  @if($formation->teacher !== "aucun")
    @include('includes.course.teachers_presentation')
  @endif


@if($formation->type == "kids")
  @include('includes.course.advantages_kids')
@endif

  @if($formation->type !== "kids")
    @include('includes.course.works')
  @endif


@if($formation->type !== "kids")
  @include('includes.course.avantages')
@endif

<!--end section career-->


<!--section programme-->
@if($formation->type !== "kids")
  @include('includes.course.program')
@else
  <section _ngcontent-c55="" class="nd-syllabus-term__cards ng-star-inserted">
    <div _ngcontent-c55="" class="cards_contain contain contain--none">
      <!---->
      <h4 _ngcontent-c55="" class="h2 section-header ng-star-inserted">Ce que vous apprendrez</h4>
      <!---->
      <!---->
      <!---->
      <!---->
      @if($formation->program !== "aucun")
      <a _ngcontent-c55="" class="button--secondary lg syllabus-download-button ng-star-inserted" target="_blank" href="{{$formation->program}}">
      Télécharger le programme
      </a>
      @endif
      <!---->
      <!---->
      <div _ngcontent-c55="" class="nd-syllabus-term__card">
        <section _ngcontent-c55="" class="nd-syllabus-term__header collapse in">
          <div _ngcontent-c55="" class="nd-syllabus-term__header__image" irdeferbgimage="" style="background-image: url(&quot;/avatars/courses/{{$formation->image}}&quot;);">
            <!---->
          </div>
          <div _ngcontent-c55="" class="nd-syllabus-term__header__content">
            <!---->
            <h6 _ngcontent-c55="" class="ng-star-inserted">PROGRAMME</h6>
            <h2 _ngcontent-c55="" class="h3">{{$formation->nom}}</h2>
            <!---->
            <p _ngcontent-c55="" class="small hidden-md-down ng-star-inserted">Le programme {{$formation->nom}}
              est [mettre une description]</p>
            <!---->
            <p _ngcontent-c55="" class="small hidden-lg-up ng-star-inserted">Le programme {{$formation->nom}}
              est [mettre une description]</p>
            <!---->
            <!---->
            <!---->
            <div _ngcontent-c55="" class="nd-syllabus-term__header__content--details">
              <p _ngcontent-c55="" class="nd-syllabus-term__toggle text-only">
              <span _ngcontent-c55="" class="ng-star-inserted">Voir les détails ci-dessous</span>
              <p _ngcontent-c55="" class="x-small gray-medium hidden-md-down ng-star-inserted"> {{$formation->duration}} pour finir cette formation </p>
            </div>
          </div>
        </section>
        <section _ngcontent-c55="" class="nd-syllabus-term__main in collapse" aria-expanded="true" aria-hidden="false" style="height: auto;">
          <ir-degree-syllabus-preview _ngcontent-c55="" _nghost-c95="">
            <!---->
            <section _ngcontent-c95="" class="ng-star-inserted">
              <div _ngcontent-c95="" class="degree-syllabus-preview__content">
                <!---->
                <!---->
                <h6 _ngcontent-c95="" class="mb-half ng-star-inserted">Outils requis</h6>
                <p _ngcontent-c95="" class="small mb-2 ng-star-inserted">
                  <!----><span _ngcontent-c95="" class="degree-syllabus-preview__content--term-prereq ng-star-inserted">Aucun prérequis pour suivre cette formation !</span>
                  <!---->
                  <!---->
                  <!---->
                </p>
                <section _ngcontent-c95="" class="degree-syllabus-preview__content--parts">
                  <!---->
                  <!---->
                  <!---->
                  <ul _ngcontent-c95="" class="ng-star-inserted">
                    <!---->
                    <li _ngcontent-c95="" class="ng-star-inserted">
                      <div _ngcontent-c95="" class="part">
                        <header _ngcontent-c95="" class="part__header mb-half">
                          <!---->
                          <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Chapitre</h4>
                          <!---->
                        </header>
                        <!---->
                        <!---->
                        <!---->
                        <!---->

                        <!---->
                        <!---->
                      </div>
                    </li>

                  </ul>
                </section>
              </div>
              <!---->
              <div _ngcontent-c95="" class="degree-syllabus-preview__aside ng-star-inserted">
                <aside _ngcontent-c95=""><svg _ngcontent-c95="" height="36" viewBox="0 0 50 36" width="50">
                    <g _ngcontent-c95="" fill="none" fill-rule="evenodd" stroke="#7D97AD" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                      <path _ngcontent-c95="" d="M42 5h2.99063C45.54809 5 46 5.438615 46 5.998746v19.002508C46 25.552846 45.556738 26 45.003217 26H4.996782C4.446275 26 4 25.561385 4 25.001254V5.998746C4 5.447154 4.443353 5 5.00937 5H8"></path>
                      <path _ngcontent-c95="" d="M21 22H8V2h9.009246C21.42242 2 25 5.580076 25 9.991652V26m0 0c0-2.20914-1.79086-4-4-4m8 0h13V2h-9.009247C28.577583 2 25 5.580076 25 9.991652V26m0 0c0-2.20914 1.79086-4 4-4"></path>
                      <path _ngcontent-c95="" d="M46 8h2.001043C48.552753 8 49 8.439458 49 9.002462v19.995076C49 29.551183 48.55547 30 47.997452 30H2.002548C1.448856 30 1 29.560542 1 28.997538V9.002462C1 8.448817 1.44266 8 1.998957 8H4m21 22v-4"></path>
                    </g>
                  </svg>
                  <h6 _ngcontent-c95="" class="mb-half">
                    <!---->Besoin d'en savoir plus ?</h6>
                  <!---->
                  <!---->
                  <p _ngcontent-c95="" class="small">Contactez-nous sur
                    <ul>

                      <li><a target="_blank" href="{#">Téléphone: 21 37 12 77 / 58 45 06 00 / 48 45 98 68</a></li>
                      <li><a target="_blank" href="{#">Email: adams@oschool.ci / david@oschool.ci</a></li>

                    </ul>
                  </p>
                  <!---->
                </aside>
              </div>
            </section>
            <ir-modal _ngcontent-c95="" class="project-modal ng-tns-c11-11" closebtncolor="white-shadow" _nghost-c11="">
              <div _ngcontent-c11="" class="wrapper modal--no-padding">
                <!---->
                <!---->
              </div>
            </ir-modal>
            <!---->
            <ir-modal _ngcontent-c95="" _nghost-c11="" class="ng-tns-c11-12 ng-star-inserted">
              <div _ngcontent-c11="" class="wrapper">
                <!---->
                <!---->
              </div>
            </ir-modal>
          </ir-degree-syllabus-preview>
        </section>
      </div>
    </div>
  </section>

@endif

<!--fin section programme-->
@if(\Carbon\Carbon::parse($formation->start_date) > \Carbon\Carbon::now())


@include('includes.course.offres_new')

@endif



@if(\Carbon\Carbon::parse($formation->start_date) > \Carbon\Carbon::now() && $formation->type !== "kids")

@include('includes.course.calltoaction')

@endif

<!--popup pour se connecter ou s'inscrire si ce  n'est pas encore fait-->

@include('includes.course.registration')

@include('includes.course.login')



@include('includes.course.formulaire-inscription')




@endsection
