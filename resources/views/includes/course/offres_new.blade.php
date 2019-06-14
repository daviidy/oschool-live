<section _ngcontent-iridium-us-c35="" class="udacity-impact-container contain">
    <div _ngcontent-iridium-us-c35="">
        <div _ngcontent-iridium-us-c35="" class="header">
            <div _ngcontent-iridium-us-c35="" class="header-content"><img _ngcontent-iridium-us-c35="" class="udacity-impact--title-image" src="//images.ctfassets.net/2y9b3o528xhq/3mUf64SOd7xkh7BgwVo2aA/9576311d2b83c03bda1f1ba86be34dbd/woman-sitting-behind-laptop.png">
                <div _ngcontent-iridium-us-c35="" class="h2 udacity-impact--title"> Pourquoi aller étudier ailleurs ?  </div>
                <p _ngcontent-iridium-us-c35=""> Profitez dès maintenant de nos offres uniques. Faites le avant le {{\Carbon\Carbon::parse($formation->start_date)->format('d-m-Y')}} </p>
            </div>
        </div>

    </div>
</section>


<div id="offres" _ngcontent-iridium-us-c48="" class="newoffres price-cards">
    <!---->
    <!---->
    @foreach($formation->offers as $offer)
    <div _ngcontent-iridium-us-c48="" class="price-card ng-star-inserted">
      @if($offer->name == "Offre Premium")
      <div _ngcontent-iridium-us-c48="" class="flag ng-star-inserted">
          <p _ngcontent-iridium-us-c48="" class="flag__text"> Top!</p>
      </div>
      @endif
        <!---->
        <div _ngcontent-iridium-us-c48="" class="title h6">{{$offer->name}}</div>
        <div _ngcontent-iridium-us-c48="" class="price"><span _ngcontent-iridium-us-c48="" class="price__payable">{{number_format($offer->amount)}}</span><span _ngcontent-iridium-us-c48="" class="price__label">
                <!---->
                <!----><span _ngcontent-iridium-us-c48="" class="ng-star-inserted">FCFA/mois</span></span></div>
        <!---->
        <ul>
          @foreach($offer->characteristics as $characteristic)
          <li>
            <p _ngcontent-iridium-us-c48="" class="blurb">{{$characteristic->description}}</p>
          </li>
          @endforeach
        </ul>

        <div _ngcontent-iridium-us-c48="" class="enroll-button__container">
          @auth
          <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" data-toggle="modal" data-target="#enrolling{{$offer->id}}">S'inscrire maintenant</a>
          @endauth
          @guest
          <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" data-toggle="modal" data-target="#inscription{{$offer->id}}">S'inscrire maintenant</a>
          @endguest
        </div>
    </div>
    @endforeach
    <!---->

</div>
