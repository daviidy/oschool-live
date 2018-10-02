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
                @foreach(Auth::user()->sessions as $classroom)
                <tr>
                  <td><a href="{{url('users', $classroom->idEtudiant)}}">{{$classroom->etudiant}}</a></td>
                  <td>{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y') }}</td>
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
                  <td>{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y') }}</td>
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
