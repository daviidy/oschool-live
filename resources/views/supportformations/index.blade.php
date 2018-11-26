@extends( Auth::user()->type2 == "teacher" ? 'layouts.menu-dashboard-teacher' : 'layouts.menu-dashboard-default')


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
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->supportformations->sortBy('titre') as $supportformation)
                <tr>
                  <td><a target="_blank" href="{{$supportformation->lien}}">{{$supportformation->titre}}</a></td>
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
