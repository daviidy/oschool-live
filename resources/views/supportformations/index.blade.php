@extends('layouts.menu-dashboard-teacher')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Les documents de formation</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Liste</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Titre du document</th>
                  <th>Lien</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->supportformations->sortBy('titre') as $supportformation)
                <tr>
                  <td><a href="#">{{$supportformation->titre}}</a></td>
                  <td> <a target="_blank" href="{{$supportformation->lien}}">Voir le document</a></td>
                </tr>
                @endforeach
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
