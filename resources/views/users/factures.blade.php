@extends('layouts.menu-dashboard-teacher')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
@auth
@if(Auth::user()->isTeacher())
<section id="main-content">
  <section class="wrapper">
    <img width="300" src="/dashboard/img/asset.png" alt="">
    <h3><i class="fa fa-angle-right"></i> Votre rapport d'activités</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Historique</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Mois</th>
                  <th>Montant</th>
                  <th>Expiration de l'abonnement</th>
                  <th>Formation concernée</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->achats->sortBy('created_at') as $achat)
                <tr>
                  <td>{{ Carbon\Carbon::parse($achat->created_at)->format('d-m-Y H:i') }}</td>
                  <td>{{ $achat->montant }} FCFA</td>
                  <td><span style="background-color: #FFFF00">{{ Carbon\Carbon::parse(Auth::user()->fin_abonnement)->format('d-m-Y H:i') }}</span></td>
                  <td>{{ $achat->formation }}</td>
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

@endif
@endauth





@endsection
