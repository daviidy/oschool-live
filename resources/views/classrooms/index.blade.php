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
    <div class="row">

      <div class="col-lg-4 col-xs-12">
        <img width="300" src="/dashboard/img/classroom.png" alt="">
      </div>

      <div class="col-lg-4 col-xs-12">
        <div style="height:auto;" class="home_button"><a style="line-height:20px;" href="{{ route('classrooms.create') }}">Planifier une session</a></div>
      </div>

      <div class="col-lg-4 col-xs-12">
        <div style="height:auto; background:#F55F44;" class="home_button"><a style="line-height:20px;" href="{{ route('progressions.create') }}">Marquer une progression</a></div>
      </div>


    </div>

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
                  <th>Statut</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->sessions->sortBy('date') as $classroom)
                <tr>
                  <td><a href="{{url('users', $classroom->idEtudiant)}}">{{$classroom->etudiant}}</a></td>
                  <td> <a data-toggle="modal" data-target="#myModal{{$classroom->id}}" href="#">{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }}: voir le compte rendu</a></td>
                  <td style="display: flex; flex-wrap: wrap;">

                    @if($classroom->statut == "Planifié")
                    <p style="color: orange;">{{ $classroom->statut }}</p>
                    @elseif($classroom->statut == "Annulée")
                    <p style="color: red;">{{ $classroom->statut }}</p>
                    @else
                    <p style="color: green;">{{ $classroom->statut }}</p>
                    @endif
                    @if($classroom->statut == "Planifié")
                    <div style="margin-left: 15px;" class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Action
                      </button>
                      <div class="dropdown-menu">
                        @if($classroom->date <= Carbon\Carbon::now())
                        <a class="dropdown-item" href="{{ route('classrooms.edit', $classroom) }}">Faire le compte rendu</a><br>
                        @endif
                        <a class="dropdown-item" href="{{ route('classrooms.edit', $classroom) }}">Annuler</a>
                      </div>
                    </div>
                    @endif

                  </td>
                </tr>
                <!-- The Modal -->
                <div class="modal fade" id="myModal{{$classroom->id}}">
                <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 style="font-size: 24px;" class="modal-title">Compte-rendu de la session</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container">
                      {!! $classroom->commentaire !!}
                  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>

                </div>
                </div>
                </div>

                <!--end modal-->
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


@else
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
                  <th>Formateur</th>
                  <th>Date</th>
                  <th>Statut</th>
                </tr>
              </thead>
              <tbody>
                @foreach($classrooms as $classroom)
                <tr>
                  <td><a href="{{url('users', $classroom->user_id)}}">{{$classroom->formateur}}</a></td>
                  <td> <a data-toggle="modal" data-target="#myModal{{$classroom->id}}" href="#">{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y') }}: voir le compte rendu</a> </td>
                  <td style="display: flex; flex-wrap: wrap;">

                    @if($classroom->statut == "Planifié")
                    <p style="color: orange;">{{ $classroom->statut }}</p>
                    @elseif($classroom->statut == "Annulée")
                    <p style="color: red;">{{ $classroom->statut }}</p>
                    @else
                    <p style="color: green;">{{ $classroom->statut }}</p>
                    @endif
                  </td>
                </tr>
                <!-- The Modal -->
                <div class="modal fade" id="myModal{{$classroom->id}}">
                <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 style="font-size: 24px;" class="modal-title">Compte-rendu de la session</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container">
                      {!! $classroom->commentaire !!}
                  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>

                </div>
                </div>
                </div>

                <!--end modal-->
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
