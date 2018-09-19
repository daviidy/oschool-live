@extends('layouts.menu-dashboard-teacher')

@section('content')

<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row mt">

      <div class="col-sm-12">
        <section class="panel">
          <header class="panel-heading wht-bg">
            <h4 class="gen-case" style="text-align: center;font-weight: bold;">
                TA PROGRESSION
            </h4>
          </header>
          <div class="panel-body minimal">
            <div class="mail-option">
              <div class="chk-all">
                <div class="pull-left mail-checkbox">
                  <input type="checkbox" class="">
                </div>
                <div class="btn-group">
                  <a data-toggle="dropdown" href="#" class="btn mini all">
                    All
                    </a>
                </div>
              </div>
            </div>
            <div class="table-inbox-wrap ">
              <table class="table table-inbox table-hover">
                <tbody>
                  <tr class="">
                    <td class="inbox-small-cells">

                    </td>
                    <td class="inbox-small-cells" style="font-weight: bold;">Section</td>
                    <td class="view-message  dont-show" style="font-weight: bold;">Chapitre</td>
                    <td class="view-message " style="font-weight: bold;">Statut</td>
                  </tr>
                  @foreach($user->progressions as $progression)
                  <tr class="unread">
                    <td class="inbox-small-cells">
                      <input disabled type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells">{{$progression->section}}</td>
                    <td class="view-message dont-show"> {{$progression->session}} </td>
                    <td class="view-message">{{$progression->statut}}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

@endsection
