@extends( Auth::user()->type2 == "teacher" ? 'layouts.menu-dashboard-teacher' : 'layouts.menu-dashboard-default')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Liste de vos projets</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Historique</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Titre du projet</th>
                  <th>Livrables</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->projets as $projet)
                <tr>
                  <td><a target="_blank" href="{{$projet->enonce}}">{{$projet->titre}}</a></td>
                  <td><a href="{{url('projets', $projet)}}">Envoyez vos livrables</a></td>
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

@if (!Auth::user()->isTeacher() && !Auth::user()->isAdmin())
<!-- LISTE DES ETUDIANTS -->
<div id="projets">
   <div class="container">
      <h2>Etats de mes projets </h2>
      <table class="table">
        <thead>
          <tr>
            <th>Nom du projet</th>
            <th>Livrables</th>
            <th>Commentaires</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>
          @foreach(Auth::user()->etatprojets as $etatprojet)
          <tr>
            <td>{{$etatprojet->projet}}</td>
            <td> <a target="_blank" href="{{$etatprojet->livrables}}"> Voir vos livrables</a> </td>
            <td> <a data-toggle="modal" data-target="#myModal{{$etatprojet->id}}" href="#">Voir les commentaires</a></td>
            <td>{{$etatprojet->statut}}</td>
            <!-- The Modal -->
            <div class="modal fade" id="myModal{{$etatprojet->id}}">
            <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 style="font-size: 24px;" class="modal-title">Commentaire sur le projet</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="container">
                  {!! $etatprojet->commentaire !!}
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
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

</div>
                 <!-- LISTE DES ETUDIANTS FIN -->
@endif



@endsection
