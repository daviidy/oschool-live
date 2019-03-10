<!--section prix-->

<section id="offres" _ngcontent-c18="" class="ng-star-inserted">
  <!---->
  <ir-degree-pricing _ngcontent-c18="" id="nd-pricing" _nghost-c63="" class="ng-star-inserted">
    <!--<ir-payment-info _ngcontent-c63="" _nghost-c100="" style="display: none;">
      <div _ngcontent-c100="" class="contain">
        <div _ngcontent-c100="" class="partnership">
          <div _ngcontent-c100="" class="logos"><img _ngcontent-c100="" alt="WordMark" deferimgsrc="/assets/iridium/images/logos/udacity-wordmark.svg" irdeferimage="" src="/assets/iridium/images/logos/udacity-wordmark.svg" srcset="/assets/iridium/images/logos/udacity-wordmark.svg 1x">
            <div _ngcontent-c100="" class="divider"></div><img _ngcontent-c100="" src="/assets/iridium/images/logos/logo-affirm.svg">
          </div>
          <div _ngcontent-c100="">
            <h2 _ngcontent-c100="">Learn now, pay later</h2>
            <p _ngcontent-c100="">To make it even easier to learn, you can finance your Nanodegree through Affirm.</p>
          </div>
        </div>
        <ul _ngcontent-c100="" class="features">
          <li _ngcontent-c100="">
            <div _ngcontent-c100="" class="icon"><img _ngcontent-c100="" alt="Calendar" deferimgsrc="/assets/iridium/images/affirm-installment/icon-calendar.svg" irdeferimage="" src="/assets/iridium/images/affirm-installment/icon-calendar.svg"
                srcset="/assets/iridium/images/affirm-installment/icon-calendar.svg 1x"></div>
            <div _ngcontent-c100="" class="feature-description">
              <h4 _ngcontent-c100="">Easy monthly payments</h4>
              <p _ngcontent-c100="">As low as US$84 per month at 0% APR.</p>
              <p _ngcontent-c100=""><a _ngcontent-c100="">Learn more.</a></p>
            </div>
          </li>
          <li _ngcontent-c100="">
            <div _ngcontent-c100="" class="icon"><img _ngcontent-c100="" alt="Finance" deferimgsrc="/assets/iridium/images/affirm-installment/icon-finance.svg" irdeferimage="" src="/assets/iridium/images/affirm-installment/icon-finance.svg" srcset="/assets/iridium/images/affirm-installment/icon-finance.svg 1x"></div>
            <div _ngcontent-c100="" class="feature-description">
              <h4 _ngcontent-c100="">Flexible Payments</h4>
              <p _ngcontent-c100="">Pay your monthly bill using a bank transfer, check, or debit card.</p>
            </div>
          </li>
        </ul>
      </div>
    </ir-payment-info> --->
    <div _ngcontent-c63="" class="payment-card-section" style="">
      <!---->
      <h2 _ngcontent-c63="" class="text-center ng-star-inserted">Inscrivez-vous maintenant</h2>
      <!---->
      <div _ngcontent-c63="" class="cards_contain contain contain--none ng-star-inserted">
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->

