@extends( Auth::user()->type2 == "teacher" ? 'layouts.menu-dashboard-teacher' : 'layouts.menu-dashboard-default')


@if(Auth::user()->type2 == "teacher")

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->

<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <!--
      <div class="col-lg-4 col-xs-12">
        <img width="300" src="/dashboard/img/classroom.png" alt="">
      </div>
    -->

      <div class="col-lg-12 col-xs-12">
        <div style="height:auto;" class="home_button"><a style="line-height:20px;" href="{{ route('classrooms.create') }}">Planifier une session</a></div>
      </div>
<!--
      <div class="col-lg-4 col-xs-12">
        <div style="height:auto; background:#F55F44;" class="home_button"><a data-toggle="modal" data-target="#popup" style="line-height:20px;" href="#">Marquer une progression</a></div>
      </div>

    -->
      <div style="margin-top: 3rem;" class="col-lg-12 col-xs-12">
          <iframe width="100%" height="390" src="https://player.vimeo.com/video/320606515" frameborder="0" allowFullScreen mozallowfullscreen webkitAllowFullScreen></iframe>
      </div>

    </div>

    <h3><i class="fa fa-angle-right"></i> Liste de vos sessions</h3>
    <div class="row mt">

      <div class="_main--section--2nxxR">
          <div class="index--latest-activity--3vz65">
              <h3 class="index--title--3XRU5 _main--title--1Hy0o">Bon à savoir</h3>
              <div class="_large-card--card--dLRfT shared--card--3X88h">
                  <div class="_large-card--course-accent--3W9ZY _large-card--accent--2wXfT"></div>
                  <div class="_large-card--body--1EXty">
                      <div>
                          <h1><span>Besoin <strong>d'aide</strong>?</span></h1>
                          <p class="_large-card--last-viewed--1RfWk">Consultez le guide des formateurs</p>
                      </div><a href="/documentsTeacher"><button class="vds-button vds-button--primary" type="button"><span class="vds-button__content">
                              <!-- react-text: 194 -->Lire le guide
                              <!-- /react-text --></span></button></a>
                  </div>
              </div>
          </div>
      </div>




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
                @foreach($sessions->sortByDesc('date') as $classroom)
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

            {{ $sessions->links() }}
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


@elseif(Auth::user()->type == "default" && Auth::user()->type3 !== "admin")



@section('content')

<section id="main-content">
  <section class="wrapper">
    <div style="margin-top: 3rem;" class="col-lg-12 col-xs-12">
        <iframe width="100%" height="390" src="https://player.vimeo.com/video/319960170" frameborder="0" allowFullScreen mozallowfullscreen webkitAllowFullScreen></iframe>
    </div>
    <h3><i class="fa fa-angle-right"></i> Liste de vos sessions</h3>
    <div class="row mt">
      <div class="_main--section--2nxxR">
          <div class="index--latest-activity--3vz65">
              <h3 class="index--title--3XRU5 _main--title--1Hy0o">Bon à savoir</h3>
              <div class="_large-card--card--dLRfT shared--card--3X88h">
                  <div class="_large-card--course-accent--3W9ZY _large-card--accent--2wXfT"></div>
                  <div class="_large-card--body--1EXty">
                      <div>
                          <h1><span>Où en êtes vous au niveau des <strong>projets de la formationt</strong>?</span></h1>
                          <p class="_large-card--last-viewed--1RfWk">Consultez la liste de vos projets à tout moment</p>
                      </div><a href="{{url('projets')}}"><button class="vds-button vds-button--primary" type="button"><span class="vds-button__content">
                              <!-- react-text: 194 -->Voir les projets
                              <!-- /react-text --></span></button></a>
                  </div>
              </div>
          </div>
      </div>
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
                @foreach($classrooms->sortByDesc('date') as $classroom)
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
            {{ $classrooms->links() }}
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

@endif
