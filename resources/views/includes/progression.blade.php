<ir-school-nanodegree-card _ngcontent-c26="" _nghost-c29="">
  <!----><a _ngcontent-c29="" target="_blank" href="{{$progression->lien}}">
    <div _ngcontent-c29="" class="card" style="height:auto !important;">
      <div _ngcontent-c29="" class="item__left">
        <p _ngcontent-c29="" class="h5 mb-0">

          @if ($loop->iteration == 1)
            {{ $formation->nom }}
          @endif

        </p>
      </div>
      <div _ngcontent-c29="" class="item__main">
        <p style="text-align: center;word-wrap: break-word;width: 50%;margin: 0 auto;" _ngcontent-c29="" class="degree-title mb-0">{{$progression->titre}}
          </p>
        <!---->
      </div>
      <div _ngcontent-c29="" class="item__right">
        <!----><a _ngcontent-c29="" class="button--primary sm" target="_blank" href="{{$progression->lien}}">Voir le cours</a></div>
    </div>
  </a></ir-school-nanodegree-card>
