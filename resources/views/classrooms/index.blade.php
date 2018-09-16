@extends('layouts.menu-dashboard-teacher')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Liste de vos séances de cours</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Sessions</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Etudiant</th>
                  <th class="numeric">Formateur</th>
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
