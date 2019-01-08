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
      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

@endsection
