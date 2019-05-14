<ul _ngcontent-c29="" class="ng-star-inserted">
<!---->
<li _ngcontent-c29="" class="ng-star-inserted">
  <!---->
  <!---->
  <!---->
  <!---->
  <h6 class="details" _ngcontent-c29="" class="ng-star-inserted">Durée:</h6>
  <!---->
  <h5 _ngcontent-c29="" class="ng-star-inserted">{{$formation->duration}}</h5>
  <!---->
  <!---->
  <p _ngcontent-c29="" class="x-small ng-star-inserted">Et des séances hebdomadaires de 1 - 2 H avec un formateur</p>
  <!---->
  <!---->
  <!---->
  <!---->
  <!---->
</li>
<li class="trait" _ngcontent-c29="" class="ng-star-inserted">
  <!---->
  <!---->
  <!---->
  <!---->
  <!---->
  <ir-classroom-opens-column _ngcontent-c29="" _nghost-c91="" class="ng-star-inserted">
    <!---->
    <!---->
    <h6 class="details" _ngcontent-c91="" class="ng-star-inserted">Début de la prochaine rentrée</h6>
    <!---->
    <h5 id="date" _ngcontent-c91="" class="ng-star-inserted">
      {{$formation->start_date}}
    </h5>
    <!---->
    <!---->
  </ir-classroom-opens-column>
</li>
<li class="trait" _ngcontent-c29="" class="ng-star-inserted">
  <!---->
  <!---->
  <!---->
  <!---->
  <ir-modal _ngcontent-c29="" _nghost-c11="" class="ng-tns-c11-16 ng-star-inserted">
    <div _ngcontent-c11="" class="wrapper">
      <!---->
      <!---->
    </div>
  </ir-modal>
  <h6 class="details" _ngcontent-c29="" class="ng-star-inserted">Prérequis</h6>
  <!---->
  @foreach($formation->prerequisites as $prerequisite)
    @if($prerequisite->type == "Ordre général")
      <h5 _ngcontent-c29="" class="ng-star-inserted">{{$prerequisite->description}}</h5><br>
    @endif
  @endforeach
  <p _ngcontent-c29="" class="x-small ng-star-inserted"><a href="https://drive.google.com/open?id=1ihKHmukvYioQ6VfS_eaqSuIq4gOgnxcA" target="_blank" _ngcontent-c29="">Voir les prérequis en détail</a></p>
  <!---->
  <!---->
</li>
<li class="trait" _ngcontent-c29="" class="ng-star-inserted">
  <!---->
  <!---->
  <!---->
  <!---->
  <h6 class="details" _ngcontent-c29="" class="ng-star-inserted">Langue</h6>
  <!---->
  @foreach($formation->languages as $language)
  <h5 _ngcontent-c29="" class="ng-star-inserted">{{$language->name}}</h5>
  @endforeach
  <!---->
  <!---->
  <!---->
  <!---->
  <!---->
  <!---->
  <!---->
</li>
</ul>
