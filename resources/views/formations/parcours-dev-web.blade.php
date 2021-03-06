@extends('layouts.menu-parcours')

@section('title', 'Développeur Web Junior')

@section('content')

  <div class="container alt section-space">
    <div class="row c-how__heading align-row">
      <div class="col-xs-12 col-sm-6 c-how__headingLeft">
        <h1 style="margin-bottom: 3rem;" class="h2 u-bold">Devenez Développeur Web Professionnel, en suivant un cours particulier avec un formateur, depuis la maison</h1>
        <a class="home_button" href="#offres">
          Inscrivez-vous maintenant
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 c-how__headingRight">
        <img style="width:90%;" src="/img/page-parcours/ordi.png" />

        <!--image du parcours et countdown-->
        <div class="row">

          <div class="col-sm-12 text-center">

            <h3 id="info">Les inscriptions se terminent dans :</h3>

          </div>

        </div>

        <div id="countdown" _ngcontent-c87="" class="countdown ng-star-inserted">
          <div _ngcontent-c87="">
              <!---->
              <!---->
              <!---->
              <ul _ngcontent-c87="" class="ng-star-inserted">
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="jours"></span><span _ngcontent-c87="">JOURS</span></li>
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="heures"></span><span _ngcontent-c87="">HRS</span></li>
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="minutes"></span><span _ngcontent-c87="">MIN</span></li>
                  <li _ngcontent-c87=""><span _ngcontent-c87="" class="countdown__timer" id="secondes"></span><span _ngcontent-c87="">SEC</span></li>
              </ul>
          </div>
      </div>
      <!--fin image parcours et countdown-->




      </div>
    </div>
  </div>




  @include('includes.infos')









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
                <li _ngcontent-c30="" class="ng-star-inserted">
                    <!----><a target="_blank" href="https://cinetpay.com/"><img style="margin: 2rem;" width="200" src="/img/page-parcours/cinetpay.png"></a>
                    <!---->
                </li>
                <li _ngcontent-c30="" class="ng-star-inserted">
                    <!----><a target="_blank" href="https://epistrophe.ci/"><img style="margin: 2rem;" width="200" src="https://epistrophe.ci/wp-content/uploads/2016/03/Epistrophe.jpg"></a>
                    <!---->
                </li>
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
        <!--
        <h3 class="h3 u-bold text-cent  er u-margin-b-sm">Apprenez avec un formateur en direct, dans notre salle virtuelle.<br>
          Tout a été fait pour vous permettre d'apprendre sereinement<br>
            Suivez notre parcours certifiant et démarrez une nouvelle carrière</h3>
        <div class="c-browser">
          <div class="c-browser__chrome">
            <div class="c-browser__buttons">
              <div class="c-browser__button"></div>
              <div class="c-browser__button"></div>
              <div class="c-browser__button"></div>
            </div>
          </div>
          <div class="c-browser__image">
            <iframe width="100%" height="528" src="https://player.vimeo.com/video/320601050" frameborder="0" allowFullScreen mozallowfullscreen webkitAllowFullScreen></iframe>
          </div>
        </div>
      -->

        <div class="row u-margin-t-xxx-lg align-row">

          <div class="col-xs-12 col-sm-6">
            <div style="text-align: left !important;" class="c-how__sectionContent">
              <h4 class="h4 u-bold">Pourquoi suivre ce parcours ?</h4>
              <p class="u-margin-t-md subHeading">La demande de développeurs web est généralisée dans tous
                les secteurs et continue d'augmenter. En maîtrisant les précieuses compétences enseignées dans
                le cadre de ce programme, vous serez prêt à occuper des postes dans un large éventail d’entreprises,
                des startups aux organisations mondiales. Les projets que vous construirez et le
                portefeuille que vous développerez fourniront de nombreuses preuves de votre expertise.</p>
            </div>
          </div>
          <div _ngcontent-c33="" class="col-xs-12 col-sm-6 stat ng-star-inserted">
            <div _ngcontent-c33="" class="card hidden-md-down">
              <div _ngcontent-c33=""><img _ngcontent-c33="" class="mb-half" irdeferimage="" alt="" src="/img/page-parcours/card.svg" srcset="/img/page-parcours/card.svg 1x">
                <!---->
                <h4 _ngcontent-c33="" class="light ng-star-inserted">
                  <h4 class="light">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">JavaScript et PHP sont les langages de code les plus demandés par les entreprises en 2019</font>
                    </font>
                  </h4>
                </h4>
                <!---->
              </div>
            </div>
          </div>
        </div>



        <a class="home_button" href="#offres">
          Inscrivez-vous maintenant, n'attendez pas !
        </a>
      </div>
    </div>
  </div>

    @include('includes.works')