<!--
        <ir-degree-pricing-card _ngcontent-c63="" _nghost-c101="" class="ng-star-inserted">
          <div _ngcontent-c101="" class="card card--pricing primary selected more-padding-top">
            <div _ngcontent-c101="" class="card__triangle"></div>
            <!----
            <h6 style="color:#EA5252;" _ngcontent-c101="" class="card__flag ng-star-inserted">Promotion</h6>
           <!--  <h3 _ngcontent-c101="" style="margin-top: 3rem;color: orange;background: #EAEAEA;" class="card__flag ng-star-inserted">La plus vendue</h3>
            <div _ngcontent-c101="" class="card--pricing__header">
              <h5 _ngcontent-c101="">Développeur Web</h5>
              <img width="100" src="http://pluspng.com/img-png/gift-hd-png-hd-mystery-gift-box-png-405.png" alt="">
              <p>Oschool a décidé de se montrer généreux en cette fin d'année. Voici l'offre exceptionnelle que nous vous offrons</p>
                 <div _ngcontent-c101="" class="card__price ng-star-inserted">
                <!----<span _ngcontent-c101="" class="card__price--current"><del><h5>30.000 FCFA / mois</h5></del>
                  <!----</span>
                   <!----<span _ngcontent-c101="" class="card__price--current2"><h1>10.000 FCFA<h1></span>
                   <span style="color:#EA5252;" _ngcontent-c101="" class="card__price--current"><em><h5>le premier mois</h5></em>
                     <!----</span>
              </div>
              <br>

              <!---->
              <!----
            </div>
            <div _ngcontent-c101="" class="card--pricing__body">
              <!----
              <p>Utilisez le code promo que nous vous avons fourni par mail, pour bénéficier de cette offre
              aves les mêmes avantages que l'offre normale</p>
              <!---->
              <!----
            </div>
            <!---->
            <!---->
            <!----
            <div _ngcontent-c101="" class="button-wrapper ng-star-inserted">
              <!---->
              <!---->
              <!----
              @auth
              <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" id="orange">S'inscrire maintenant</a>
              @endauth
              @guest
              <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" data-toggle="modal" data-target="#inscription">S'inscrire maintenant</a>
              @endguest
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!----
            </div>
            <!----
          </div>



        </ir-degree-pricing-card> -->


        <ir-degree-pricing-card _ngcontent-c63="" _nghost-c101="" class="ng-star-inserted">
          <div _ngcontent-c101="" class="card card--pricing primary selected more-padding-top">
            <div _ngcontent-c101="" class="card__triangle"></div>
            <h6 _ngcontent-c101="" class="card__flag ng-star-inserted">L'offre</h6>
           <h3 _ngcontent-c101="" style="margin-top: 3rem;color: orange;background: #EAEAEA;" class="card__flag ng-star-inserted">La plus vendue</h3>
            <div _ngcontent-c101="" class="card--pricing__header">
              @if(Request::path() == 'devweb' || Request::path() == 'devweb2')
              <h5 _ngcontent-c101="">Développeur Web</h5>
              @elseif(Request::path() == 'community-management')
              <h5 _ngcontent-c101="">Community Management</h5>
              @elseif(Request::path() == 'facebook-marketing')
              <h5 _ngcontent-c101="">Facebook Marketing</h5>
              @endif
                 <div _ngcontent-c101="" class="card__price ng-star-inserted">

                   <span _ngcontent-c101="" class="card__price--current2"><h1>10.000 FCFA/mois<h1> (le premier mois)</span>

              </div>
              <br>
        <!--    <p _ngcontent-c101="">
              <span _ngcontent-c101="" class="ng-star-inserted">Vous paierez 30.000 FCFA à partir du deuxième mois</span>

            </p>-->
            </div>
            <div _ngcontent-c101="" class="card--pricing__body">
              <p> <strong style="color: #CA4352;">En bonus:</strong> <strong>vous pourrez offrir gratuitement la formation de votre
                choix à un être cher</strong> </p>
              <ul class="list-pricing">
                <li>Accès à tout le contenu (vidéos, textes, documents et autres ressources)</li>
                <li>Coaching en live chaque semaine selon votre planning</li>
                <li>Suivi pour la réalisation des projet de soutenance</li>
                <li>Obtention d'un mini diplôme</li>
                <li>Accompagnement pour bâtir un profil de carrière et obtenir un emploi</li>
              </ul>

            </div>

            <div _ngcontent-c101="" class="button-wrapper ng-star-inserted">

              @auth
              <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" id="orange">S'inscrire maintenant</a>
              @endauth
              @guest
              <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" data-toggle="modal" data-target="#inscription">S'inscrire maintenant</a>
              @endguest

            </div>

          </div>



        </ir-degree-pricing-card>





        <!---->
        <!---->
        <!---->
      </div>
      <!---->
      <!---->
    </div>

  </ir-degree-pricing>
</section>

<!--fin section prix-->
