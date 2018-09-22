@extends('layouts.menu-dashboard-teacher')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Liste de vos sessions</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Historique</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Etudiant</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->sessions as $classroom)
                <tr>
                  <td><a href="#">{{$classroom->etudiant}}</a></td>
                  <td>{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y') }}</td>
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