<!--section career-->
<section _ngcontent-c18="" class="ng-star-inserted">
  <div _ngcontent-c18="" _nghost-c47="">
    <!---->
    <!---->
    <div _ngcontent-c47="" class="contain ng-star-inserted">
      <!---->
      <h2 style="font-size: 4rem;font-weight: 300;" _ngcontent-c47="" class="white ng-star-inserted">Développez cette compétence pour aujourd'hui et demain</h2>
      <!---->
      <p _ngcontent-c47="" class="white ng-star-inserted"><span class="hidden-md-down">Ce parcours Développeur Web Junior est conçu
        pour assurer votre succès à long terme sur le terrain. Les compétences acquises vous prépareront à des
        emplois dans le monde de la programmation web, et vous serez prêt à apporter une valeur immédiate
        à toute organisation. Nous vous soutiendrons tout au long de votre parcours d'apprentissage.
        De l'acquisition des compétences techniques et professionnelles précieuses,
        jusqu'à l'obtention de l'emploi de vos rêves.</span></p>
    </div>
    @include('includes.avantages')
    <!---->
  </div>
</section>

<!--end section career-->


<!--section programme-->

<section _ngcontent-c55="" class="nd-syllabus-term__cards ng-star-inserted">
  <div _ngcontent-c55="" class="cards_contain contain contain--none">
    <!---->
    <h4 _ngcontent-c55="" class="h2 section-header ng-star-inserted">Ce que vous apprendrez</h4>
    <!---->
    <!---->
    <!---->
    <!----><a _ngcontent-c55="" class="button--secondary lg syllabus-download-button ng-star-inserted" target="_blank" href="https://docs.google.com/document/d/1bBBD1gUfjFIpRDdvPzAbcTmL4Y8Lk14IXNwAvC2AFW0/edit?usp=sharing">
    Télécharger le programme
    </a>
    <!---->
    <!---->
    <div _ngcontent-c55="" class="nd-syllabus-term__card">
      <section _ngcontent-c55="" class="nd-syllabus-term__header collapse in">
        <div _ngcontent-c55="" class="nd-syllabus-term__header__image" irdeferbgimage="" style="background-image: url(&quot;https://d125fmws0bore1.cloudfront.net/assets/pages/ndop/nd001/image-syllabus-01@2x-f4be2598bea724657d8f295449bb8f45a954581306292393cb71a8417acf3cd3.jpg&quot;);">
          <!---->
        </div>
        <div _ngcontent-c55="" class="nd-syllabus-term__header__content">
          <!---->
          <h6 _ngcontent-c55="" class="ng-star-inserted">PROGRAMME</h6>
          <h2 _ngcontent-c55="" class="h3">Développeur Web</h2>
          <!---->
          <p _ngcontent-c55="" class="small hidden-md-down ng-star-inserted">Le programme Développeur Web Junior
            est composé de huit projets. Avec chaque projet,
            vous allez créer quelque chose qui démontre votre maîtrise des compétences recherchées.
            La complexité des projets varie. En fin de compte,
            vous aurez un portefeuille de projets et un CV digne d'être aprréciés par des employeurs potentiels.</p>
          <!---->
          <p _ngcontent-c55="" class="small hidden-lg-up ng-star-inserted">Le programme Développeur Web Junior
            est composé de huit projets. Avec chaque projet,
            vous allez créer quelque chose qui démontre votre maîtrise des compétences recherchées.
            La complexité des projets varie.</p>
          <!---->
          <!---->
          <!---->
          <div _ngcontent-c55="" class="nd-syllabus-term__header__content--details">
            <p _ngcontent-c55="" class="nd-syllabus-term__toggle text-only">
            <span _ngcontent-c55="" class="ng-star-inserted">Voir les détails ci-dessous</span>
            <p _ngcontent-c55="" class="x-small gray-medium hidden-md-down ng-star-inserted"> 4 mois pour finir cette formation </p>
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
                <!----><span _ngcontent-c95="" class="degree-syllabus-preview__content--term-prereq ng-star-inserted">Vous devez disposer d'un ordinateur portable, et d'une bonne connexion Internet pour suivre cette formation</span>
                <!---->
                <!---->
                <!----><a _ngcontent-c95="" class="pointer ng-star-inserted">Voir les outils requis.</a>
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
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Fondations du Web</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">Découvre comment fonctionne le web, et installe tes outils de formation !</p>
                      <!---->
                      <!---->
                      <!---->
                      <!----><span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Engagez-vous à réussir votre formation</span></span>
                      <!---->
                      <!---->
                    </div>
                  </li>
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Apprendre HTML et CSS</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">Apprenez à utiliser les 2 langages de bases de la programmation web: HTML pour la structure d'une page web, et CSS pour gérer l'apparence de cette page</p>
                      <!---->
                      <!---->
                      <!---->
                      <!----><span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Créez un article de blog / La galerie de l'amour</span></span>
                      <!---->
                      <!---->
                    </div>
                  </li>
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Allez plus vite avec Bootstrap</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">Créez des mise en pages personnalisées pour adapter vos pages web à n'importe quel terminal

                      </p>
                      <span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Mini-projet</span></span>
                      <!---->
                    </div>
                  </li>
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Apprendre Javascript</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">Apprenez les bases de JavaScript dont vous aurez besoin pour le développement front-end ou back-end.

                      </p>
                      <span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Améliorez la page d'accueil d'un magazine</span></span>
                      <!---->
                    </div>
                  </li>
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Javascript et jQuery</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">Utilisez la librairie JQuery avec JavaScript pour apporter de beaux effets sur vos pages.

                      </p>
                      <span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Mini-projet</span></span>
                      <!---->
                    </div>
                  </li>
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">PHP et MySQL</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">C'est maintenant le temps de se plonger du côté Back-End. Vous apprendrez PHP pour générer des pages dynamiques et interroger des bases de données avec PHP.</p>
                      <!---->
                      <!---->
                      <!---->
                      <!----><span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Créez une application pour inscrire les étudiants de votre école</span></span>
                      <!---->
                      <!---->
                    </div>
                  </li>
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Allez plus vite avec Wordpress</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">
                        Entrez dans l'univers des CMS et développez
                        plus vite des sites e-commerces, des blogs etc. en prenant en main Wordpress (le plus populaire).</p>
                      <!---->
                      <!---->
                      <!---->
                      <!----><span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Créez votre site personnel</span></span>
                      <!---->
                      <!---->
                    </div>
                  </li>
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">Votre carrière</h4>
                        <!---->
                      </header>
                      <p _ngcontent-c95="" class="small mb-half">Vous voici à la fin de cette formation. Mais c'est
                      maintenant que les choses sérieuses vont commencer. Vous apprendrez à obtenir un emploi avec votre qualification.</p>
                      <!---->
                      <!---->
                      <!---->
                      <!----><span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">Mise en ligne de votre site personnel / Soutenance</span></span>
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
                  <!---->Besoin de vous préparer ?</h6>
                <!---->
                <!---->
                <p _ngcontent-c95="" class="small">Voici quelques cours gratuits qui pourraient vous aider<ul>
                    <li><a href="/course/intro-to-programming-nanodegree--nd000">Intro to Programming</a></li>
                    <li><a href="/course/intro-to-html-and-css--ud001">Intro to HTML and CSS</a></li>
                    <li><a href="/course/intro-to-javascript--ud803">Intro to JavaScript</a></li>
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

<!--fin section programme-->

@include('includes.offres')





@include('includes.calltoaction')


<!--popup pour se connecter ou s'inscrire si ce  n'est pas encore fait-->

@include('includes.registration')

@include('includes.login')



@include('includes.formulaire-inscription')




@endsection
