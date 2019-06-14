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
            est composé de {{$formation->projets->count()}} projets. Avec chaque projet,
            vous allez créer quelque chose qui démontre votre maîtrise des compétences recherchées.
            La complexité des projets varie. En fin de compte,
            vous aurez un portefeuille de projets et un CV digne d'être aprréciés par des employeurs potentiels.</p>
          <!---->
          <p _ngcontent-c55="" class="small hidden-lg-up ng-star-inserted">Le programme {{$formation->nom}}
            est composé de {{$formation->projets->count()}} projets. Avec chaque projet,
            vous allez créer quelque chose qui démontre votre maîtrise des compétences recherchées.
            La complexité des projets varie.</p>
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
                <!----><span _ngcontent-c95="" class="degree-syllabus-preview__content--term-prereq ng-star-inserted">Vous devez disposer d'un ordinateur portable, et d'une bonne connexion Internet pour suivre cette formation</span>
                <!---->
                <!---->
                <!----><a href="https://drive.google.com/open?id=1ihKHmukvYioQ6VfS_eaqSuIq4gOgnxcA" _ngcontent-c95="" class="pointer ng-star-inserted">Voir les outils requis.</a>
                <!---->
              </p>
              <section _ngcontent-c95="" class="degree-syllabus-preview__content--parts">
                <!---->
                <!---->
                <!---->
                <ul _ngcontent-c95="" class="ng-star-inserted">
                  <!---->
                  @foreach($formation->projets as $projet)
                  <li _ngcontent-c95="" class="ng-star-inserted">
                    <div _ngcontent-c95="" class="part">
                      <header _ngcontent-c95="" class="part__header mb-half">
                        <!---->
                        <h4 _ngcontent-c95="" class="h5 mb-0 ng-star-inserted">{{$projet->titre}}</h4>
                        <!---->
                      </header>
                    <!--  <p _ngcontent-c95="" class="small mb-half"> <a target="_blank" href="{{$projet->enonce}}">Voir l'énoncé</a> </p>-->
                      <!---->
                      <!---->
                      <!---->
                      <!---->
                      @foreach($projet->progressions as $progression)
                      <span _ngcontent-c95="" class="part__project text-only ng-star-inserted"><img _ngcontent-c95="" class="icon-middle" src="/img/page-parcours/icon-project.svg"><span
                          _ngcontent-c95="">{{$progression->titre}}</span></span>
                      @endforeach
                      <!---->
                      <!---->
                    </div>
                  </li>
                  @endforeach

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
                <p _ngcontent-c95="" class="small">Voici quelques cours gratuits qui pourraient vous aider
                  <ul>
                    @foreach($formation->prerequisites as $prerequisite)
                      @if($prerequisite->type == "Cours")
                    <li><a target="_blank" href="{{$prerequisite->link}}">{{$prerequisite->description}}</a></li>
                      @endif
                    @endforeach
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
