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
            <li>développeur web junior</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Intro -->

<div class="intro">
  <div class="intro_background parallax-window" data-parallax="scroll" data-image-src="/new/images/cours/devweb.png" data-speed="0.8"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="intro_container d-flex flex-column align-items-start justify-content-end">
          <div class="intro_content">
            <div class="intro_price">Certifié</div>
            <div class="rating_r rating_r_4 intro_rating"><i></i><i></i><i></i><i></i><i></i></div>
            <div class="intro_title">Développeur Web Junior</div>
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
              <p style="color: #2E21DF;margin-bottom: 20px;font-size: 20px;">Lundi 8 octobre 2018</p>
<h2>Qu’est-ce qu’un développeur web junior ?<h2>
<p>Le développeur web junior est indispensable dans une équipe de développement.
Il a pour mission de donner vie aux maquettes visuelles d’une application web réalisées souvent
par le graphiste ou l’UX Designer.
Il doit traduire, en langage web, ses recommandations graphiques en rédigeant du code HTML, CSS,
mais aussi JavaScript et PHP. Il est chargé de :</p>

<ul>
<li> <p>- assembler les pages en HTML5 et CSS3 à partir de maquettes graphiques</p> </li>
<li> <p>- intégrer des contenus textes, images, sons, vidéos dans le code HTML5</p> </li>
<li> <p>- respecter les normes d’accessibilité et de référencement du W3C</p> </li>
<li> <p>- assurer la compatibilité avec les différents navigateurs du marché</p> </li>
<li> <p>- mettre en place une communication entre client et serveur avec JavaScript et PHP</p> </li>
<li> <p>- organiser et gérer la base de données</p> </li>
</ul>

<h2>Ce que vous serez capable de faire<h2>

<ul>
<li> <p>- développer des sites comme Facebook, Airbnb, Netflix, Jumia etc.</p> </li>
<li> <p>- gérer les comptes utilisateurs</p> </li>
<li> <p>- faire réagir la page web en fonction des actions de l’utilisateur en JavaScript</p> </li>
<li> <p>- monter rapidement des sites web avec Wordpress</p> </li>
<li> <p>- créer, gérer et afficher le contenu d’une base de données</p> </li>
<li> <p>- adapter l'apparence d'un site web sur n'importe quel type d'écran</p> </li>
</ul>
            </div>


            <!-- FAQs -->
            <div class="faqs">
              <div class="panel_title">FAQs</div>
              <div class="accordions">

                <div class="elements_accordions">

                  <div class="accordion_container">
                    <div class="accordion d-flex flex-row align-items-center active"><div>Combien coûte la formation ?</div></div>
                    <div class="accordion_panel">
                      <p>30.000 FCFA par mois, payables en ligne.</p>
                    </div>
                  </div>

                  <div class="accordion_container">
                    <div class="accordion d-flex flex-row align-items-center"><div>Quelle est la politique de remboursement ?</div></div>
                    <div class="accordion_panel">
                      <p>Elle se base sur la garantie de satisfaction inconditionnelle de 14 jours. Ce qui veut dire qu'au bout de
                      14 jours, si vous n'êtes pas satisfait de la formation et sans avoir à en donner les raisons, nous vous
                    remboursons votre argent.</p>
                    </div>
                  </div>

                  <div class="accordion_container">
                    <div class="accordion d-flex flex-row align-items-center"><div>Quels sont les prérequis ?</div></div>
                    <div class="accordion_panel">
                      <p>Même si une connaissance en informatique serait l'idéal, il n'est pas nécessaire
                        de s'y connaitre pour entrer dans la formation <br> Par contre, il faut un ordinateru (bureau ou portable)
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 0: Découvrir le développement web</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 1: Bienvenue !<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 2: Comment fonctionne le web ?<a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 1: Apprendre HTML et CSS</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 1: HTML: structure d'un site web
                              <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 2: Un regard plus attentif sur CSS (Projet à réaliser en classe: présentation livre)<a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 1: Apprendre HTML et CSS</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 3: Bordures et espaces (Projet à réaliser en classe: la galerie d’amour)<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i>Section 4: Construire avec bootstrap (Projet à réaliser en classe: maison des artisans)<span><a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 2: Apprendre Javascript</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 1: Créez un site web interactif: faire un menu déroulant <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 2: Site Web interactif: Menu coulissant<a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 2: Apprendre Javascript</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 3: Javascript: les bases<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 4: Les événements <a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 2: Apprendre Javascript</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 5 : Site web interactif: construisez un fil d'actualités <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 6 : Le DOM<a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Apprendre PHP</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 1: PHP : Introduction <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 2: Les bases en PHP<a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Apprendre PHP</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 3 : Transmettre les données de page en page <a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 4 : PHP MySQL <a href="#"></a></span>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 5: Wordpress</span>
                        <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 6: Hébergement et noms de domaines</span>
                        <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>
                        </li>


                    </ul>
                  </div>
                  <div class="cur_contents">
                    <ul>
                      <li>
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 7 : Qu'avons-nous appris dans ce cours ?</span>
                        <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>1 Heure</span></div>

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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 8: Votre carrière</span>
                        <ul>

                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 1: Devenir développeur web salarié<a href="#"></a></span>
                            <div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>
                          </li>
                          <li class="d-flex flex-row align-items-center justify-content-start">
                            <i class="fa fa-file" aria-hidden="true"></i><span>Section 2 : Devenir développeur
freelance.
<a href="#"></a></span>
<div class="cur_time ml-auto"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15 minutes</span></div>


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
                        <i class="fa fa-folder" aria-hidden="true"></i><span>Partie 9: Préparation de la soutenance</span>
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
              <p>Ils ont participé ou participent à la formation Développeur Web Junior. Et voici leurs avis sur ce parcours</p>
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

            <!-- You may like -->
            <div class="sidebar_section like">
              <div class="sidebar_title">Cours associé :</div>
              <div class="like_items">

                <!-- Like Item -->
                <div class="like_item d-flex flex-row align-items-end justify-content-start">
                  <div class="like_title_container">
                    <div class="like_title"> <a href="https://oschool.ci/course/formation-complete-developpeur-web-2/" target="_blank">Devenez développeur web en partant de zéro</a> </div>
                    <div class="like_subtitle">Par Oschool</div>
                  </div>
                </div>

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
