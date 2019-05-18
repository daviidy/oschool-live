



<div _ngcontent-c23="" class="course-summary-card row row-gap-medium catalog-card nanodegree-card ng-star-inserted">
  <ir-catalog-card _ngcontent-c23="" _nghost-c27="">
    <div _ngcontent-c27="" class="card-wrapper is-collapsed">
      <div style="height: 222px;" _ngcontent-c27="" class="card__inner card mb-0">
        <div _ngcontent-c27="" class="card__inner--upper">
          <div _ngcontent-c27="" class="image_wrapper hidden-md-down"><a _ngcontent-c27="" href="/course/vr-foundations-nanodegree--nd105">
              <!---->
              <div _ngcontent-c27="" class="image-container ng-star-inserted" style="background-image: url(&quot;/avatars/projects/{{$projet->image}}&quot;);">
                <div _ngcontent-c27="" class="image-overlay"></div>
              </div>
            </a> 
            <!---->
          </div>
          <div _ngcontent-c27="" class="card-content">
            <!----><span _ngcontent-c27="" style="{{$etatprojet->statut == 'Validé' ? "background:green;color:white;" : " "}}" class="tag tag--new card ng-star-inserted">{{$etatprojet->statut}}</span>
            <!---->
            <div _ngcontent-c27="" class="category-wrapper"><span _ngcontent-c27="" class="mobile-icon"></span>
              <!---->
              <h4 _ngcontent-c27="" class="category ng-star-inserted">{{$formation->nom}}</h4>
            </div>
            <h3 _ngcontent-c27="" class="card-heading">
              <!----><a target="_blank" _ngcontent-c27="" class="capitalize ng-star-inserted" href="{{$projet->enonce}}">{{$projet->titre}}</a>
              <!---->
            </h3>
            <div _ngcontent-c27="" class="right-sub">
              <!---->
              <div _ngcontent-c27="" class="skills ng-star-inserted">
                <h4 _ngcontent-c27=""> <a target="_blank" href="{{$etatprojet->livrables}}">Voir les livrables</a> </h4><span _ngcontent-c27="" class="truncate-content">
                  <!--<span _ngcontent-c27="" class="ng-star-inserted"> <a href="{{url('projets', $projet)}}">Ou envoyez vos livrables</a> </span>-->
              </div>
              <!---->
              <div _ngcontent-c27="" class="hidden-sm-down ng-star-inserted">
                <h4 _ngcontent-c27=""> En collaboration avec</h4><span _ngcontent-c27="" class="truncate-content">
                  <!----><span _ngcontent-c27="" class="ng-star-inserted">Cinetpay</span></span>
              </div>
              <div _ngcontent-c27="" class="hidden-md-up level"><span _ngcontent-c27="" class="course-level course-level-beginner"></span><span _ngcontent-c27="" class="capitalize">beginner</span></div>
            </div>
          </div>
        </div>

        @if($projet->titre !== "Projet 0: Engagez-Vous À Réussir Votre Formation !")
        <div _ngcontent-c27="" class="card__inner--lower">
          <div _ngcontent-c27="" class="progression left uppercase blue expander pointer">
            <!----><span _ngcontent-c27="" class="ng-star-inserted">Documents à lire</span>
            <!---->
          </div>
          <div _ngcontent-c27="" class="right">
            <a href="#myModal{{$etatprojet->id}}">
            <!----><span _ngcontent-c27="" class="caption text-right level ng-star-inserted">
            <span _ngcontent-c27="" class="course-level course-level-beginner"></span>
            <span _ngcontent-c27="" class="capitalize">Voir les commentaires</span>
          </span>
          </a>
          </div>
        </div>
        @endif


      </div>
      <div _ngcontent-c27="" class="card__expander progressionDetail">
        @foreach($projet->progressions as $progression)
        <div _ngcontent-c27="" class="card__expander--summary mb-1">
          <!----><span _ngcontent-c27="" class="ng-star-inserted">{{$progression->titre}}</span></div>
        <hr _ngcontent-c27="">
        <div _ngcontent-c27="" class="card__expander--details">
          <div _ngcontent-c27="" class="rating">
            <!---->
            <!---->
            <!---->
            <!---->
          </div><a target="_blank" _ngcontent-c27="" class="button--primary btn" href="{{$progression->lien}}">Voir le cours</a>
        </div>
        @endforeach
      </div>
    </div>
  </ir-catalog-card>
</div>



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
