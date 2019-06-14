<div class="row u-margin-t-xxx-lg align-row">

  <div class="col-xs-12 col-sm-6">
    <div style="text-align: left !important;" class="c-how__sectionContent">
      @if($formation->type == 'kids')
      <h4 class="h4 u-bold">C'est le moment d'agir !</h4>
      @else
      <h4 class="h4 u-bold">Pourquoi suivre ce parcours ?</h4>
      @endif
      <p class="u-margin-t-md subHeading">
        {{$formation->description_longue}}
      </p>
    </div>
  </div>
  <div _ngcontent-c33="" class="col-xs-12 col-sm-6 stat ng-star-inserted">
    <div _ngcontent-c33="" class="card hidden-md-down">
      <div _ngcontent-c33=""><img _ngcontent-c33="" class="mb-half" irdeferimage="" alt="" src="/img/page-parcours/card.svg" srcset="/img/page-parcours/card.svg 1x">
        <!---->
        <h4 _ngcontent-c33="" class="light ng-star-inserted">
          <h4 class="light">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">
                {{$formation->accroche}}
              </font>
            </font>
          </h4>
        </h4>
        <!---->
      </div>
    </div>
  </div>
</div>
