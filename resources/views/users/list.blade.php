@extends('layouts.menu-dashboard-admin')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->

<section id="main-content">
  <section class="wrapper">
    <div class="row">

      <div class="col-lg-4 col-xs-12">
        <div id="text" onclick="tri()" style="margin-top: 10rem; height:auto;" class="home_button"><a style="line-height:20px;" href="#">Voir seulement les mails</a></div>
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
                  <th class="blind">ID</th>
                  <th class="blind">Nom</th>
                  <th class="numeric">Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($students as $student)
                <tr>
                  <td class="blind">{{$student->id}}</td>
                  <td class="blind"><a href="{{url('users', $student)}}">{{$student->name}}</a></td>
                  <td class="numeric">{{$student->email}}</td>
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
                  <th>ID</th>
                  <th>Nom</th>
                  <th class="numeric">Email</th>
                  <th class="numeric">Places d'étudiants restantes</th>
                </tr>
              </thead>
              <tbody>
                @foreach($teachers as $teacher)
                <tr>
                  <td>{{$teacher->id}}</td>
                  <td><a href="{{url('users', $teacher)}}">{{$teacher->name}}</a></td>
                  <td class="numeric">{{$teacher->email}}</td>
                  <td class="numeric">{{$teacher->max_students - $teacher->students->count()}}</td>
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
