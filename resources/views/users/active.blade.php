@extends((Auth::user()->type4 == "partner") ? "layouts.menu-dashboard-partner" : "layouts.menu-dashboard-admin")

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->

<section id="main-content">
  <section class="wrapper">

    <h3><i class="fa fa-angle-right"></i> Liste des utilisateurs actifs pour la formation {{$reponse}}</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Etudiants</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th class="blind">Nom d'utilisateur</th>
                  <th class="numeric">Email</th>
                </tr>
              </thead>
              <tbody>
                @if(Auth::user()->type4 == "partner")
                  @foreach(Auth::user()->formations as $formation)
                    @if($formation->nom == $reponse)
                      @foreach($formation->users as $student)
                        @if($student->statut == "OK")
                  <tr>
                    <td class="blind"><a href="{{url('users', $student)}}">{{$student->name}}</a></td>
                    <td class="numeric">{{$student->email}}</td>
                  </tr>
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                @else

                
                  @foreach($formations as $formation)
                    @if($formation->nom == $reponse)
                      @foreach($formation->users as $student)
                        @if($student->statut == "OK")
                  <tr>
                    <td class="blind"><a href="{{url('users', $student)}}">{{$student->name}}</a></td>
                    <td class="numeric">{{$student->email}}</td>
                  </tr>
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                @endif
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

<script type="text/javascript">

function tri() {


  var elems = document.getElementsByClassName('blind');
  for (var i=0;i<elems.length;i+=1){
    elems[i].style.display = 'none';
  }
}

</script>



@endsection
