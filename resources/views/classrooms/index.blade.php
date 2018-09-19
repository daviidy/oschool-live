@extends('layouts.menu-dashboard-teacher')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Liste des progressions de {{$user->name}}</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Progressions</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Section</th>
                  <th>Chapitre</th>
                  <th class="numeric">Statut</th>
                  <th class="numeric">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($classrooms as $classroom)
                <tr>
                  <td>{{$classroom->date}}</td>
                  <td><a href="#">{{$classroom->etudiant}}</a></td>
                  <td class="numeric">{{$classroom->formateur}}</td>
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
  </section>
  <!-- /wrapper -->
</section>



@endsection
