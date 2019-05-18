
<div id="info" class="box content">
    <section class="_subscriptions--content-container--2FV2K form--flex-column--g8OLQ">
        <div class="vds-loading vds-loading--md" role="status" aria-label="Loading">
            <div class="vds-loading__children">
                <h1 class="_subscriptions--title--2nNpU">A propos de {{$user->name}}</h1>
                <div class="_subscriptions--no-subscriptions--3Pm1g">
                  <img width="20" src="/avatars/users/{{$user->teacher->photo}}" alt="{{$user->name}}">
                    <div>
                        <!--
                        <h3 class="vds-heading--h3 vds-spacing--stack-2x">You have yet to enroll in a Nanodegree program.</h3>
                      -->
                      @if($user->teacher->id !== 0)
                        <a class="vds-button vds-button--primary" href="{{url('users', $user->teacher->id)}}" role="button" tabindex="0">
                          <span class="vds-button__content">Nom du formateur: {{$user->teacher->name}}</span>
                        </a>

                        @else
                        <a class="vds-button vds-button--primary" href="#" role="button" tabindex="0">
                          <span class="vds-button__content">Nom du formateur: {{$user->teacher->name}}</span>
                        </a>

                        @endif
                    </div>

                </div>
                <div class="_subscriptions--billing-card--1_rR6">
                    <div class="_billing-card--item--JtPox _subscription-card--item--agyqV">
                        <div>
                            <div class="_billing-card--header--3ZHdt undefined">
                                <h6 class="vds-heading--h6 vds-spacing--stack-none">Bon à savoir</h6>
                            </div>
                            <div class="_add-payment--add-payment-method--3SAzD"><img src="/avatars/users/{{$user->photo}}" alt="Illustration of a ghost">
                                <div>
                                  @if($user->type == 'default')
                                    <p class="vds-text vds-spacing--stack-3x">
                                      Etudiant
                                    </p><br>
                                  @endif
                                  @if($user->type2 == 'teacher')
                                    <p class="vds-text vds-spacing--stack-3x">
                                      Mentor
                                    </p><br>
                                  @endif
                                  @if($user->type3 == 'admin')
                                    <p class="vds-text vds-spacing--stack-3x">
                                      Admin
                                    </p><br><br>
                                  @endif

                                  {{$user->description}}<br><br>

                                    <button class="vds-button vds-button--secondary vds-button--small"
                                      type="button">
                                      <span class="vds-button__content"> <a style="color: #02B7E9;" href="#courses">Voir les formations de {{$user->name}}</a> </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('includes.help')
            </div>
        </div>
    </section>
</div>
