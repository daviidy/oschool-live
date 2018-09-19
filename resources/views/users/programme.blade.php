@extends('layouts.menu-dashboard-teacher')

@section('content')

<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row mt">

      <div class="col-sm-12">
        <section class="panel">
          <header class="panel-heading wht-bg">
            <h4 class="gen-case" style="text-align: center;font-weight: bold;">
                PROGRAMME DES COURS
            </h4>
          </header>
          <div class="panel-body minimal">
            <div class="mail-option">
              <div class="chk-all">
                <div class="pull-left mail-checkbox">
                  <input type="checkbox" class="">
                </div>
                <div class="btn-group">
                  <a data-toggle="dropdown" href="#" class="btn mini all">
                    All
                    </a>
                </div>
              </div>
            </div>
            <div class="table-inbox-wrap ">
              <table class="table table-inbox table-hover">
                <tbody>
                  <tr class="">
                    <td class="inbox-small-cells">

                    </td>
                    <td class="inbox-small-cells" style="font-weight: bold;">Semaines</td>
                    <td class="view-message  dont-show" style="font-weight: bold;">Sections</td>
                    <td class="view-message " style="font-weight: bold;">Les chapitres</td>
                    <td class="view-message  inbox-small-cells"></td>
                    <td class="view-message  text-right">Durée</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaines 1</td>
                    <td class="view-message dont-show">Section 1 et 2</td>
                    <td class="view-message">Bienvenue</td>
                    <td class="view-message inbox-small-cells">Comment fonctionne le web ?</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaines 2</td>
                    <td class="view-message dont-show"> Section 3 et 4 </td>
                    <td class="view-message">HTML: Structure d'un site web </td>
                    <td class="view-message inbox-small-cells">Un regard plus attentif sur CSS</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaines 3</td>
                    <td class="view-message dont-show"> Section 5 et 6 </td>
                    <td class="view-message">Bordures et espaces  </td>
                    <td class="view-message inbox-small-cells">Construire avec Bootstrap</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 4 </td>
                    <td class="view-message dont-show">Section 7 et 8 </td>
                    <td class="view-message">Créez un site web interactif: Faire un menu déroulant</td>
                    <td class="view-message inbox-small-cells">Site web interactif: Menu coulissant</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 5 </td>
                    <td class="view-message dont-show">Section 9 et 10</td>
                    <td class="view-message">Javascript: les bases </td>
                    <td class="view-message inbox-small-cells">Les évènements</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 6</td>
                    <td class="view-message dont-show">Section 11 et 12</td>
                    <td class="view-message">Site web interactif : Construisez un fil d'actualités </td>
                    <td class="view-message inbox-small-cells">Le DOM</td>
                    <td class="view-message text-right"> 2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 7</td>
                    <td class="view-message dont-show">Section 13 et 13</td>
                    <td class="view-message view-message">Site web interactif: Construisons la page d'accueil de Flipboard </td>
                    <td class="view-message inbox-small-cells">PHP: Introduction</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 8</td>
                    <td class="view-message dont-show">Section 14 et 15</td>
                    <td class="view-message view-message">Les bases en PHP</td>
                    <td class="view-message inbox-small-cells">Transmettre les données de page en page</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 9</td>
                    <td class="view-message dont-show">Section 16 et 17</td>
                    <td class="view-message view-message">PHP MySQL </td>
                    <td class="view-message inbox-small-cells">Wordpress</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 10</td>
                    <td class="view-message dont-show">Section 18 et 19</td>
                    <td class="view-message">Hébergement et noms de domaines</td>
                    <td class="view-message inbox-small-cells">Qu'avons-nous appris de ce cours ?</td>
                    <td class="view-message text-right">2 heures</td>
                  </tr>
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">Semaine 11 et 12</td>
                    <td class="dont-show">Section 20 et 21</td>
                    <td class="view-message">Projets </td>
                    <td class="view-message inbox-small-cells">Soutenances</td>
                    <td class="view-message text-right">4 heures</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

@endsection
