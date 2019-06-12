@extends((Auth::user()->type4 == "partner") ? "layouts.menu-dashboard-partner" : "layouts.menu-dashboard-admin")

@section('content')



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
.black-90{color:rgba(0,0,0,.9);background: white;}
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

  <h3><i class="fa fa-angle-right"></i> Liste des formations en collaboration avec Oschool</h3>
  <div class="row mt">

    <div class="col-sm-12">



@if(Auth::user()->type3 == "admin")

@foreach($offers as $offer)

<div class="
        pv3 ph3-ns w-third-l w-50-m w-100 dib
        css-0
      ">
<div class="
        flex flex-grow-1 justify-between flex-column black-90


      ">
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
                  "><img src="http://res.publicdomainfiles.com/pdf_view/2/13489777212478.png"
                alt="illustration for GraphQL Data in React with Apollo Client" class="w-100 h-100"></div>
          </div>

          <div class="
              flex flex-shrink-0 items-center w-100 overfow-hidden mt2
              css-73nay0
            ">
            <h3 class="
              tc sans-serif fw5 black-90 no-underline ma0 overflow-hidden w-100 ph4
              css-hxrs45
            "><a href="#">{{$offer->name}}</a></h3>
          </div>
        </div>
      </div>
      <div class="
        relative
        css-1eu6dtl
      ">
        <div class="flex items-center ph3 pb3 pt2">
          <div class="flex-grow-1 flex items-center"><a href="{{ route('offers.edit', $offer) }}"><img src="https://1001freedownloads.s3.amazonaws.com/vector/thumb//Anonymous_Pencil_icon.png" alt="Nik Graf" title="Nik Graf" class="
                db br-pill
                css-1i4zz36
              "></a>

                  <form action="{{ route('offers.destroy', $offer) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                      <button class="fa fa-trash" type="submit"></button>
                  </form>
            <div class="ml2">
              <div class="
                  black o-70 lh-title fw4 tl
                  css-l8qto0
                ">Oschool</div>
              <div class="
                    black-60 fw4 lh-solid mt1
                    css-1qxtz39
                  ">
                <div class="lh-solid flex items-center">{{$offer->characteristics->count()}}
                  <!-- --> caractéristiques<span class="flex items-center">&nbsp;·&nbsp;
                    <!-- --23m--></span></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endforeach

{{ $offers->links() }}

@endif

</div>
</div>
</section>
<!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

@endsection
