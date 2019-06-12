<div id="offres" _ngcontent-iridium-us-c20="" class="offreslaptop row-component ng-star-inserted" data-section-type="nanodegree-advantages" id="section-6gqyFfnDI8wqr0XUldP4h4">
    <ir-canonical-degree-nd-advantages _ngcontent-iridium-us-c20="" _nghost-iridium-us-c32="">
        <div _ngcontent-iridium-us-c32="" class="nd-advantages">
            <!---->
            <div _ngcontent-iridium-us-c32="" class="contain ng-star-inserted">
                <div _ngcontent-iridium-us-c32="" class="comparison-table">
                    <ir-experiment _ngcontent-iridium-us-c32="">
                        <!---->
                        <!---->
                        <!---->
                        <div _ngcontent-iridium-us-c32="" class="row row__header-primary ng-star-inserted">
                            <!---->
                            <div _ngcontent-iridium-us-c32="" class="col col-1 ng-star-inserted"><span _ngcontent-iridium-us-c32="" class="desktop">Nos offres</span>
                                <!----><span _ngcontent-iridium-us-c32="" class="mobile ng-star-inserted">Full list of offerings included:</span></div>
                                @foreach($formation->offers as $offer)
                            <div _ngcontent-iridium-us-c32="" class="col col-2">{{$offer->name}}</div>
                                @endforeach
                        </div>
                        <!---->
                        <!---->
                    </ir-experiment>
                    <!---->
                    <!---->
                      @foreach($categorycharacs as $categorycharac)

                    <div _ngcontent-iridium-us-c32="" class="section ng-star-inserted">
                        <!---->
                        <div _ngcontent-iridium-us-c32="" class="row row__header-secondary ng-star-inserted">
                            <div _ngcontent-iridium-us-c32="" class="col col-1 h6">
                                {{ $categorycharac->name }}
                            </div>
                        </div>
                        @foreach($categorycharac->characteristics as $characteristic)
                        <ir-experiment _ngcontent-iridium-us-c32="">
                            <!---->
                            <!---->
                            <!---->

                            <div _ngcontent-iridium-us-c32="" class="row row__feature ng-star-inserted">
                                <!---->
                                <div _ngcontent-iridium-us-c32="" class="col col-1 ng-star-inserted"> {{$characteristic->description}}
                                    <!---->
                                </div>
                                <!---->
                              @foreach($formation->offers as $offer)

                                <div _ngcontent-iridium-us-c32="" class="col col-2 ng-star-inserted">
                                  @foreach($offer->characteristics as $characteristic_offer)
                                  @if($characteristic_offer->description == $characteristic->description)
                                    <!---->
                                    <!----><svg _ngcontent-iridium-us-c32="" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" version="1.1" viewBox="0 0 20 20" width="20px" xmlns="http://www.w3.org/2000/svg" class="ng-star-inserted">
                                        <title _ngcontent-iridium-us-c32="">icon-checkmark</title>
                                        <desc _ngcontent-iridium-us-c32="">Checkmark</desc>
                                        <g _ngcontent-iridium-us-c32="" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                            <g _ngcontent-iridium-us-c32="" fill="#FFAE0C" fill-rule="nonzero" id="coupon_cards" transform="translate(-849.000000, -3677.000000)">
                                                <g _ngcontent-iridium-us-c32="" transform="translate(843.000000, 3671.000000)">
                                                    <path _ngcontent-iridium-us-c32="" d="M7.70710678,17.0930443 C7.31658249,16.7025201 6.68341751,16.7025201 6.29289322,17.0930443 C5.90236893,17.4835686 5.90236893,18.1167336 6.29289322,18.5072579 L13.4928932,25.7072579 C13.9529165,26.1672812 14.7227768,26.072507 15.0574929,25.5146469 L25.8574929,7.51464688 C26.1416411,7.04106662 25.988076,6.42680636 25.5144958,6.1426582 C25.0409155,5.85851004 24.4266552,6.01207511 24.1425071,6.48565537 L14.0014611,23.3873987 L7.70710678,17.0930443 Z"
                                                      id="🎨-icon-color"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    @endif
                                    @endforeach
                                  </div>

                                  @endforeach
                                <!---->

                            </div>

                            <!---->
                            <!---->
                        </ir-experiment>
                        @endforeach
                    </div>

                      @endforeach
                    <!---->

                </div>
                <ir-experiment _ngcontent-iridium-us-c32="">
                    <!---->
                    <div _ngcontent-iridium-us-c32="" class="program-pricing ng-star-inserted">
                        <div _ngcontent-iridium-us-c32="" class="col col-1">Prix correspondant</div>
                        @foreach($formation->offers as $offer)
                        <div _ngcontent-iridium-us-c32="" class="col col-2">
                            <!---->
                            <!---->
                            <p _ngcontent-iridium-us-c32="" class="price ng-star-inserted">{{number_format($offer->amount)}}</p>
                            <p _ngcontent-iridium-us-c32="" class="ng-star-inserted">par mois</p>
                        </div>
                        @endforeach

                    </div>
                    <div _ngcontent-iridium-us-c32="" class="program-pricing ng-star-inserted">
                        <div _ngcontent-iridium-us-c32="" class="col col-1"></div>
                        @foreach($formation->offers as $offer)
                        <div _ngcontent-iridium-us-c32="" class="col col-2">
                            <!---->
                            <!---->
                            @auth
                            <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" data-toggle="modal" data-target="#enrolling{{$offer->id}}">S'inscrire maintenant</a>
                            @endauth
                            @guest
                            <a _ngcontent-c101="" class="button--primary mb-1 center ng-star-inserted" data-toggle="modal" data-target="#inscription{{$offer->id}}">S'inscrire maintenant</a>
                            @endguest
                        </div>
                        @endforeach

                    </div>
                    <!---->
                </ir-experiment>
            </div>
        </div>
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
    </ir-canonical-degree-nd-advantages>
</div>

<div style="display:none;" id="newoffres" _ngcontent-iridium-us-c48="" class="newoffres price-cards">
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
        <div _ngcontent-iridium-us-c48="" class="price"><span _ngcontent-iridium-us-c48="" class="price__payable">{{$offer->amount}}</span><span _ngcontent-iridium-us-c48="" class="price__label">
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
