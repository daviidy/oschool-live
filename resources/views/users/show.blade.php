@extends((Auth::user()->type3 == "admin") ? "layouts.menu-dashboard-admin" : ((Auth::user()->type2 == "teacher")  ? "layouts.menu-dashboard-teacher" : "layouts.menu-dashboard-default"))

@section('content')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 centered">
              </div>

              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="/avatars/users/{{$user->photo}}" class="img-circle"></p>
                  <h3>{{ $user->name }}</h3>
                  <h6>E-mail : {{ $user->email }}</h6>
                  @auth
                  @if (Auth::user()->isAdmin() && $user->type == 'default' && !count($user->formations  ))
                  <h5> <a href="{{url('inscrire', $user)}}">Inscrire {{$user->name}} à une formation</a> </h5>
                  @endif
                  @if (Auth::user()->isAdmin() && $user->type == 'teacher')
                  <h5> <a href="{{url('inscrire', $user)}}">Assigner {{$user->name}} à une formation</a> </h5>
                  @endif
                  @endauth
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
              </div>
              <!-- /col-md-4 -->

              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">A propos</a>
                  </li>
                  @auth
                  @if (Auth::user()->isAdmin() && $user->type == 'default' && $user->type2 != 'teacher' && $user->type3 != 'admin')
                  <li>
                    <a data-toggle="tab" href="#edit">Attribuer un formateur</a>
                  </li>
                  @endif
                  @if (Auth::user()->isAdmin() && $user->type2 == 'teacher')
                  <li>
                    <a data-toggle="tab" href="#students">Etudiants de {{$user->name}}</a>
                  </li>
                  @endif
                  @if ($user->type == 'default' && $user->type2 != 'teacher' && $user->type3 != 'admin')
                    @if(Auth::user()->isAdmin() || Auth::user()->isTeacher())
                  <!--
                  <li>
                    <a data-toggle="tab" href="#progressions">Les progressions de {{$user->name}}</a>
                  </li>
                -->
                  <li>
                    <a data-toggle="tab" href="#projets">Les projets de {{$user->name}}</a>
                  </li>
                    @endif
                  @endif
                  @if (Auth::user()->isAdmin())
                  <li>
                    <a data-toggle="tab" href="#classrooms">Les sessions de {{$user->name}}</a>
                  </li>

                  <li>
                    <a data-toggle="tab" href="#delete">Supprimer cet utilisateur</a>
                  </li>
                  @endif
                  @endauth
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">

                      <!-- /col-md-6 -->
                      <div class="col-md-6 detailed">
                        <h4>A propos</h4>

                        <div class="row centered mt mb">
                          <div class="col-sm-4">
                            <h1><i class="fa fa-user"></i></h1>
                            <h3>Type</h3>
                            @if($user->type == 'teacher')
                            <h6>Formateur</h6>
                            @else
                            <h6>Etudiant</h6>
                            @endif
                          </div>
                          <div class="col-sm-4">
                            <h1><i class="fa fa-laptop"></i></h1>
                            <h3>Formation(s)</h3>
                            @foreach($user->formations as $formation)
                            <h6>{{$formation->nom}}</h6>
                            @endforeach
                          </div>
                          @if($user->type == 'default')
                          <div class="col-sm-4">
                            <h1><i class="fa fa-laptop"></i></h1>
                            <h3>Formateur</h3>
                            @if(empty($user->teacher))
                            <h6>Aucun formateur</h6>
                            @else
                            <h6>{{$user->teacher->name}}</h6>
                            @endif
                          </div>
                          @endif
                          @if($user->type == 'teacher')
                          <div class="col-sm-4">
                            <h1><i class="fa fa-laptop"></i></h1>
                            <h3>Stats</h3>
                            <h6>Max d'étudiants acceptés: {{$user->max_students}}</h6> <br>
                            <h6>Places restantes: {{$user->max_students - $user->students->count()}}</h6>
                          </div>
                          @endif

                        </div>
                        <!-- /row -->

                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Choisissez un formateur</h4>
                        <form method="post" enctype="multipart/form-data" action="{{ url('users', $user) }}" role="form" class="form-horizontal">
                          {{ csrf_field() }}
                          {{ method_field('patch') }}
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Attribuer un formateur</label>
                            <div class="col-lg-6">
                              <select class="" name="user_id">
                                <option value="0">Personne</option>
                                @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Enregistrer</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->

                  <div id="students" class="tab-pane">
                    <div class="container">
                       <h2>LISTE DES ETUDIANTS </h2>
                       <p>Ciquez sur le nom d'un étudiant pour voir sa progression.</p>
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Nom</th>
                             <th>Prenoms</th>
                             <th>Email</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($user->students as $student)
                           <tr>
                             <td><a href="{{url('users', $student->id)}}">{{$student->name}}</a></td>
                             <td>{{$student->prenoms}}</td>
                             <td>{{$student->email}}</td>
                           </tr>
                           @endforeach
                         </tbody>
                       </table>
                     </div>
                  </div>
                  <!-- /tab-pane -->
                  <!--
                  <div id="progressions" class="tab-pane">
                    <div class="container">
                       <h2>Progressions de {{$user->name}}</h2>
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Formation</th>
                             <th>Section</th>
                             <th>Statut</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($user->formations as $formation)
                             @foreach($formation->progressions->sortBy('id') as $progression)
                               @if(count($progression->etatprogressions))
                                 @foreach($progression->etatprogressions as $etatprogression)
                                   @if($etatprogression->user_id == $user->id)

                                   <tr>
                                     <td>{{$formation->nom}}</td>
                                     <td> <a target="_blank" href="{{$progression->lien}}">{{$progression->titre}}</a> </td>
                                     <td style="display: flex; flex-wrap: wrap;">

                                       @if($etatprogression->statut == "A revoir")
                                       <p style="color: orange;">{{ $etatprogression->statut }}</p>
                                       @else
                                       <p style="color: green;">{{ $etatprogression->statut }}</p>
                                       @endif
                                       @if($etatprogression->statut == "A revoir")
                                       <div style="margin-left: 15px;" class="dropdown">
                                         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                           Action
                                         </button>
                                         <div class="dropdown-menu">
                                           <a class="dropdown-item" href="{{url('valider', $etatprogression)}}">Valider</a>
                                         </div>
                                       </div>
                                       @endif

                                     </td>
                                   </tr>

                                   @endif
                                 @endforeach
                               @endif
                             @endforeach
                           @endforeach



                           @foreach($user->formations as $formation)
                             @foreach($formation->progressions->sortBy('id') as $progression)
                             @if (!$user->validated($progression->id))



                             <tr>
                               <td>{{$formation->nom}}</td>
                               <td> <a target="_blank" href="{{$progression->lien}}">{{$progression->titre}}</a> </td>
                               <td style="display: flex; flex-wrap: wrap;">


                                 <p style="color: orange;">Aucun</p>

                                 <div style="margin-left: 15px;" class="dropdown">
                                   <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                     Action
                                   </button>
                                   <div class="dropdown-menu">
                                     <a style="cursor:pointer;" class="logout" onclick="document.getElementById('logout2').submit();">
                                         Modifier
                                     </a>
                                     <form id="logout2" action="/progression" method="POST" style="display: none;">
                                         @csrf
                                         <input type="text" name="formation" value="{{$formation->nom}}">
                                     </form>
                                   </div>
                                 </div>

                               </td>
                             </tr>


                             @endif
                             @endforeach
                           @endforeach






                         </tbody>
                       </table>
                     </div>
                  </div>-->
                  <!-- /tab-pane -->

                  <div id="projets" class="tab-pane">
                    <div class="container">
                       <h2>Projets de {{$user->name}}</h2>
                       <p>Formation : Développeur web</p>
                       <table class="table">
                         <thead>
                           <tr>
                             <th>Nom du projet</th>
                             <th>Livrables</th>
                             <th>Commentaire</th>
                             <th>Statut</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($user->etatprojets as $etatprojet)
                           <tr>
                             <td>{{$etatprojet->projet}}</td>
                             <td> <a target="_blank" href="{{$etatprojet->livrables}}">Voir les livrables</a> </td>
                             <td> <a data-toggle="modal" data-target="#myModal{{$etatprojet->id}}" href="#">Voir les commentaires</a></td>
                             <td style="display: flex; flex-wrap: wrap;">

                               @if($etatprojet->statut == "Validé")
                               <p style="color: green;">{{ $etatprojet->statut }}</p>
                               @elseif($etatprojet->statut == "A refaire")
                               <div style="margin-left: 15px;" class="dropdown">
                                 <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                   Action
                                 </button>
                                 <div class="dropdown-menu">
                                   <a class="dropdown-item" href="{{route('etatprojets.edit', $etatprojet)}}">Modifier</a>
                                   <form action="{{ route('etatprojets.destroy', $etatprojet) }}" method="post">
                                       {{ csrf_field() }}
                                       {{ method_field('delete') }}
                                       <button class="btn btn-danger" type="submit">Supprimer ces livrables</button>
                                   </form>
                                 </div>
                               </div>
                               @endif

                             </td>
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
                  <!-- /tab-pane -->

                  <div id="classrooms" class="tab-pane">
                    <div class="container">
                       <h2>Les sessions de {{$user->name}}</h2>
                       <p>Formation : Développeur web</p>
                       <table class="table">
                         @auth
                         @if($user->type == 'default' && $user->type2 != 'teacher')
                         <thead>
                           <tr>
                             <th>Formateur</th>
                             <th>Date</th>
                             <th>Statut</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($classroomsstudents->sortByDesc('date') as $classroom)
                           <tr>
                             <td><a href="{{url('users', $classroom->user_id)}}">{{$classroom->formateur}}</a></td>
                             <td> <a data-toggle="modal" data-target="#myModal{{$classroom->id}}" href="#">{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }}: voir le compte-rendu</a></td>
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
                         @elseif($user->type2 == 'teacher')
                         <thead>
                           <tr>
                             <th>Etudiant</th>
                             <th>Date</th>
                           </tr>
                         </thead>
                         <tbody>
                           @foreach($user->sessions->sortByDesc('date') as $classroom)
                           <tr>
                             <td><a href="{{url('users', $classroom->idEtudiant)}}">{{$classroom->etudiant}}</a></td>
                             <td> <a data-toggle="modal" data-target="#myModal{{$classroom->id}}" href="#">{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y H:i') }}: voir le compte-rendu</a></td>
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
                         @endif
                         @endauth
                       </table>
                     </div>
                  </div>
                  <!-- /tab-pane -->


                  <div id="delete" class="tab-pane">
                    <div class="container">
                       <h2>Supprimer {{$user->name}}</h2>
                       <div class="form-group row">
                         <label class="col-lg-3 col-form-label form-control-label">(Attention cette action est irréversible ! )</label>
                         <form action="{{ route('users.destroy', $user) }}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('delete') }}
                             <button class="btn btn-danger" type="submit">Supprimer ce compte utilisateur</button>
                         </form>

                       </div>

                     </div>
                  </div>
                  <!-- /tab-pane -->

            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

    @endsection
