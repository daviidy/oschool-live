@extends((Auth::user()->type2 == "teacher") ? "layouts.menu-dashboard-teacher" : "layouts.menu-dashboard-default")

@section('content')



<style media="screen">

.h5{margin-top:0;margin-bottom:1.5rem;color:#2e3d49;-webkit-font-smoothing:antialiased;}
@media screen and (min-width:48rem){
.h5{margin-bottom:1.5rem;}
}
.h5{font-size:1rem;line-height:1.75rem;font-weight:600;}
@media screen and (min-width:48rem){
.h5{font-size:1.5rem;line-height:2rem;}
}
.button--primary{display:block;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-align:center;white-space:nowrap;text-decoration:none;vertical-align:middle;height:3rem;padding:0 .5rem;text-transform:uppercase;font-weight:600;font-size:1.8125rem;line-height:2.625rem;-webkit-font-smoothing:antialiased;border-radius:.25rem;letter-spacing:.125rem;transition:.3s;}
.button--primary{box-shadow:8px 10px 20px 0 rgba(46,61,73,.15);}
.button--primary:hover{box-shadow:2px 4px 8px 0 rgba(46,61,73,.2);}
.button--primary{width:13.75rem;color:#fff;background-color:#02b3e4;border:.125rem solid transparent;}
.button--primary:focus,.button--primary:hover{outline:0;color:#fff;border-color:transparent;background-color:#029fcb;}
.button--primary.sm{width:17.25rem;}
/*! CSS Used from: Embedded */
*[_ngcontent-c26],[_ngcontent-c26]::after,[_ngcontent-c26]::before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
.mb-0[_ngcontent-c29]{margin-bottom:0!important;}
.green[_ngcontent-c29]{color:#15c26b!important;}
*[_ngcontent-c29],[_ngcontent-c29]::after,[_ngcontent-c29]::before{box-sizing:inherit;}
.card[_ngcontent-c29]{margin-top:0;margin-bottom:1.5rem;text-align:left;position:relative;background:#fff;box-shadow:5px 5px 25px 0 rgba(46,61,73,.2);border-radius:.375rem;transition:.3s;display:flex;flex-direction:column;padding:1.5rem 2.25rem;}
.card[_ngcontent-c29]:hover{box-shadow:2px 4px 8px 0 rgba(46,61,73,.2);}
@media screen and (min-width:48rem){
.card[_ngcontent-c29]{margin-bottom:1.5rem;flex-direction:row;align-items:center;}
}
.card[_ngcontent-c29]:last-child{margin-bottom:1.5rem;}
.item__left[_ngcontent-c29]{flex-shrink:0;width:10rem;}
@media screen and (min-width:62rem){
.item__left[_ngcontent-c29]{width:85rem;}
}
.item__main[_ngcontent-c29]{flex-grow:1;padding:1rem 0;}
@media screen and (min-width:48rem){
.item__main[_ngcontent-c29]{padding:0 2rem;}
.item__right[_ngcontent-c29]{display:flex;flex-direction:column;align-items:center;}
}
.degree-title[_ngcontent-c29]{margin-right:.5em;font-weight:700;font-size:1.5rem;color:#2e3d49;}
.degree-title__is-new[_ngcontent-c29]{display:inline-block;font-weight:700;}
</style>


<style media="screen">


  /*! CSS Used from: https://egghead.io/webpack/global-styles-245ef06590e9cc433ec1.css ; media=screen */
@media screen{
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
img{border-style:none;}
*,:after,:before{box-sizing:inherit;}
a{color:#4786ff;}
.br3{border-radius:.5rem;}
.br-pill{border-radius:9999px;}
.br--top{border-bottom-right-radius:0;}
.br--top{border-bottom-left-radius:0;}
a,div,h2,h3{box-sizing:border-box;}
.db{display:block;}
.dib{display:inline-block;}
.sans-serif{font-family:-apple-system,BlinkMacSystemFont,avenir next,avenir,helvetica,helvetica neue,ubuntu,roboto,noto,segoe ui,arial,sans-serif;}
.fw4{font-weight:400;}
.fw5{font-weight:500;}
.h-100{height:100%;}
.pointer:hover{cursor:pointer;}
img{max-width:100%;}
.lh-solid{line-height:1;}
.lh-title{line-height:1.25;}
.lh-copy{line-height:1.5;}
.o-70{opacity:.7;}
.o-60{opacity:.6;}
.overflow-hidden{overflow:hidden;}
.relative{position:relative;}
.pb3{padding-bottom:1rem;}
.pt2{padding-top:.5rem;}
.pt4{padding-top:2rem;}
.pv3{padding-top:1rem;padding-bottom:1rem;}
.ph3{padding-left:1rem;padding-right:1rem;}
.ph4{padding-left:2rem;padding-right:2rem;}
.ma0{margin:0;}
.ml2{margin-left:.5rem;}
.mt1{margin-top:.25rem;}
.mt2{margin-top:.5rem;}
.mh1{margin-left:.25rem;margin-right:.25rem;}
.tl{text-align:left;}
.tc{text-align:center;}
.no-underline{text-decoration:none;}
.ttu{text-transform:uppercase;}
.f6{font-size:.875rem;}
.w-100{width:100%;}
.z-1{z-index:1;}
.flex{display:flex;}
.flex-column{flex-direction:column;}
.items-center{align-items:center;}
.self-center{align-self:center;}
.justify-center{justify-content:center;}
.justify-between{justify-content:space-between;}
.flex-grow-1{flex-grow:1;}
.flex-shrink-0{flex-shrink:0;}
.black-90{color:rgba(0,0,0,.9);}
.black-60{color:rgba(0,0,0,.6);}
.black{color:#000;}
.base-secondary{color:#141618;}
.dark-blue{color:#344055;}
.bg-white{background-color:#fff;}
@media screen and (min-width:40em){
.ph3-ns{padding-left:1rem;padding-right:1rem;}
}
@media screen and (min-width:40em) and (max-width:62em){
.w-50-m{width:50%;}
}
@media screen and (min-width:62em){
.w-third-l{width:33.33333%;}
}
::-moz-selection{color:#fff;background:#316aff;}
::selection{color:#fff;background:#316aff;}
.eh-shadow-1{box-shadow:0 5px 30px -15px rgba(0,0,0,.2);}
}
/*! CSS Used from: Embedded */
.css-quva1q{border-radius:5px;}
/*! CSS Used from: Embedded */
.css-imtqqp{height:500px;}
/*! CSS Used from: Embedded */
.css-135bq0n{height:270px;}
/*! CSS Used from: Embedded */
.css-14p7nc1{height:270px;border-radius:10px 10px 0 0;}
@media (min-width:545px){
.css-14p7nc1{height:270px;}
}
/*! CSS Used from: Embedded */
.css-19yvy3u{max-width:262px;padding:0 16px;width:100%;}
@media (min-width:545px){
.css-19yvy3u{max-width:262px;}
}
/*! CSS Used from: Embedded */
.css-128nlh6{font-size:13px;}
/*! CSS Used from: Embedded */
.css-73nay0{height:100px;}
/*! CSS Used from: Embedded */
.css-hxrs45{line-height:1.25;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;font-size:22px;max-height:85px;}
@media (min-width:545px){
.css-hxrs45{font-size:22px;max-height:85px;}
}
/*! CSS Used from: Embedded */
.css-1eu6dtl{padding-bottom:0;border-radius:none;overflow:visible;}
/*! CSS Used from: Embedded */
.css-1i4zz36{width:35px;height:35px;}
/*! CSS Used from: Embedded */
.css-l8qto0{font-size:15px;}
/*! CSS Used from: Embedded */
.css-1qxtz39{font-size:12px;}
/*! CSS Used from: Embedded */
.css-1n42eci{-webkit-flex-basis:4.5em;-ms-flex-preferred-size:4.5em;flex-basis:4.5em;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;}
/*! CSS Used from: Embedded */
.__react_component_tooltip{border-radius:3px;display:inline-block;font-size:13px;left:-999em;opacity:0;padding:8px 21px;position:fixed;pointer-events:none;transition:opacity 0.3s ease-out;top:-999em;visibility:hidden;z-index:999;}
.__react_component_tooltip:before,.__react_component_tooltip:after{content:"";width:0;height:0;position:absolute;}
.__react_component_tooltip.type-dark{color:#fff;background-color:#222;}
.__react_component_tooltip.type-dark.place-top:after{border-top-color:#222;border-top-style:solid;border-top-width:6px;}
.__react_component_tooltip.place-top{margin-top:-10px;}
.__react_component_tooltip.place-top:before{border-left:10px solid transparent;border-right:10px solid transparent;bottom:-8px;left:50%;margin-left:-10px;}
.__react_component_tooltip.place-top:after{border-left:8px solid transparent;border-right:8px solid transparent;bottom:-6px;left:50%;margin-left:-8px;}

</style>





<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row mt">

      <h2 style="text-align: center;">Votre progression</h5><br>
      <img style="display: block;margin-left: auto;margin-right: auto;width: 20%;" width="10%" src="/img/progression.png" alt="">




      <div class="col-sm-12">
        @foreach(Auth::user()->formations as $formation)
        @if($formation->nom == "Développeur Web Junior")

        <h3>Cours recommandé</h3>
          <div class="
                    pv3 ph3-ns w-third-l w-50-m w-100 dib
                    css-0
                  ">
            <div class="
                    flex flex-grow-1 justify-between flex-column black-90


                  "><a class="
                    no-underline db dark-blue z-1 bg-white eh-shadow-1 css-quva1q"
                    href="https://oschool.ci/course/formation-complete-developpeur-web-2/"
                    target="_blank"
                    aria-label="">
                <div class="
                      flex flex-grow-1 flex-column justify-between pointer relative tc
                      css-imtqqp
                    ">
                  <div class="
                      flex flex-column flex-grow-1 w-100 flex-shrink-0
                      css-135bq0n
                    ">
                    <div class="flex flex-column relative tc pt4">
                      <div class="
                              w-100 flex items-center justify-center overflow-hidden br--top br3
                              css-14p7nc1
                            ">
                        <div class="
                                self-center flex-shrink-0 flex items-center
                                css-19yvy3u
                              "><img src="/avatars/courses/{{$formation->image}}"
                            alt="illustration for GraphQL Data in React with Apollo Client" class="w-100 h-100"></div>
                      </div>
                      <h2 class="
                          f6 base-secondary fw4 o-60 lh-copy sans-serif ma0 ttu flex items-center justify-center flex-shrink-0
                          css-128nlh6
                        ">catégorie<span class="mh1">•</span>{{$formation->categorie->nom}}</h2>
                      <div class="
                          flex flex-shrink-0 items-center w-100 overfow-hidden mt2
                          css-73nay0
                        ">
                        <h3 class="
                          tc sans-serif fw5 black-90 no-underline ma0 overflow-hidden w-100 ph4
                          css-hxrs45
                        ">{{$formation->nom}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="
                    relative
                    css-1eu6dtl
                  ">
                    <div class="flex items-center ph3 pb3 pt2">
                      <div class="flex-grow-1 flex items-center"><img src="https://oschool.ci/wp-content/uploads/2017/05/medal.png" alt="Nik Graf" title="Nik Graf" class="
                            db br-pill
                            css-1i4zz36
                          ">
                        <div class="ml2">
                          <div class="
                              black o-70 lh-title fw4 tl
                              css-l8qto0
                            ">Oschool</div>
                          <div class="
                                black-60 fw4 lh-solid mt1
                                css-1qxtz39
                              ">
                            <div class="lh-solid flex items-center">{{$formation->projets->count()}}
                              <!-- --> projets<span class="flex items-center">&nbsp;·&nbsp;
                                <!-- --23m--></span></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </a></div>
          </div>
@endif
@endforeach











      <div class="col-sm-12">
        @if(Auth::user()->type2 == "teacher" || Auth::user()->statut == "OK")
        @foreach(Auth::user()->formations as $formation)
          @foreach($formation->progressions->sortBy('id') as $progression)
            @if(count($progression->etatprogressions))
              @foreach($progression->etatprogressions as $etatprogression)
                @if($etatprogression->user_id == Auth::user()->id)
                  @include('includes.etatprogression')
                @endif
              @endforeach
            @endif
          @endforeach
        @endforeach

        @foreach(Auth::user()->formations as $formation)
          @foreach($formation->progressions->sortBy('id') as $progression)
          @if (!Auth::user()->validated($progression->id))
            @include('includes.progression')
          @endif
          @endforeach
        @endforeach
        @endif
      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

@endsection
