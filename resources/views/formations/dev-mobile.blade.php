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
            <li><a href="/cours">cours</a></li>
            <li>Flutter et Dart:Créez des applications pour Android et iOS</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Intro -->

<div class="intro">
  <div class="intro_background parallax-window" data-parallax="scroll" data-image-src="/new/images/cours/FlutterDart.png" data-speed="0.8"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="intro_container d-flex flex-column align-items-start justify-content-end">
          <div class="intro_content">
            <div class="intro_price">Certifié</div>
            <div class="rating_r rating_r_4 intro_rating"><i></i><i></i><i></i><i></i><i></i></div>
            <div class="intro_title">Flutter et Dart:Créez des applications pour Android et iOS</div>
            <div class="intro_meta">
              <div class="intro_instructors">Commence le <span><a href="#">lundi 8 octobre 2018 </a></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Course -->

<div class="course">
  <div class="course_top"></div>
  <div class="container">
    <div class="row row-lg-eq-height">

      <!-- Panels -->
      <div class="col-lg-9">
        <div class="tab_panels">

          <!-- Tabs -->
          <div class="course_tabs_container">
            <div class="container">
              <div class="row">
                <div class="col-lg-9">
                  <div class="tabs d-flex flex-row align-items-center justify-content-start">
                    <div class="tab active">description</div>
                    <div class="tab">programme</div>
                    <div class="tab">avis</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Description -->
          <div class="tab_panel description active">
            <div class="panel_title">Début de la prochaine rentrée :</div>
            <div class="panel_text">
              <p style="color: #2E21DF;margin-bottom: 20px;font-size: 20px;">lundi 8 octobre 2018</p>
              <p> <strong>Connaissez vous Flutter?</strong><br> C’est le SDK (ou Kit de développement en français) de Google.
                Il permet de créer des applications à la fois pour Android et iOS.<br> <strong>Connaissez vous Dart?</strong>
              </p>
              <p> C’est un langage de programmation orienté objet développé par Google. Il est facile à comprendre et à prendre en main et
                 se rapproche de langages tels que Java ou Swift par exemple.
              </p>
              <p> Dans ce cours nous allons ensemble apprendre à développer des applications à la fois pour iOS et Android avec Flutter et
                  Dart. Nous partirons des bases pour créer au fil du cours des applications de plus en plus évoluées.
              </p>
              <p>Pour bien mettre en pratique vos nouvelles compétences, vous aurez des challenges à faire tout au long du cours, comme par
                 exemple créer une application de calcul de calories.
              </p>

              <h3>Voici ce que vous allez apprendre durant ce cours:</h3>

              <ul>
                    <li> <p>- La prise en main d’Android Studio, le logiciel qui vous servira durant votre apprentissage.</p> </li>
                    <li> <p>- Les bases de Dart.</p> </li>
                    <li> <p>- La programmation orienté</p> </li>
                    <li> <p>- Les Widgets basiques</p> </li>
                    <li> <p>- Création d’un lecteur audio</p> </li>
                    <li> <p>- Les Widgets Pop</p> </li>
                    <li> <p>- Création d’un quizz</p> </li>
                    <li> <p>- Les Widgets Interactifs</p> </li>
                    <li> <p>- Création d’un calculateur de calories</p> </li>
                    <li> <p>- Adapter les Widgets selon la plateforme(Android ou iOS)</p> </li>
                    <li> <p>- Les listes</p> </li>
                    <li> <p>- Les grilles</p> </li>
                    <li> <p>- Création d’un Flux RSS</p> </li>
                    <li> <p>- Les menus</p> </li>
                    <li> <p>- La Geolocalisation</p> </li>
                    <li> <p>- Utiliser une API</p> </li>
                    <li> <p>- Création d’une application météo.</p> </li>
              </ul>
            </div>

            <!-- Instructors ->
            <div class="instructors">
              <div class="panel_title">Formateur(s)</div>
              <div class="row instructors_row">

                <-- Instructor ->
                <div class="col-lg-4 col-md-6">
                  <div class="instructor d-flex flex-row align-items-center justify-content-start">
                    <div class="instructor_image"><div><img src="/new/images/dave_team.jpeg" alt=""></div></div>
                    <div class="instructor_content">
                      <div class="instructor_name"><a href="instructors.html">David YAO</a></div>
                      <div class="instructor_title">Développeur web</div>
                    </div>
                  </div>
                </div>



              </div>
            </div> -->

            <!-- FAQs -->
            <div class="faqs">
              <div class="panel_title">FAQs</div>
              <div class="accordions">

                <div class="elements_accordions">

                  <div class="accordion_container">
                    <div class="accordion d-flex flex-row align-items-center active"><div>Combien coûte la formation ?</div></div>
                    <div class="accordion_panel">
                      <p>30.000 FCFA par mois payables en ligne.</p>
                    </div>
                  </div>

                  <div class="accordion_container">
                    <div class="accordion d-flex flex-row align-items-center"><div>Quelle est la politique de remboursement ?</div></div>
                    <div class="accordion_panel">
                      <p>Elle se base sur la garntie de satisfaction inconditionnelle de 14 jours. Ce qui veut dire qu'au bout de
                      14 jours, si vous n'êtes pas satisfait de la formation et sans avoir à en donner les raisons, nous vous
                    remboursons votre argent.</p>
                    </div>
                  </div>

                  <div class="accordion_container">
                    <div class="accordion d-flex flex-row align-items-center"><div>Quels sont les prérequis ?</div></div>
                    <div class="accordion_panel">
                      <p>Même si une connaissance en informatique serait l'idéal, il n'est pas nécessaire
                        de s'y connaitre pour entrer dans la fprmation <br> Par contre, il faut un ordinateru (bureau ou portable)
                      et une connexion Internet. <br> De plus, il faut être quelqu'un de sérieux et déterminé. Voilà pourquoi Oschool
                    enlèvera du parcours, tout étudiant présentant de freéquentes absences et un manque évident de motivation. </p>
                    </div>
                  </div>

                  <div class="accordion_container">
                    <div class="accordion d-flex flex-row align-items-center"><div>Y a t-il un certificat à la fin de la formation ?</div></div>
                    <div class="accordion_panel">
                      <p>Oui vous obtenez un certificat de fin de formation, si vous réalisez le projet de fin de formation et passez
                      avec succès votre soutenance.</p>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>

          <!-- Curriculum -->
          <div class="tab_panel curriculum">

            <div class="curriculum_items">
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 1</div>
                  <div class="cur_num ml-auto">1/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span> Section 1: Présentation de Flutter et Dart !<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 2: Installation de Flutter<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                        </ul>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 2</div>
                  <div class="cur_num ml-auto">2/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 3: Notre première application
                              <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 4: Les bases de Dart (partie1)<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 3</div>
                  <div class="cur_num ml-auto">3/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 5:Les bases de Dart (partie 2)<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i>Section 6: La programmation orienté objet avec Dart<span><a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 4</div>
                  <div class="cur_num ml-auto">4/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 7: Les Widgets basiques<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 8: Les Widgets basiques partie 2<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 5</div>
                  <div class="cur_num ml-auto">5/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 9: Créez une application de musique<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 10: Pop up et Navigator<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 6</div>
                  <div class="cur_num ml-auto">6/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 11:Créez une application de Quizz<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 12:Les Widgets interactifs<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 7</div>
                  <div class="cur_num ml-auto">7/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 13:Créez une application de calcul de calories<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 14:Les Widgets Cupertino (style iOS)<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
                <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 8</div>
                  <div class="cur_num ml-auto">8/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 15:Les scrollables - Listes et Grilles<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 16:Créez une application de flux RSS <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 9</div>
                  <div class="cur_num ml-auto">9/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 17:CodaMeteo - Le Drawer <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 18:CodaMeteo - Le SharedPreferences<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 10</div>
                  <div class="cur_num ml-auto">10/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 19: CodaMeteo - Json & API <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 20: Enregistrer les données de façon permanente (Partie 1)<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 11</div>
                  <div class="cur_num ml-auto">11/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span></span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 21: SQFlite - Enregistrer les données de façon permanente (Partie 2)<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 22:ImagePicker - Utilisez l’appareil photo et la librairie<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="cur_item">
                <div class="cur_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="cur_title">Semaine 12</div>
                  <div class="cur_num ml-auto">12/12</div>
                </div>
                <div class="cur_item_content">
                  <div class="cur_item_title"></div>
                  <div class="cur_item_text">

                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Préparation de la soutenance</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Soutenance</span>
                        <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>30 minutes</span></div>

                          </li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Reviews -->
          <div class="tab_panel reviews">
            <div class="panel_title">Ce qu'ils en pensent</div>
            <div class="panel_text">
              <p>Ils ont participé ou participent à la formation Développeur fornt-end. Et voici leurs avis sur ce parcours</p>
            </div>
            <div class="cur_ratings_container clearfix">
              <div class="cur_rating d-flex flex-column align-items-center justify-content-center">
                <div class="cur_rating_num">4,5</div>
                <div class="rating_r rating_r_4 cur_stars"><i></i><i></i><i></i><i></i><i></i></div>
                <div class="cur_rating_text">Rated 5 out of 3 Ratings</div>
              </div>
              <div class="cur_rating_progress d-flex flex-column align-items-center justify-content-center">
                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                  <span>5 stars</span>
                  <div id="cur_pbar_1" class="cur_pbar" data-perc="0.80"></div>
                </div>
                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                  <span>4 stars</span>
                  <div id="cur_pbar_2" class="cur_pbar" data-perc="0.20"></div>
                </div>
                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                  <span>3 stars</span>
                  <div id="cur_pbar_3" class="cur_pbar" data-perc="0.0"></div>
                </div>
                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                  <span>2 stars</span>
                  <div id="cur_pbar_4" class="cur_pbar" data-perc="0.0"></div>
                </div>
                <div class="cur_progress d-flex flex-row align-items-center justify-content-between">
                  <span>1 star</span>
                  <div id="cur_pbar_5" class="cur_pbar" data-perc="0.0"></div>
                </div>
              </div>
            </div>

            <div class="cur_reviews">

              <!-- Review -->
              <div class="review">
                <div class="review_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="review_title d-flex flex-row align-items-center justify-content-center">
                    <div class="review_author_image"><div><img src="/new/images/zigoliclem.jpg" width="100%" alt=""></div></div>
                    <div class="review_author">
                      <div class="review_author_name"><a href="#">Zigoli Clément</a></div>
                      <div class="review_date">10 Juin 2018 à 16h08</div>
                    </div>
                  </div>
                  <div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
                </div>
                <div class="review_text">
                  <p>Merci Oschool, car vous êtes les meilleurs coachs que je connaisse. Si aujourd'hui, moi qui ne connaissais rien à la programmation, suis capable de développer des applications, alors tout le monde peut y arriver</p>
                </div>
              </div>

              <!-- Review -->
              <div class="review">
                <div class="review_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="review_title d-flex flex-row align-items-center justify-content-center">
                    <div class="review_author_image"><div><img src="/new/images/ballet.jpg" width="100%" alt=""></div></div>
                    <div class="review_author">
                      <div class="review_author_name"><a href="#">Bernadin Ballet</a></div>
                      <div class="review_date">25 Juillet  2018 à 15h30</div>
                    </div>
                  </div>
                  <div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
                </div>
                <div class="review_text">
                  <p>Merci à toute l'équipe Oschool pour le suivi apporté durant la formation. Aujourd'hui, je travaille pour des entreprises en tant que développeur web, alors qu'avant j'étais électricien.</p>
                </div>
              </div>

              <!-- Review -->
              <div class="review">
                <div class="review_title_container d-flex flex-row align-items-start justify-content-start">
                  <div class="review_title d-flex flex-row align-items-center justify-content-center">
                    <div class="review_author_image"><div><img src="/new/images/amande.jpg" width="100%" alt=""></div></div>
                    <div class="review_author">
                      <div class="review_author_name"><a href="#">Amande</a></div>
                      <div class="review_date">11 Septembre 2018 à 10h48</div>
                    </div>
                  </div>
                  <div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
                </div>
                <div class="review_text">
                  <p>Je viens de m'inscrire pour la formation, mais je suis déjà contente qu'il y ait ce genre de formation en Afrique. Et vu le sérieux mis pour accepter ma candidature, je suis certaine que je serai très vite une développeuse web !</p>
                </div>
              </div>

            </div>
          </div>

          <!-- Members
          <div class="tab_panel members">
            <div class="panel_title">Members</div>
            <div class="panel_text">
              <p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent. Primis quidam ancillae te mei.</p>
            </div>
            <div class="members_list d-flex flex-row flex-wrap align-items-start justify-content-start">

              <div class="member">
                <div class="member_image"><img src="/new/images/member_1.jpg" alt=""></div>
                <div class="member_title"><a href="#">Sarah Parker</a></div>
              </div>


            </div>
          </div>
        -->

        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="sidebar">
          <div class="sidebar_background"></div>
          <div class="sidebar_top"><a href="https://adams21.typeform.com/to/itKgiA">s'inscrire</a></div>
          <div class="sidebar_content">

            <!-- Features -->
            <div class="sidebar_section features">
              <div class="sidebar_title">Caractéristiques de la formation</div>
              <div class="features_content">
                <ul class="features_list">

                  <!-- Feature -->
                  <li class="d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Durée</span></div>
                    <div class="feature_text ml-auto">4 mois</div>
                  </li>

                  <!-- Feature -->
                  <li class="d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_title"><i class="fa fa-bell" aria-hidden="true"></i><span>Projets</span></div>
                    <div class="feature_text ml-auto">7</div>
                  </li>

                  <!-- Feature -->
                  <li class="d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_title"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Soutenance</span></div>
                    <div class="feature_text ml-auto">1</div>
                  </li>

                  <!-- Feature -->
                  <li class="d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_title"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Pourcentage d'admission</span></div>
                    <div class="feature_text ml-auto">60</div>
                  </li>

                  <!-- Feature -->
                  <li class="d-flex flex-row align-items-start justify-content-start">
                    <div class="feature_title"><i class="fa fa-thumbs-down" aria-hidden="true"></i><span>Max Reprises</span></div>
                    <div class="feature_text ml-auto">2</div>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Cert -->
            <div class="sidebar_section cert">
              <div class="sidebar_title">Certification</div>
              <div class="cert_image"><img src="/new/images/certificats/devweb.png" alt=""></div>
            </div>

            <!-- You may like ->
            <div class="sidebar_section like">
              <div class="sidebar_title">Cours associé :</div>
              <div class="like_items">

                <-- Like Item ->
                <div class="like_item d-flex flex-row align-items-end justify-content-start">
                  <div class="like_title_container">
                    <div class="like_title"> <a href="https://oschool.ci/course/formation-complete-developpeur-web-2/" target="_blank">Devenez développeur web en partant de zéro</a> </div>
                    <div class="like_subtitle">Par Oschool</div>
                  </div>
                  <div class="like_price ml-auto">20.000 FCFA</div>
                </div>
                -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 style="font-size: 24px;" class="modal-title">Remplissez ce formulaire pour vous inscrire à la formation</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
<form method="post" action="{{url('envoi')}}">
{{ csrf_field() }}

<div class="form-group">
  <label for="">Email:</label>
  <input type="email" class="form-control" id="" placeholder="Email" name="email" required>
</div>
<div class="form-group">
  <label for="">Nom</label>
  <input type="text" class="form-control" id="" placeholder="Nom" name="nom" required>
</div>
<div class="form-group">
  <label for="">Prénoms</label>
  <input type="text" class="form-control" id="" placeholder="Prénoms" name="prenoms" required>
</div>
<div class="form-group">
  <label for="">Numéro de téléphone</label>
  <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel" required>
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
