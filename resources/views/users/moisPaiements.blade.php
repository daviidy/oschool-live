@extends((Auth::user()->type4 == "partner") ? "layouts.menu-dashboard-partner" : "layouts.menu-dashboard-admin")

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
@auth
@if(Auth::user()->isAdmin())
<section id="main-content">
  <section style="margin-top:15rem;" class="wrapper">


    <div class="row">

      <div class="col-lg-6">
        <img width="200" src="https://code.oschool.ci/img/page-parcours/congrats.svg" alt="">
      </div>

      <div class="col-lg-6">
        <form method="post" enctype="multipart/form-data" action="/moisPaiements">
          {{ csrf_field() }}

          <label for="">Choisir un mois</label>
          <select class="selectpicker" data-style="btn-primary" data-max-options="2" name="month">
            <option value="01">Janvier</option>
            <option value="02">Février</option>
            <option value="03">Mars</option>
            <option value="04">Avril</option>
            <option value="05">Mai</option>
            <option value="06">Juin</option>
            <option value="07">Juillet</option>
            <option value="08">Août</option>
            <option value="09">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
          </select> <br><br>

            <label for="">Choisir une année</label>
            <select class="selectpicker" data-style="btn-primary" data-max-options="2" name="year">
              <option value="2018">2018</option>
              <option value="2019">2019</option>
            </select><br><br>

            <button style="background:#F55F44;" class="home_button" type="submit" name="button"> <a>Envoyer</a> </button>

          </form>
      </div>

    </div>

    <h3><i class="fa fa-angle-right"></i> Rapport des paiements</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Mois: {{$mois}}-{{$an}}</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Utilisateur</th>
                  <th>Email</th>
                  <th>Formation</th>
                  <th>Montant</th>
                </tr>
              </thead>
              <tbody>
                @foreach($achats as $achat)
                <tr>
                  <td>{{ $achat->date }}</td>
                  <td> <a href="{{url('users', $achat->user_id)}}">{{$achat->prenoms}}</a></td>
                  <td>{{$achat->email}}</td>
                  <td>{{ $achat->formation }}</td>
                  <td>{{ $achat->montant }} FCFA</td>
                </tr>
                @endforeach

                <tr>
                  <td></td>
                  <td></td>
                  <td>Total</td>
                  <td> <span style="background-color: #FFFF00"><strong>{{$total}} FCFA</strong></span> </td>
                </tr>

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

@if(Auth::user()->type4 == "partner")
<section id="main-content">
  <section style="margin-top:15rem;" class="wrapper">


    <div class="row">

      <div class="col-lg-6">
        <img width="200" src="https://code.oschool.ci/img/page-parcours/congrats.svg" alt="">
      </div>

      <div class="col-lg-6">
        <form method="post" enctype="multipart/form-data" action="/moisPaiements">
          {{ csrf_field() }}

          <label for="">Choisir une formation</label>
          <select class="selectpicker" data-style="btn-primary" data-max-options="2" name="formation">
            @foreach(Auth::user()->formations as $formation)
              <option value="$formation->nom">{{$formation->nom}}</option>
            @endforeach
          </select><br><br>

          <label for="">Choisir un mois</label>
          <select class="selectpicker" data-style="btn-primary" data-max-options="2" name="month">
            <option value="01">Janvier</option>
            <option value="02">Février</option>
            <option value="03">Mars</option>
            <option value="04">Avril</option>
            <option value="05">Mai</option>
            <option value="06">Juin</option>
            <option value="07">Juillet</option>
            <option value="08">Août</option>
            <option value="09">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
          </select> <br><br>

            <label for="">Choisir une année</label>
            <select class="selectpicker" data-style="btn-primary" data-max-options="2" name="year">
              <option value="2018">2018</option>
              <option value="2019">2019</option>
            </select><br><br>

            <button style="background:#F55F44;" class="home_button" type="submit" name="button"> <a>Envoyer</a> </button>

          </form>
      </div>

    </div>

    <h3><i class="fa fa-angle-right"></i> Rapport des paiements</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Mois: {{$mois}}-{{$an}}</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Utilisateur</th>
                  <th>Formation</th>
                  <th>Montant</th>
                </tr>
              </thead>
              <tbody>
                @foreach($achats as $achat)
                <tr>
                  <td>{{ $achat->date }}</td>
                  <td>{{$achat->prenoms}}</td>
                  <td>{{ $achat->formation }}</td>
                  <td>{{ $achat->montant }} FCFA</td>
                </tr>
                @endforeach

                <tr>
                  <td></td>
                  <td></td>
                  <td>Total</td>
                  <td> <span style="background-color: #FFFF00"><strong>{{$total}} FCFA</strong></span> </td>
                </tr>

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
