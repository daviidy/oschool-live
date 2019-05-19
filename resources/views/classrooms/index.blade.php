@extends('layouts.menu-dashboard-default')
@section('titre', 'Mes sessions')

@if(Auth::user()->type == "default" && Auth::user()->type3 !== "admin" && Auth::user()->type2 !== "teacher")



@section('content')

<div id="main-layout-content" aria-labelledby="header-title" class="_body-module--body--UXv_5">
  <div class="index--body--3ouOX shared--outer-container--3eppq">
    <nav class="index--navigation--3eiVs">
      <ul>
        <li><a href="#courses">Mes sessions</a></li>
      </ul>
    </nav>
    <div>

      <div class="index--section--C4DHE">
        <h3 class="vds-heading--h6 vds-spacing--stack-3x">Mon mentor</h3>
        <ol>
          <li class="card--card--2WKj9"><button class="card--curtain--39f78 shared--curtain--2_FSP">Get Your Startup Started</button>
            <div class="card--latest-content--2gSJc">
              <div>
                <div class="card--header--NzeCJ">
                  <h3 class="vds-heading--h6 vds-spacing--stack-3x"><i class="vds-icon vds-icon--lg vds-color--green" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                        <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                          fill-rule="nonzero"></path>
                      </svg></i> Mentor</h3>
                  <h4 class="vds-heading--h4 vds-spacing--stack-3x">{{Auth::user()->teacher->name}}</h4>
                </div>
                <div class="card--summary--2Bu6P">
                  <p>{{Auth::user()->teacher->description}}</p>
                </div>
              </div>
              <div class="card--action--2EYXX"><button class="vds-button vds-button--primary vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i class="vds-icon" role="img" aria-hidden="true"></i>
                <a href="{{url('users', Auth::user()->user_id)}}">Voir le profil</a> </span></button></div>
            </div>
          </li>
        </ol>
      </div>

      <div class="index--section--C4DHE">
        <h3 class="vds-heading--h6 vds-spacing--stack-3x">Prochaine(s) sessions()</h3>
        <ol>
          @foreach($classrooms->sortByDesc('date') as $classroom)
            @if($classroom->statut == "Planifié")
          <li class="card--card--2WKj9"><button class="card--curtain--39f78 shared--curtain--2_FSP">Get Your Startup Started</button>
            <div class="card--latest-content--2gSJc">
              <div>
                <div class="card--header--NzeCJ">
                  <h3 class="vds-heading--h6 vds-spacing--stack-3x"><i class="vds-icon vds-icon--lg vds-color--green" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                        <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                          fill-rule="nonzero"></path>
                      </svg></i> Date</h3>
                  <h4 class="vds-heading--h4 vds-spacing--stack-3x">

                      {{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }} avec <a href="{{url('users', $classroom->user_id)}}">{{$classroom->formateur}}</a>

                  </h4>
                </div>

              </div>

            </div>
          </li>
            @endif
          @endforeach
        </ol>
      </div>

      <div id="courses" class="index--section--C4DHE">

        <h3 class="vds-heading--h6 vds-spacing--stack-3x">Historique des sessions</h3>

        <ol>
          <ol>
            @foreach($classrooms->sortByDesc('date') as $classroom)
              @if($classroom->statut !== "Planifié")
              <a data-toggle="modal" data-target="#myModal{{$classroom->id}}" href="#">
            <li class="card--card--2WKj9"><button class="card--curtain--39f78 shared--curtain--2_FSP">{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y') }}</button>
              <div class="card--latest-content--2gSJc">
                <div>
                  <div class="card--header--NzeCJ">
                    <h3 class="vds-heading--h6 vds-spacing--stack-3x"><i class="vds-icon vds-icon--lg vds-color--green" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                          <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                            fill-rule="nonzero"></path>
                        </svg></i> Session (cliquez sur la carte pour voir le CR)</h3>
                    <h4 class="vds-heading--h4 vds-spacing--stack-3x">

                        Date: {{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }} avec {{$classroom->formateur}}

                    </h4>
                  </div>

                </div>
                <div class="card--action--2EYXX">
                  @if($classroom->statut == "Annulée")
                  <button style="background-color: red;" class="vds-button vds-button--primary vds-button__icon vds-button__icon--right" type="button">
                    <span class="vds-button__content">
                      {{ $classroom->statut }}
                    </span>
                  </button>
                  @else
                  <button style="background-color: green;" class="vds-button vds-button--primary vds-button__icon vds-button__icon--right" type="button">
                    <span class="vds-button__content">
                      {{ $classroom->statut }}
                    </span>
                  </button>
                  @endif
                </div>
              </div>
            </li>
            </a>
              @endif


              <!-- The Modal -->
              <div class="modal fade" id="myModal{{$classroom->id}}">
              <div class="modal-dialog">
              <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
              <h4 style="font-size: 24px;" class="modal-title">Compte-rendu de la session</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                      {!! $classroom->commentaire !!}
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
              </div>

              </div>
              </div>
              </div>






            @endforeach
          </ol>
        </ol>
        {{ $classrooms->links() }}
      </div>
    </div>

    @endsection


    <!--si c'est un teacher-->

    @elseif(Auth::user()->type2 == "teacher")



    @section('content')



    <div id="main-layout-content" aria-labelledby="header-title" class="_body-module--body--UXv_5">
      <div class="index--body--3ouOX shared--outer-container--3eppq">
        <nav class="index--navigation--3eiVs">
          <ul>
            <li><a href="#courses">Mes sessions</a></li>
          </ul>
        </nav>
        <div>

          <div class="_subscriptions--billing-card--1_rR6">
              <div class="_billing-card--item--JtPox _subscription-card--item--agyqV">
                  <div>
                      <div class="_billing-card--header--3ZHdt undefined">
                          <h6 class="vds-heading--h6 vds-spacing--stack-none">Planifier une session</h6>
                      </div>
                      <div class="_add-payment--add-payment-method--3SAzD"><img src="https://oschool.ci/wp-content/uploads/2019/04/feature1.png" alt="Illustration of a ghost">
                          <div>
                              <p class="vds-text vds-spacing--stack-3x">Les sessions sont les parties les plus importantes pour les étudiants. Alors n'oub:iez pas d'en faire un suivi correct</p><button class="vds-button vds-button--secondary vds-button--small"
                                type="button"><span class="vds-button__content"><a style="color: #02B7E9;" href="{{ route('classrooms.create') }}">Planifier une session</a></span></button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="index--section--C4DHE">
            <h3 class="vds-heading--h6 vds-spacing--stack-3x">Prochaine(s) sessions()</h3>
            <ol>
              @foreach($classrooms->sortByDesc('date') as $classroom)
                @if($classroom->statut == "Planifié")
              <li class="card--card--2WKj9"><button class="card--curtain--39f78 shared--curtain--2_FSP">Get Your Startup Started</button>
                <div class="card--latest-content--2gSJc">
                  <div>
                    <div class="card--header--NzeCJ">
                      <h3 class="vds-heading--h6 vds-spacing--stack-3x"><i class="vds-icon vds-icon--lg vds-color--green" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                            <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                              fill-rule="nonzero"></path>
                          </svg></i> Date</h3>
                      <h4 class="vds-heading--h4 vds-spacing--stack-3x">

                          {{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }} avec <a href="{{url('users', $classroom->idEtudiant)}}">{{$classroom->etudiant}}</a>

                      </h4>
                    </div>

                  </div>
                  <div class="card--action--2EYXX">
                    <button class="vds-button vds-button--primary vds-button__icon vds-button__icon--right" type="button">
                      <span class="vds-button__content">
                        <a style="color: #fff;" href="{{ route('classrooms.edit', $classroom) }}">Modifier</a>
                      </span>
                    </button>

                  </div>

                </div>
              </li>
                @endif
              @endforeach
            </ol>
          </div>

          <div id="courses" class="index--section--C4DHE">

            <h3 class="vds-heading--h6 vds-spacing--stack-3x">Historique des sessions</h3>

            <ol>
              <ol>
                @foreach($classrooms->sortByDesc('date') as $classroom)
                  @if($classroom->statut !== "Planifié")
                  <a data-toggle="modal" data-target="#myModal{{$classroom->id}}" href="#">
                <li class="card--card--2WKj9"><button class="card--curtain--39f78 shared--curtain--2_FSP">{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y') }}</button>
                  <div class="card--latest-content--2gSJc">
                    <div>
                      <div class="card--header--NzeCJ">
                        <h3 class="vds-heading--h6 vds-spacing--stack-3x"><i class="vds-icon vds-icon--lg vds-color--green" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                              <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                                fill-rule="nonzero"></path>
                            </svg></i> Session (cliquez sur la carte pour voir le CR)</h3>
                        <h4 class="vds-heading--h4 vds-spacing--stack-3x">

                            Date: {{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }}
                            avec {{$classroom->etudiant}}

                        </h4>

                      </div>

                    </div>
                    <div class="card--action--2EYXX">
                      @if($classroom->statut == "Annulée")
                      <button style="background-color: red;" class="vds-button vds-button--primary vds-button__icon vds-button__icon--right" type="button">
                        <span class="vds-button__content">
                          {{ $classroom->statut }}
                        </span>
                      </button>
                      @else
                      <button style="background-color: green;" class="vds-button vds-button--primary vds-button__icon vds-button__icon--right" type="button">
                        <span class="vds-button__content">
                          <!--<i class="vds-icon" role="img" aria-hidden="true"></i>-->
                          {{ $classroom->statut }}
                        </span>
                      </button>
                      @endif
                    </div>
                  </div>
                </li>
                </a>
                  @endif


                  <!-- The Modal -->
                  <div class="modal fade" id="myModal{{$classroom->id}}">
                  <div class="modal-dialog">
                  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                  <h4 style="font-size: 24px;" class="modal-title">Compte-rendu de la session</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                          {!! $classroom->commentaire !!}
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                  </div>

                  </div>
                  </div>
                  </div>






                @endforeach
              </ol>
            </ol>
            {{ $classrooms->links() }}
          </div>
        </div>

        @endsection


@endif
