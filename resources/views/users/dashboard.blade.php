@extends('layouts.menu-dashboard-default')
@section('titre', 'Accueil')
@section('content')


              <div id="main-layout-content" aria-labelledby="header-title" class="_body-module--body--UXv_5">
                <div class="index--body--3ouOX shared--outer-container--3eppq">
                  @if(count(Auth::user()->formations) && !Auth::user()->isTeacher() && !Auth::user()->isAdmin() && Auth::user()->fin_abonnement->subDays(10) <= Carbon\Carbon::now() && Auth::user()->fin_abonnement >= Carbon\Carbon::now())

                  <!--abonnement va bientot expirer-->
                  <div class="content">
                      <section class="_subscriptions--content-container--2FV2K form--flex-column--g8OLQ">
                          <div class="vds-loading vds-loading--md" role="status" aria-label="Loading">
                              <div class="vds-loading__children">
                                  <h1 style="color: red; margin-top: 2rem;" class="_subscriptions--title--2nNpU">Votre abonnement expire le {{Carbon\Carbon::parse(Auth::user()->fin_abonnement)->format('d-m-Y H:i')}}</h1>
                                  <div class="_subscriptions--no-subscriptions--3Pm1g"><img src="https://classroom.udacity.com/images/ghost-sleeping-250d1.png" alt="Illustration of a sleeping book">
                                      <div>
                                          <h3 class="vds-heading--h3 vds-spacing--stack-2x">Cliquez ci-dessous pour le renouveler maintenant</h3><a class="vds-button vds-button--primary" href="#" data-toggle="modal" data-target="#myModal" role="button" tabindex="0"><span
                                                class="vds-button__content">Renouveler</span></a>
                                      </div>
                                  </div>
                                  <div class="_subscriptions--billing-card--1_rR6">
                                      <div class="_billing-card--item--JtPox _subscription-card--item--agyqV">
                                          <div>
                                              <div class="_billing-card--header--3ZHdt undefined">
                                                  <h6 class="vds-heading--h6 vds-spacing--stack-none">Pourquoi nous faire confiance</h6>
                                              </div>
                                              <div class="_add-payment--add-payment-method--3SAzD"><img src="https://classroom.udacity.com/images/ghost-fef4b.gif" alt="Illustration of a ghost">
                                                  <div>
                                                      <p class="vds-text vds-spacing--stack-3x">Avec Oschool, vous pouvez apprendre les compétences qu'il vous faut pour réussir votre carrière</p><button class="vds-button vds-button--secondary vds-button--small"
                                                        type="button"><span class="vds-button__content"><a style="color: #02B7E9;" href="https://oschool.ci/#schools">Voir nos écoles</a></span></button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </section>
                  </div>

                  @elseif(count(Auth::user()->formations) && !Auth::user()->isTeacher() && !Auth::user()->isAdmin() && Auth::user()->fin_abonnement < Carbon\Carbon::now())

                  <!--abonnement a expiré-->
                  <div class="content">
                      <section class="_subscriptions--content-container--2FV2K form--flex-column--g8OLQ">
                          <div class="vds-loading vds-loading--md" role="status" aria-label="Loading">
                              <div class="vds-loading__children">
                                  <h1     margin-top: 2rem; class="_subscriptions--title--2nNpU">Votre abonnement a expiré.</h1>
                                  <div class="_subscriptions--no-subscriptions--3Pm1g"><img src="https://classroom.udacity.com/images/ghost-sleeping-250d1.png" alt="Illustration of a sleeping book">
                                      <div>
                                          <h3 class="vds-heading--h3 vds-spacing--stack-2x">Merci de contacter notre équipe support pour renouveler votre abonnement</h3><a class="vds-button vds-button--primary" href="mailto:support@oschool.ci" role="button" tabindex="0" target="_blank"><span
                                                class="vds-button__content">support@oschool.ci</span></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>




                  @endif



                  @if(count(Auth::user()->formations))
                  <nav class="index--navigation--3eiVs">
                    <ul>
                      <li><a style="color: black;" href="#courses">Mes parcours</a></li>
                    </ul>
                  </nav>
                  <div>
                    <!--
                    <div class="index--section--C4DHE">
                      <h3 class="vds-heading--h6 vds-spacing--stack-3x">Latest Activity</h3>
                      <ol>
                        <li class="card--card--2WKj9"><button class="card--curtain--39f78 shared--curtain--2_FSP">Get Your Startup Started</button>
                          <div class="card--latest-content--2gSJc">
                            <div>
                              <div class="card--header--NzeCJ">
                                <h3 class="vds-heading--h6 vds-spacing--stack-3x"><i class="vds-icon vds-icon--lg vds-color--green" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                                      <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                                        fill-rule="nonzero"></path>
                                    </svg></i> Course</h3>
                                <h4 class="vds-heading--h4 vds-spacing--stack-3x">Get Your Startup Started</h4>
                              </div>
                              <div class="card--summary--2Bu6P">
                                <p>Acquire the know-how necessary to see your business grow towards its next milestone.</p>
                              </div>
                            </div>
                            <div class="card--action--2EYXX"><button class="vds-button vds-button--primary vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i class="vds-icon" role="img" aria-hidden="true"><svg
                                      viewBox="0 0 32 32">
                                      <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                                    </svg></i>Continue</span></button></div>
                          </div>
                        </li>
                      </ol>
                    </div>
                  -->
                    <div id="courses" class="index--section--C4DHE">
                      <!--
                      <h3 class="vds-heading--h6 vds-spacing--stack-3x">Current Course Enrollments</h3>
                    -->
                      <ol>
                        <ol>
                          @foreach(Auth::user()->formations as $formation)
                          <li class="card--card--2WKj9"><button class="card--curtain--39f78 shared--curtain--2_FSP">{{$formation->nom}}</button>
                            <div class="card--content--QgkRx">
                              <div>
                                <div class="card--header--NzeCJ">
                                  <h3 class="vds-heading--h6 vds-spacing--stack-3x"><i class="vds-icon vds-icon--lg vds-color--green" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                                        <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                                          fill-rule="nonzero"></path>
                                      </svg></i> Parcours</h3>
                                  <h4 class="vds-heading--h4 vds-spacing--stack-3x">{{$formation->nom}}</h4>
                                </div>
                                <div class="card--summary--2Bu6P">
                                  <p>{{$formation->description}}</p>
                                </div>
                              </div>
                              <div class="card--action--2EYXX"><span></span><button class="vds-button vds-button--secondary vds-button__icon vds-button__icon--right" type="button"><span class="vds-button__content"><i class="vds-icon" role="img"
                                      aria-hidden="true"><svg viewBox="0 0 32 32">
                                        <path d="M22.586 17H7a1 1 0 0 1 0-2h15.586l-6.293-6.293a1 1 0 1 1 1.414-1.414l8 8a1 1 0 0 1 0 1.414l-8 8a1 1 0 0 1-1.414-1.414L22.586 17z" fill-rule="nonzero"></path>
                                      </svg></i> <a style="color: #02b3e4;" href="{{url('projects', $formation)}}">Voir les projets</a> </span></button></div>
                            </div><noscript></noscript>
                          </li>
                          @endforeach
                        </ol>
                      </ol>
                    </div>
                  </div>

                  @else
                  <div class="content">
                      <section class="_subscriptions--content-container--2FV2K form--flex-column--g8OLQ">
                          <div class="vds-loading vds-loading--md" role="status" aria-label="Loading">
                              <div class="vds-loading__children">
                                  <h1 class="_subscriptions--title--2nNpU">Dommage !</h1>
                                  <div class="_subscriptions--no-subscriptions--3Pm1g"><img src="https://classroom.udacity.com/images/ghost-sleeping-250d1.png" alt="Illustration of a sleeping book">
                                      <div>
                                          <h3 class="vds-heading--h3 vds-spacing--stack-2x">Vous n'avez pas encore rejoint un de nos parcours</h3><a class="vds-button vds-button--primary" href="https://oschool.ci/#schools" role="button" tabindex="0" target="_blank"><span
                                                class="vds-button__content">Voir nos écoles</span></a>
                                      </div>
                                  </div>
                                  <div class="_subscriptions--billing-card--1_rR6">
                                      <div class="_billing-card--item--JtPox _subscription-card--item--agyqV">
                                          <div>
                                              <div class="_billing-card--header--3ZHdt undefined">
                                                  <h6 class="vds-heading--h6 vds-spacing--stack-none">Pourquoi nous faire confiance</h6>
                                              </div>
                                              <div class="_add-payment--add-payment-method--3SAzD"><img src="https://classroom.udacity.com/images/ghost-fef4b.gif" alt="Illustration of a ghost">
                                                  <div>
                                                      <p class="vds-text vds-spacing--stack-3x">Avec Oschool, vous pouvez apprendre les compétences qu'il vous faut pour réussir votre carrière</p><button class="vds-button vds-button--secondary vds-button--small"
                                                        type="button"><span class="vds-button__content"><a style="color: #02B7E9;" href="https://oschool.ci/#schools">Voir nos écoles</a></span></button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </section>
                  </div>
                  @endif


                  <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                  <h4 style="font-size: 24px;" class="modal-title">Remplissez ce formulaire pour vous réabonner à la formation</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                  <form method="post" action="{{url('envoi')}}">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <label for="">Email:</label>
                    <input value="{{Auth::check() ? Auth::user()->email : ''}}" type="email" class="form-control" id="" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" value="{{Auth::user()->nom}}" id="" placeholder="Nom" name="nom" required>
                  </div>
                  <div class="form-group">
                    <label for="">Prénoms</label>
                    <input type="text" class="form-control" value="{{Auth::user()->prenoms}}" id="" placeholder="Prénoms" name="prenoms" required>
                  </div>
                  <div class="form-group">
                    <label for="">Numéro de téléphone</label>
                    <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel" required>
                  </div>

                  <div class="form-group">
                    <label for="">Formation</label>
                    @auth
                    @if(count(Auth::user()->formations))
                      @foreach(Auth::user()->formations as $formation)
                      <select class="" name="formation">
                        <option value="{{$formation->nom}}">{{$formation->nom}}</option>
                      </select>
                      @endforeach
                    @endif
                    @endauth
                  </div>

                  <div style="display: none;" class="form-group">
                    <label for="">user id</label>
                    <select class="" name="user_id">
                      <option value="{{Auth::user()->id}}">user id</option>
                    </select>
                  </div>

                  <div style="display: none;" class="form-group">
                    <label for="">type</label>
                    <select class="" name="type">
                      <option value="renew">type</option>
                    </select>
                  </div>

                  <div style="display: none;" class="form-group">
                    <label for="">Prix</label>
                    <select class="" name="montant">
                      <option value="30000">30.000 FCFA</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                  </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                  </div>

                  </div>
                  </div>
                  </div>

                  <!--end modal-->


@endsection
