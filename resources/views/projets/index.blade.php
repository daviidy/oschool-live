@extends( Auth::user()->type2 == "teacher" ? 'layouts.menu-dashboard-teacher' : 'layouts.menu-dashboard-default')

@section('content')

<style media="screen">
  /*! CSS Used from: https://www.udacity.com/styles.cd049525371f607387d9.css */
@media (max-width:767px){
.hidden-sm-down{display:none!important;}
}
@media (min-width:768px){
.hidden-md-up{display:none!important;}
}
@media (max-width:991px){
.hidden-md-down{display:none!important;}
}
.left{margin-left:0!important;}
.right{margin-right:0!important;}
.mb-0{margin-bottom:0!important;}
.mb-1{margin-bottom:.75rem!important;}
@media screen and (min-width:48rem){
.mb-1{margin-bottom:1.5rem!important;}
}
hr{box-sizing:content-box;overflow:visible;border:0;height:0;margin-top:0;margin-bottom:0;max-width:73.75rem;box-sizing:border-box;border-bottom:1px solid rgba(255,255,255,.3);border-top:1px solid rgba(0,0,0,.1);}
.blue{color:#02b3e4!important;}
.text-right{text-align:right!important;}
.uppercase{text-transform:uppercase;}
.capitalize{text-transform:capitalize;}

.button--primary{display:block;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-align:center;white-space:nowrap;text-decoration:none;vertical-align:middle;height:3rem;padding:0 .5rem;text-transform:uppercase;font-weight:600;font-size:1.5rem;line-height:2.625rem;-webkit-font-smoothing:antialiased;border-radius:.25rem;letter-spacing:.125rem;transition:.3s;}
.button--primary{box-shadow:8px 10px 20px 0 rgba(46,61,73,.15);}
.button--primary:hover{box-shadow:2px 4px 8px 0 rgba(46,61,73,.2);}
.button--primary{width:13.75rem;color:#fff;background-color:#02b3e4;border:.125rem solid transparent;}
.button--primary:focus,.button--primary:hover{outline:0;color:#fff;border-color:transparent;background-color:#029fcb;}
/*! CSS Used from: Embedded */
*[_ngcontent-c23],[_ngcontent-c23]:after,[_ngcontent-c23]:before{box-sizing:border-box;}
.row[_ngcontent-c23]:after{clear:both;}
.row[_ngcontent-c23]{margin-left:-15px;margin-right:-15px;}
.row[_ngcontent-c23]:after,.row[_ngcontent-c23]:before{content:" ";display:table;}
.row.row-gap-medium[_ngcontent-c23]{margin:15px;}
.course-summary-card[_ngcontent-c23]{transition:opacity .3s ease-in;}

@media (max-width:767px){
.hidden-sm-down[_ngcontent-c27]{display:none!important;}
}
@media (min-width:768px){
.hidden-md-up[_ngcontent-c27]{display:none!important;}
}
@media (max-width:991px){
.hidden-md-down[_ngcontent-c27]{display:none!important;}
}
.card[_ngcontent-c27]{margin-top:0;margin-bottom:1.5rem;text-align:left;position:relative;background:#fff;box-shadow:5px 5px 25px 0 rgba(46,61,73,.2);border-radius:.375rem;transition:.3s;}
*[_ngcontent-c27],[_ngcontent-c27]::after,[_ngcontent-c27]::before{box-sizing:inherit;}
.card__inner--lower[_ngcontent-c27]::after,.card__inner--upper[_ngcontent-c27]::after{clear:both;content:"";display:table;}
.card__inner[_ngcontent-c27]{padding:2rem 2rem 0;}
.card__inner--upper[_ngcontent-c27]{display:flex;align-items:flex-start;padding-bottom:1.5rem;border-bottom:1px solid #dbe2e8;}
@media (max-width:48rem){
.card__inner--upper[_ngcontent-c27]{border:none;}
}
.card__inner--upper[_ngcontent-c27]:hover   a[_ngcontent-c27]{color:#02b3e4;}
.card__inner--lower[_ngcontent-c27]{line-height:2.5rem;}
.card__inner--lower[_ngcontent-c27]::after{clear:both;content:"";display:table;}
.card__inner--lower[_ngcontent-c27]   .expander[_ngcontent-c27]{font-weight:600;font-size:1.5rem;letter-spacing:.1rem;}
.card__inner--lower[_ngcontent-c27]   .expander[_ngcontent-c27]::before{content:'';background:url(https://www.udacity.com/assets/iridium/images/shared/nd-cards/icon-toggle-closed.svg) 50% no-repeat;height:1rem;line-height:1rem;position:relative;top:2px;width:.75rem;margin-right:.75rem;display:inline-block;transition:.5s;}
.card__inner--lower[_ngcontent-c27]   .level[_ngcontent-c27]{font-size:1.5rem;}
.card__inner--lower[_ngcontent-c27]   .left[_ngcontent-c27]{float:left;}
.card__inner--lower[_ngcontent-c27]   .right[_ngcontent-c27]{float:right;}
.card__inner[_ngcontent-c27]   .image_wrapper[_ngcontent-c27]{padding-left:0;padding-right:0rem;float:left;display:block;margin-right:1.69491525%;width:25%;}
.card__inner[_ngcontent-c27]   .image_wrapper[_ngcontent-c27]   .image-container[_ngcontent-c27]{padding-bottom:10.5rem;min-width:6.5rem;background-repeat:no-repeat;background-position:center;background-size:cover;border-radius:6px;box-shadow:1px 1px 7px #bcc9d4;border:0;position:relative;overflow:hidden;float:left;display:block;margin-right:1.69491525%;width:100%;}
.card__inner[_ngcontent-c27]   .image_wrapper[_ngcontent-c27]   .image-container[_ngcontent-c27]:last-child{margin-right:0;}
.card-wrapper[_ngcontent-c27]   .card__expander[_ngcontent-c27]{transition:max-height .5s ease-in-out;background-color:#fff;box-shadow:5px 5px 25px 0 rgba(46,61,73,.2);border-radius:0 0 .375rem .375rem;}
.card-wrapper.is-collapsed[_ngcontent-c27]   .card__expander[_ngcontent-c27]{overflow:hidden;width:100%;max-height:0;}
.card-wrapper[_ngcontent-c27]   hr[_ngcontent-c27]{border-top:1px solid #dbe2e8;margin:1.5rem 4rem;}
.card[_ngcontent-c27]   .category[_ngcontent-c27]{margin-top:0;font-weight:600;font-size:.75rem;line-height:1.5rem;color:#7d97ad;text-transform:none;display:inline-block;}
@media screen and (min-width:48rem){
.card[_ngcontent-c27]{margin-bottom:1.5rem;}
.card[_ngcontent-c27]   .category[_ngcontent-c27]{font-size:1.5rem;line-height:1.5rem;}
}
@media screen and (min-width:48rem) and (min-width:48rem){
.card[_ngcontent-c27]   .category[_ngcontent-c27]{font-size:1.4rem;line-height:1.5rem;}
}
.card-heading[_ngcontent-c27]{margin-top:0;margin-bottom:4.5rem;}
.card-heading[_ngcontent-c27]   a[_ngcontent-c27]{color:#2e3d49;font-weight:600;display:block;overflow:hidden;text-overflow:ellipsis;line-height:3.6rem;max-height:4.8rem;}
.card-heading[_ngcontent-c27]   a[_ngcontent-c27]:hover{color:#02b3e4;}
.card-content[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:74.57627119%;}
.card-content[_ngcontent-c27]:last-child{margin-right:0;}
@media (max-width:62rem){
.card-content[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:100%;}
.card-content[_ngcontent-c27]:last-child{margin-right:0;}
}
.card__expander[_ngcontent-c27]{background:linear-gradient(to top left,#f7f7f7,#eafbff);}
.card__expander--summary[_ngcontent-c27]{font-size:1.5rem;padding:1.5rem 4rem 0;}
.card__expander--details[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:100%;display:flex;justify-content:space-between;padding:0 4rem 1.5rem;}
.card__expander--details[_ngcontent-c27]:last-child{margin-right:0;}
.card__expander--details[_ngcontent-c27]   .btn[_ngcontent-c27]{width:15rem;height:3.5rem;line-height:3.3rem;color:#fff;background-color:#02b3e4;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]{display:flex;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   h4[_ngcontent-c27]{font-size:1.5rem;text-transform:capitalize;margin-top:0;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   div[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:49.15254237%;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   div[_ngcontent-c27]:last-child{margin-right:0;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   span[_ngcontent-c27]{font-size:1.5rem;color:#2e3d49;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   span.truncate-content[_ngcontent-c27]{max-height:3rem;display:block;overflow-y:hidden;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   .level[_ngcontent-c27]   span[_ngcontent-c27]:after{content:''!important;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   .skills[_ngcontent-c27] ~ .level[_ngcontent-c27]{margin-top:1.4rem;}
.card[_ngcontent-c27]   h4[_ngcontent-c27]{margin-bottom:0;}
.pointer[_ngcontent-c27]{cursor:pointer;}
.course-level[_ngcontent-c27]{width:.8rem;height:.8rem;background-size:contain;display:inline-block;vertical-align:middle;background-repeat:no-repeat;margin-right:.5rem;}
.course-level-beginner[_ngcontent-c27]{background-image:url(https://www.udacity.com/assets/iridium/images/svgs/beginner.svg);}
.nanodegree-card   [_nghost-c27]   .image-overlay[_ngcontent-c27]{position:absolute;float:left;display:block;margin-right:1.69491525%;width:100%;height:100%;background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/nanodegree-icon.png);background-repeat:no-repeat;background-position:.5rem .5rem;}
.nanodegree-card   [_nghost-c27]   .image-overlay[_ngcontent-c27]:last-child{margin-right:0;}
@media (max-width:48rem){
.card[_ngcontent-c27]   .mobile-icon[_ngcontent-c27]{display:inline-block;height:.8rem;width:1.5rem;margin-right:.2rem;background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/course-icon-mobile.svg);background-position:center;background-size:contain;background-repeat:no-repeat;vertical-align:middle;}
.nanodegree-card   [_nghost-c27]   .mobile-icon[_ngcontent-c27]{background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/nanodegree-icon-mobile.svg);}
}
.nanodegree-card:nth-child(3n+1)   [_nghost-c27]   .image-overlay[_ngcontent-c27]{background-color:rgba(82,92,101,.6);}
.tag[_ngcontent-c27]{float:right;text-align:center;font-size:.8125rem;line-height:1.5rem;padding:.375rem .75rem;letter-spacing:.125rem;border-radius:.25rem;text-transform:uppercase;font-weight:600;}
@media screen and (min-width:48rem){
.tag[_ngcontent-c27]{font-size:1.4rem;line-height:1.5rem;}
}
@media screen and (max-width:20rem){
.tag[_ngcontent-c27]{background:0 0;box-shadow:none;margin:0;}
}
.tag--new[_ngcontent-c27]{color:#6854c5;height: 20px;}





/*pour le cours recommandé*/

/*! CSS Used from: http://localhost:8000/dashboard/lib/bootstrap/css/bootstrap.min.css */

.col-lg-8{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:1200px){
.col-lg-8{float:left;}
.col-lg-8{width:66.66666667%;}
}
/*! CSS Used from: http://localhost:8000/dashboard/lib/font-awesome/css/font-awesome.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-info:before{content:"\f129";}
/*! CSS Used from: http://localhost:8000/dashboard/css/style.css */
@media print{
*,:after,:before{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:focus{outline:none;}
*,:after,:before{box-sizing:border-box;}
a,a:hover,a:focus{text-decoration:none;outline:none;}
::selection{background:#4D90CC;color:#fff;}
::-moz-selection{background:#4D90CC;color:#fff;}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
a{text-decoration:none;}
*,*::before,*::after{box-sizing:inherit;}
.col-lg-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}
div,span,h3,a,img,i{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}

:-webkit-input-placeholder{opacity:1;}
:-moz-placeholder{opacity:1;}
:-ms-input-placeholder{opacity:1;}
.padding-left{float:left;width:100%;}
.emply-resume-thumb{display:table-cell;vertical-align:top;width:100px;}
.emply-resume-thumb img{float:left;width:100%;-webkit-border-radius:8px;-moz-border-radius:8px;-ms-border-radius:8px;-o-border-radius:8px;border-radius:8px;}
.emply-resume-info{display:table-cell;vertical-align:middle;padding-left:30px;}
.emply-resume-sec{float:left;width:100%;}
.emply-resume-list{float:left;width:100%;display:table;padding:30px 0;border-bottom:1px solid #edeff7;position:relative;padding-left:30px;background-color:#fff;}
.emply-resume-info > h3{float:left;width:100%;font-family:Open Sans;font-size:15px;color:#202020;margin:0;}
.emply-resume-info > span{float:left;width:100%;font-size:13px;color:#202020;margin-top:7px;}
.emply-resume-info > span i{font-style:normal;color:#4D90CC;}
.emply-resume-list:last-child{margin-bottom:60px;border-bottom-color:#ffffff;}
.shortlists{display:table-cell;vertical-align:middle;}
.shortlists > a{float:left;font-family:Open Sans;font-size:13px;color:#4D90CC;border:2px solid #4D90CC;width:150px;height:40px;padding-left:30px;text-align:left;line-height:35px;padding-right:20px;-webkit-border-radius:21px;-moz-border-radius:21px;-ms-border-radius:21px;-o-border-radius:21px;border-radius:21px;cursor:pointer;margin-right:40px;}
.shortlists > a i{float:right;line-height:33px;font-size:13px;}
.shortlists > a:hover{background:#4D90CC;color:#ffffff;}
*:focus{outline:0;}
.emply-resume-list:hover{border-color:#ffffff;-webkit-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-moz-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-ms-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-o-box-shadow:0px 0px 30px rgba(0,0,0,0.1);box-shadow:0px 0px 30px rgba(0,0,0,0.1);margin-top:0px;position:relative;z-index:12;}
.emply-resume-list,.shortlists > a{-webkit-transition:all 0.4s ease 0s;-moz-transition:all 0.4s ease 0s;-ms-transition:all 0.4s ease 0s;-o-transition:all 0.4s ease 0s;transition:all 0.4s ease 0s;}
@media (max-width:980px){
.column{float:left;width:100%;margin-top:50px;}
.padding-left{padding:0;}
.emply-resume-list{padding-left:0px;}
}
@media (max-width:767px){
.emply-resume-list{width:100%;}
.emply-resume-thumb{display:inherit;float:left;vertical-align:inherit;}
.emply-resume-info{display:inherit;vertical-align:inherit;}
.shortlists{display:inherit;float:left;vertical-align:inherit;padding-left:30px;margin-top:5px;}
.emply-resume-sec{overflow-x:scroll;overflow-y:hidden;}
}
*,*::before,*::after{box-sizing:border-box;}
h3{margin-top:0;margin-bottom:0.5rem;}
img{vertical-align:middle;border-style:none;}
h3{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h3{font-size:1.75rem;}
.col-lg-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-lg-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
img{page-break-inside:avoid;}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
}








</style>


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h2 style="margin: 2rem;"><i class="fa fa-angle-right"></i> Liste de vos projets</h2>

    <h3>Cours recommandé pour valider le parcours</h3>

    <div class="col-lg-8 column">
      <div class="padding-left">
        <div class="emply-resume-sec">
          @foreach(Auth::user()->formations as $formation)
            @if($formation->nom == "Développeur Web Junior")
              <div class="emply-resume-list">
                <div class="emply-resume-thumb">
                  <img src="/avatars/courses/{{$formation->image}}" alt="">
                </div>
                <div class="emply-resume-info">
                  <h3><a target="_blank" href="https://oschool.ci/course/formation-complete-developpeur-web-2/" title="">{{$formation->nom}}</a></h3>
                  <span><i>{{$formation->projets->count()}}</i> projets</span>
                  @if(Auth::user()->type2 != 'teacher' && Auth::user()->type3 != 'admin')
                  @foreach(Auth::user()->formations as $formation)
                    @foreach($formation->projets as $key => $projet)
                      @if (!Auth::user()->worked($projet->id))
                        @if($key == 0)
                    <p><i class="fa fa-laptop"></i>Projet en cours: {{$projet->titre}}</p>
                        @endif
                      @endif
                    @endforeach
                  @endforeach
                  @endif
                </div>
                <div class="shortlists">
                  <a target="_blank" href="https://oschool.ci/course/formation-complete-developpeur-web-2/  " title="">Voir le cours <i class="fa fa-info"></i></a>
                </div>
              </div><!-- Emply List -->
            @endif
          @endforeach

        </div>
      </div>
    </div>




    <div class="row mt">
      <div class="col-lg-8">

                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->projets as $projet)
                    @if(count($projet->etatprojets))
                      @foreach($projet->etatprojets as $etatprojet)
                        @if($etatprojet->user_id == Auth::user()->id)
                          @include('includes.etatprojet')
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                @endforeach

                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->projets as $projet)
                  @if (!Auth::user()->worked($projet->id))
                    @include('includes.projet')
                  @endif
                  @endforeach
                @endforeach
      </div>
      <!-- /col-lg-4 -->
    </div>
    <!-- /row -->



<!--

    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Historique</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Titre du projet</th>
                  <th>Livrables</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->projets as $projet)
                <tr>
                  <td><a target="_blank" href="{{$projet->enonce}}">{{$projet->titre}}</a></td>
                  <td><a href="{{url('projets', $projet)}}">Envoyez vos livrables</a></td>
                </tr>
                @endforeach
                @endforeach
              </tbody>
            </table>
          </section>
        </div>
        <!-- /content-panel
      </div>
      <!-- /col-lg-4
    </div>
    <!-- /row -->


<!--

    @if (!Auth::user()->isTeacher() && !Auth::user()->isAdmin())
    <!-- LISTE DES ETUDIANTS
    <div id="projets">
       <div class="container">
          <h2>Etats de mes projets </h2>
          <table class="table">
            <thead>
              <tr>
                <th>Nom du projet</th>
                <th>Livrables</th>
                <th>Commentaires</th>
                <th>Statut</th>
              </tr>
            </thead>
            <tbody>
              @foreach(Auth::user()->etatprojets as $etatprojet)
              <tr>
                <td>{{$etatprojet->projet}}</td>
                <td> <a target="_blank" href="{{$etatprojet->livrables}}"> Voir vos livrables</a> </td>
                <td> <a data-toggle="modal" data-target="#myModal{{$etatprojet->id}}" href="#">Voir les commentaires</a></td>
                <td>{{$etatprojet->statut}}</td>
                <!-- The Modal
                <div class="modal fade" id="myModal{{$etatprojet->id}}">
                <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header
                <div class="modal-header">
                <h4 style="font-size: 24px;" class="modal-title">Commentaire sur le projet</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body
                <div class="modal-body">
                  <div class="container">
                      {!! $etatprojet->commentaire !!}
                  </div>
                </div>

                <!-- Modal footer
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>

                </div>
                </div>
                </div>

                <!--end modal
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
                     <!-- LISTE DES ETUDIANTS FIN
    @endif

  -->



  </section>
  <!-- /wrapper -->
</section>


@endsection
