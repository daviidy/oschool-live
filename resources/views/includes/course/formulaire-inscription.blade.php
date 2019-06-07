<!--popup pour s'inscrire à l'offre normale de la formation-->

<div id="modalSignUp" class="modal full-page-modal" tabindex="-1" role="dialog" aria-hidden="false">
  <!-- <button type="button" class="modal-action-btn action-left back-to-signin" style="opacity: 0;"><i class="ion-ios-arrow-back"></i></button> -->
  <button type="button" class="modal-action-btn action-right close-modal" data-dismiss="modal"><i class="ion-android-close"></i></button>
  <div class="modal-container">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-center">

        <div class="modal-body signup-modal-body">
          <div class="modal-header">
            <img width="100" src="/img/page-parcours/card.png" alt="">
            <div class="modal-title">Remplissez ce formulaire pour payer ce parcours</div>
            <div class="login-needed-alert"></div>
          <form name="userSignUpForm" action="{{url('envoi')}}" method="post" id="signup-modal-form" class="margintop-lg">
            {{ csrf_field() }}

            <div style="display: none;" class="form-group password-form-group">
              <div class="input-with-icon">
                @auth
                <select class="form-control" name="user_id">
                  <option value="{{Auth::user()->id}}">user id</option>
                </select>
                @endauth
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <div style="display: none;" class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="type">
                  <option value="new">type</option>
                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <div class="form-group full_name-form-group">
              <div class="input-with-icon">
                <input value="{{Auth::check() ? Auth::user()->email : ''}}" type="email" class="form-control" id="" placeholder="Email" name="email" required>
                <i class="input-icon ion-android-mail"></i>
              </div>
            </div>

            <div class="form-group email-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Nom" name="nom" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Prénoms" name="prenoms" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="formation">
                  <option value="{{$formation->nom}}">{{$formation->nom}}</option>

                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="montant">
                  <option value="{{$formation->prix}}">Quelle offre choisissez-vous ?</option>
                  @foreach($formation->offers as $offer)
                  <option value="{{$offer->amount}}">{{$offer->name}}: {{$offer->amount}} par mois</option>
                  @endforeach
                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-success full_width spinning-loader"><span class="txt">Envoyer</span><i class="fa fa-circle-o-notch fa-spin"></i></button>
            </div>
          </form>

        </div><!-- /.signup-modal-body -->


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal-container -->
</div><!-- /.modal -->

</div>





<!--formulaire pour s'inscrire à l'offre promo-->

<div id="promo" class="modal full-page-modal" tabindex="-1" role="dialog" aria-hidden="false">
  <!-- <button type="button" class="modal-action-btn action-left back-to-signin" style="opacity: 0;"><i class="ion-ios-arrow-back"></i></button> -->
  <button type="button" class="modal-action-btn action-right close-modal" data-dismiss="modal"><i class="ion-android-close"></i></button>
  <div class="modal-container">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-center">

        <div class="modal-body signup-modal-body">
          <div class="modal-header">
            <img width="100" src="http://pluspng.com/img-png/gift-hd-png-hd-mystery-gift-box-png-405.png" alt="">
            <div class="modal-title">Remplissez ce formulaire pour obtenir votre cadeau</div>
            <div class="login-needed-alert"></div>
          <form name="userSignUpForm" action="{{url('envoi')}}" method="post" id="signup-modal-form" class="margintop-lg">
            {{ csrf_field() }}

            <div class="form-group full_name-form-group">
              <div class="input-with-icon">
                <input value="{{Auth::check() ? Auth::user()->email : ''}}" type="email" class="form-control" id="" placeholder="Email" name="email" required>
                <i class="input-icon ion-android-mail"></i>
              </div>
            </div>

            <div class="form-group email-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Code Promo" name="promo" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <div class="form-group email-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Nom" name="nom" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Prénoms" name="prenoms" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel" required>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="formation">
                  <option value="Développeur Web Junior">Développeur Web Junior</option>
                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <select class="form-control" name="montant">
                  <option value="10000">10.000 FCFA</option>
                </select>
                <i class="input-icon ion-person-stalker"></i>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-success full_width spinning-loader"><span class="txt">Envoyer</span><i class="fa fa-circle-o-notch fa-spin"></i></button>
            </div>
          </form>

        </div><!-- /.signup-modal-body -->


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal-container -->
</div><!-- /.modal -->

</div>
