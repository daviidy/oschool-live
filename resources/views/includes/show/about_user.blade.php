
<div id="info" class="box content">
    <section class="_subscriptions--content-container--2FV2K form--flex-column--g8OLQ">
        <div class="vds-loading vds-loading--md" role="status" aria-label="Loading">
            <div class="vds-loading__children">
                <h1 class="_subscriptions--title--2nNpU">A propos de {{$user->name}}</h1>
                @if($user->teacher && $user->teacher->id !== 0)
                  @include('includes.show.user_teacher')
                @endif

                <div class="_subscriptions--billing-card--1_rR6">
                    <div class="_billing-card--item--JtPox _subscription-card--item--agyqV">
                        <div>
                            <div class="_billing-card--header--3ZHdt undefined">
                                <h6 class="vds-heading--h6 vds-spacing--stack-none">Bon à savoir</h6>
                            </div>
                            <div class="_add-payment--add-payment-method--3SAzD"><img src="/avatars/users/{{$user->photo}}" alt="Illustration of a ghost">
                                <div>

                                    <p class="vds-text vds-spacing--stack-3x">
                                      <span class="info_title">Type:</span>
                                      @if($user->type == 'default')
                                      Etudiant,
                                      @endif
                                      @if($user->type2 == 'teacher')
                                      Mentor,
                                      @endif
                                      @if($user->type3 == 'admin')
                                      Administrateur
                                      @endif
                                    </p>

                                    <p class="vds-text vds-spacing--stack-3x">

                                    <span class="info_title">Email:</span>  <br>
                                      {{$user->email}}

                                    </p><br>

                                    @if($user->type2 == 'teacher')
                                    <p class="vds-text vds-spacing--stack-3x">


                                      <span class="info_title">Max d'étudiants acceptés:</span>
                                      {{$user->max_students}}


                                    </p>

                                    <p class="vds-text vds-spacing--stack-3x">


                                      <span class="info_title">Places restantes:</span>
                                      {{$user->max_students - $user->students->count()}}


                                    </p>
                                    @endif

                                    <p class="vds-text vds-spacing--stack-3x">

                                    <span class="info_title">A propos de {{$user->name}}:</span>  <br>
                                      {{$user->description}}

                                    </p><br>

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
