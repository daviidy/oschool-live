@extends('layouts.menu-dashboard-admin')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->


<style media="screen">
/*! CSS Used from: https://www.udacity.com/styles.afb9dff948c2d61e84c9.css */
section{display:block;}
input{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
input{overflow:visible;}
*,::after,::before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
*[_ngcontent-c18],[_ngcontent-c18]::after,[_ngcontent-c18]::before{box-sizing:inherit;}
section[_ngcontent-c18]{max-width:100%;margin-left:auto;margin-right:auto;}
section[_ngcontent-c18]::after{clear:both;content:"";display:table;}
section[_ngcontent-c18]{display:block;}
input[_ngcontent-c18]{color:inherit;font:inherit;margin:0;}
input[_ngcontent-c18]::-moz-focus-inner{border:0;padding:0;}
*[_ngcontent-c18],[_ngcontent-c18]:after,[_ngcontent-c18]:before{box-sizing:border-box;}
input[_ngcontent-c18]{font-family:inherit;font-size:inherit;line-height:inherit;}
.col-sm-12[_ngcontent-c18]{position:relative;min-height:1px;padding-left:15px;padding-right:15px;}
@media (min-width:768px){
.col-sm-12[_ngcontent-c18]{float:left;}
.col-sm-12[_ngcontent-c18]{width:100%;}
}
.adjust-search[_ngcontent-c18]   input[type=text][_ngcontent-c18]{margin-bottom: 2rem !important;margin-top: 3rem !important;padding:1.75em 1.75em;width:100%;border:1px solid #dbe2e8;color:#2e3d49;background:url(https://www.udacity.com/assets/iridium/images/course-catalog/search.svg) calc(100% - 1.4em) center/1.6rem no-repeat #fff;max-width:70rem;outline:0;margin:0 auto;height:3.5rem;font-size:1.5rem;border-radius:8px;display:block;box-shadow:5px 5px 25px 0 rgba(46,61,73,.2);}

</style>

<section id="main-content">
  <section class="wrapper">
    <div class="row">

      <section _ngcontent-c18="">
          <div _ngcontent-c18="">
              <div _ngcontent-c18="" class="col-sm-12 adjust-search">
                <input id="search" _ngcontent-c18="" placeholder="Chercher des utilisateurs" type="text" class="ng-pristine ng-valid ng-touched">
              </div>
          </div>
          <h3 align="center">Total des résultats : <span id="total_records"></span></h3>
      </section>

      <div class="col-lg-4 col-xs-12">
        <div id="text" onclick="tri()" style="margin-top: 2rem; height:auto;" class="home_button"><a style="line-height:20px;" href="#">Voir seulement les mails</a></div>
      </div>

      <div class="col-lg-4 col-xs-12">
        <div id="text" style="background-color: #77A930 !important; margin-top: 2rem; height:auto;" class="home_button"><a style="line-height:20px;" href="#" data-toggle="modal" data-target="#popup2">Voir les utilisateurs par formation</a></div>
      </div>

    </div>
    <h3><i class="fa fa-angle-right"></i> Liste des utilisateurs</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Etudiants</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th class="blind">Nom</th>
                  <th class="numeric">Email</th>
                  <th class="blind">Type2</th>
                  <th class="blind">Type3</th>
                  <th class="blind">Type4</th>
                  <th class="blind">Statut</th>
                </tr> 
              </thead>
              <tbody id="students">
                @foreach($students as $student)
                <tr>
                  <td class="blind"><a href="{{url('users', $student)}}">{{$student->name}}</a></td>
                  <td class="numeric">{{$student->email}}</td>
                  <td class="blind">{{$student->type2}}</td>
                  <td class="blind">{{$student->type3}}</td>
                  <td class="blind">{{$student->type4}}</td>
                  <td class="blind">{{$student->statut}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </section>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-lg-4 -->
    </div>
    <!-- /row -->

    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Formateurs</h4>
          <section id="no-more-tables">
            <table class="table table-bordered table-striped table-condensed cf">
              <thead class="cf">
                <tr>
                  <th class="blind">Nom</th>
                  <th class="numeric">Email</th>
                  <th class="blind">Places d'étudiants restantes</th>
                </tr>
              </thead>
              <tbody>
                @foreach($teachers as $teacher)
                <tr>
                  <td class="blind"><a href="{{url('users', $teacher)}}">{{$teacher->name}}</a></td>
                  <td class="numeric">{{$teacher->email}}</td>
                  <td class="blind">{{$teacher->max_students - $teacher->students->count()}}</td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </section>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
    <!-- /row -->
  </section>
  <!-- /wrapper -->
</section>

<script type="text/javascript">

function tri() {


  var elems = document.getElementsByClassName('blind');
  for (var i=0;i<elems.length;i+=1){
    elems[i].style.display = 'none';
  }
}

</script>



@endsection


<!-- The Modal -->
<div class="modal fade" id="popup2">
<div class="modal-dialog">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 style="font-size: 24px;" class="modal-title">Formation concernée</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
  <form method="post" action="{{url('formation')}}">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="">Pour quelle formation ?</label>
    <select class="js-select3" name="formation">
      @foreach($formations as $formation)
        <option value="{{ $formation->nom }}">{{ $formation->nom }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
</div>

</div>
</div>
</div>

<!--end modal-->
