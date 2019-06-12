@extends('layouts.menu-dashboard-projects')
@section('titre', 'Projets du parcours '.$formation->nom)
@section('description', $formation->projets->count().' projets')

@section('content')

@foreach($formation->projets as $projet)
  @if(count($projet->etatprojets))
    @foreach($projet->etatprojets as $etatprojet)
      @if($etatprojet->user_id == Auth::user()->id) 
      <li>
        <div>
          <div class="index--lesson-card--mwX1V index--card-interactive--1EHiQ shared--card-interactive--2Jtvl shared--card--3X88h"><!--<a class="index--curtain--3sKxm shared--curtain--2_FSP" href="/courses/ud806/lessons/7585925729/concepts/last-viewed">Continue</a>-->
            <div class="index--container--1pEmR"><span id="lesson-card-scroll-target-7585925729" class="index--scroll-target--kzi6f"></span>
              <div class="_lesson-expanded--lesson-expanded--1F90t _lesson-expanded--_lesson-expanded--12yZy"><span id="lesson-card-scroll-target-7585925729"></span>
                <div class="_lesson-expanded--details--2ORBR">
                  <div class="_lesson-expanded--text--1jM3p">
                    <div class="_lesson-expanded--header--rATlm">
                      <div class="_lesson-expanded--tag-container--Fn1Eu">
                        <h5 class="_lesson-expanded--tag--Dx7Iu shared--header-meta--19afO">En collaboration avec
                          @foreach($formation->partners as $partner){{$partner->name}},@endforeach
                        </h5>
                      </div>
                      <h4>{{$projet->titre}}</h4>
                    </div>
                    <div class="_lesson-expanded--summary--UWDE8">
                      <div class="index-module--markdown--2MdcR ureact-markdown ">
                        <p>Les cours qu'il faut suivre pour réaliser ce projet:</p><br>
                        <ul>
                          @foreach($projet->progressions as $progression)
                          <li class="progression"> <i class="{{$progression->type == 'texte' ? "fa fa-file-word-o" : "fa fa-video-camera"}}"></i> &nbsp; <a style="color: #02b3e4;font-size: 18px;" target="_blank" href="{{$progression->lien}}">{{$progression->titre}}</a> </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="_lesson-expanded--actions--KkY9y">
                    <div class="_lesson-expanded--action-info--3kCSZ"><button class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i
                            class="vds-icon" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                              <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                            </svg></i><a target="_blank" style="color: #02b3e4;" href="{{$projet->enonce}}">Voir la mission</a></span></button>
                    </div>

                    @if(Auth::user()->type2 !== "teacher")

                    <div class="_lesson-expanded--action-info--3kCSZ">
                      @if($etatprojet->statut == 'Validé')
                    <button style="background: green;" class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button">
                      <span style="color: #fff;" class="vds-button__content"><i
                            class="vds-icon" role="img" aria-hidden="true"></i>
                            {{$etatprojet->statut}}
                        </span>
                    </button>
                      @elseif($etatprojet->statut == 'En évaluation')
                    <button style="background: orange;" class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button">
                      <span class="vds-button__content"><i
                            class="vds-icon" role="img" aria-hidden="true"></i>
                            {{$etatprojet->statut}}
                        </span>
                    </button>
                      @else
                    <button style="background: red;" class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button">
                      <span class="vds-button__content"><i
                            class="vds-icon" role="img" aria-hidden="true"></i>
                            {{$etatprojet->statut}}
                        </span>
                    </button>
                      @endif
                    </div>
                    @endif

                    <div class="_lesson-expanded--action-info--3kCSZ"><button class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i
                            class="vds-icon" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                              <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                            </svg></i><a href="#" style="color: #02b3e4;" data-toggle="modal" data-target="#myModal{{$etatprojet->id}}">Voir les commentaires</a></span></button>
                    </div>
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
                  <img src="/avatars/projects/{{$projet->image}}" alt="{{$projet->image}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>


      @endif


      <!-- The Modal -->
      <div class="modal fade" id="myModal{{$etatprojet->id}}">
      <div class="modal-dialog">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      <h4 style="font-size: 24px;" class="modal-title">Commentaire sur le projet</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            {!! $etatprojet->commentaire !!}
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>

      </div>
      </div>
      </div>

      <!--end modal-->


    @endforeach
  @endif
@endforeach


@foreach($formation->projets as $projet)
  @if (!Auth::user()->worked($projet->id))
  <li>
    <div>
      <div class="index--lesson-card--mwX1V index--card-interactive--1EHiQ shared--card-interactive--2Jtvl shared--card--3X88h"><!--<a class="index--curtain--3sKxm shared--curtain--2_FSP" href="/courses/ud806/lessons/7585925729/concepts/last-viewed">Continue</a>-->
        <div class="index--container--1pEmR"><span id="lesson-card-scroll-target-7585925729" class="index--scroll-target--kzi6f"></span>
          <div class="_lesson-expanded--lesson-expanded--1F90t _lesson-expanded--_lesson-expanded--12yZy"><span id="lesson-card-scroll-target-7585925729"></span>
            <div class="_lesson-expanded--details--2ORBR">
              <div class="_lesson-expanded--text--1jM3p">
                <div class="_lesson-expanded--header--rATlm">
                  <div class="_lesson-expanded--tag-container--Fn1Eu">
                    <h5 class="_lesson-expanded--tag--Dx7Iu shared--header-meta--19afO">En collaboration avec
                      @foreach($formation->partners as $partner){{$partner->name}},@endforeach
                    </h5>
                  </div>
                  <h4>{{$projet->titre}}</h4>
                </div>
                <div class="_lesson-expanded--summary--UWDE8">
                  <div class="index-module--markdown--2MdcR ureact-markdown ">
                    <p>Les cours qu'il faut suivre pour réaliser ce projet:</p><br>
                    <ul>
                      @foreach($projet->progressions as $progression)
                      <li class="progression"> <i class="{{$progression->type == 'texte' ? "fa fa-file-word-o" : "fa fa-video-camera"}}"></i> &nbsp; <a style="color: #02b3e4;font-size: 18px;" target="_blank" href="{{$progression->lien}}">{{$progression->titre}}</a> </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <div class="_lesson-expanded--actions--KkY9y">
                <div class="_lesson-expanded--action-info--3kCSZ"><button class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i
                        class="vds-icon" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                          <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                        </svg></i><a target="_blank" style="color: #02b3e4;" href="{{$projet->enonce}}">Voir la mission</a></span></button>
                </div>

                @if(Auth::user()->isTeacher())
                <div class="_lesson-expanded--action-info--3kCSZ"><button style="background-color:#4D90CC" class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i
                        class="vds-icon" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                          <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                        </svg></i><a target="_blank" style="color: #fff;" href="{{$projet->guideprojet->link}}">Guide Mentor</a></span></button>
                </div>
                @endif
                @if(Auth::user()->type2 !== 'teacher' && Auth::user()->type3 !== 'admin')
                <div class="_lesson-expanded--action-info--3kCSZ"><button style="background-color: yellow;" class="vds-button vds-button--secondary vds-button--small vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i
                        class="vds-icon" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                          <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                        </svg></i><a target="_blank" style="color: black;" href="{{url('projets', $projet)}}">Envoyer les livrables</a></span></button>
                </div>
                @endif

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
              <img src="/avatars/projects/{{$projet->image}}" alt="{{$projet->image}}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </li>
  @endif
@endforeach




@endsection
