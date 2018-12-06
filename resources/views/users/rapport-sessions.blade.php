@extends('layouts.menu-dashboard-admin')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
@auth
@if(Auth::user()->isAdmin())
<section id="main-content">
  <section style="margin-top: 15rem;" class="wrapper">

    <h3><i class="fa fa-angle-right"></i> Rapport de facturation des professeurs</h3>

    <div class="row">

      <div class="col-lg-6">
        <img src="https://images.vexels.com/media/users/3/128876/isolated/preview/64675632e71d2e19ad09b5797b07ae59-teacher-profession-cartoon-svg-by-vexels.png" alt="">
      </div>

      <div class="col-lg-6">
        <form method="post" enctype="multipart/form-data" action="/rapportMoisProf">
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

  </section>
  <!-- /wrapper -->
</section>

@endif
@endauth





@endsection
