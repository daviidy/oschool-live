@extends('layouts.menu-dashboard-teacher')

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
                  <p><img src="/avatars/users/{{Auth::user()->photo}}" class="img-circle"></p>
                  <h3>{{ Auth::user()->name }}</h3>
                  <h6>E-mail : {{ Auth::user()->email }}</h6>
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
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Modifier le profil</a>
                  </li>
                  @auth
                  @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
                  <li>
                    <a data-toggle="tab" href="#edit">Liste des étudiants</a>
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
                        @auth
                        @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
                        <div class="row centered mt mb">
                          <div class="col-sm-4">
                            <h1><i class="fa fa-user"></i></h1>
                            <h3>{{Auth::user()->students->count()}}</h3>
                            <h6>Nombre d'étudiants actuels</h6>
                          </div>
                          <div class="col-sm-4">
                            <h1><i class="fa fa-laptop"></i></h1>
                            <h3>{{Auth::user()->max_students}}</h3>
                            <h6>Capacité maximale d'étudiants</h6>
                          </div>
                          <div class="col-sm-4">
                            <h1><i class="fa fa-group"></i></h1>
                            <h3>{{Auth::user()->max_students - Auth::user()->students->count()}}</h3>
                            <h6>Places restantes d'étudiants</h6>
                          </div>
                        </div>
                        <!-- /row -->
                        <h4>Mes étudiants</h4>
                        <div class="row centered mb">
                          <ul class="my-friends">
                            @foreach(Auth::user()->students as $student)
                            <li>
                              <div class="friends-pic"><img class="img-circle" width="35" height="35" src="/avatars/users/{{$student->photo}}"></div>
                            </li>
                            @endforeach
                          </ul>
                          <div class="row mt">
                            <div class="col-md-4 col-md-offset-4">
                              <h6><a href="#">Voir tout</a></h6>
                            </div>
                          </div>
                        </div>
                        <!-- /row -->
                        @else
                        <div class="row centered mt mb">
                          <div class="col-sm-4">
                            <h1><i class="fa fa-user"></i></h1>
                            <h3>Formateur</h3>
                            @if(Auth::user()->user_id)
                            <h6>
                              <a href="{{url('users', Auth::user()->teacher)}}">
                                {{Auth::user()->teacher->name}}
                              </a>
                            </h6>
                            @endif
                          </div>
                          <div class="col-sm-4">
                            <h1><i class="fa fa-laptop"></i></h1>
                            <h3>Formation</h3>
                            <h6>Développeur web junior</h6>
                          </div>

                        </div>
                        <!-- /row -->
                        @endif
                        @endauth

                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="contact" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Informations personnelles</h4>
                        <form method="post" enctype="multipart/form-data" action="{{ url('users', Auth::user() ) }}" role="form" class="form-horizontal">
                          {{ csrf_field() }}
                          {{ method_field('patch') }}
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Photo de profil</label>
                            <div class="col-lg-6">
                              <input name="photo" type="file" id="exampleInputFile" class="file-pos">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nom</label>
                            <div class="col-lg-6">
                              <input name="nom" type="text" value="{{Auth::user()->nom}}" placeholder=" " id="nom" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Prénoms</label>
                            <div class="col-lg-6">
                              <input name="prenoms" value="{{Auth::user()->prenoms}}" type="text" placeholder=" " id="prenoms" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Capacité maximale d'étudiants</label>
                            <div class="col-lg-6">
                              <input name="max_students" value="{{Auth::user()->max_students}}" type="text" placeholder="Exemple: 50" id="max_students" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input disabled type="text" placeholder="{{Auth::user()->email}}" id="email" class="form-control">
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
                  @auth
                  @if (Auth::user()->isTeacher())
                  <!-- LISTE DES ETUDIANTS -->
                  <div id="edit" class="tab-pane">
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
                            @foreach(Auth::user()->students as $student)
                            <tr>
                              <td><a href="{{url('users', $student)}}">{{$student->name}}</a></td>
                              <td>{{$student->prenoms}}</td>
                              <td>{{$student->email}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                 </div>
                                   <!-- LISTE DES ETUDIANTS FIN -->
                @endif
                @endauth
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
