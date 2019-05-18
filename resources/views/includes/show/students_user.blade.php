<div id="students" class="box content">
    <section class="_notifications--content-container--1sHja form--flex-column--g8OLQ">
        <div class="_notifications--main--1u4xn form--main--31YLe">
            <h1 class="_notifications--content-header--c1Yag form--header-text--ZDMyT">Mes étudiants</h1>
            <div class="_notifications--content-section--VDHOH">
              <!--
                <p class="_notifications--intro-text--1fILA">Configure your notification settings by checking the delivery method you prefer. Uncheck the box if you do not wish to receive the notifications for that communication type. SMS
                    notifications require a <a href="/settings/personal-info">verified phone number</a>. You may receive up to three messages per day and message rates may apply. Reply STOP to end.</p>
                  -->
                <ul>
                    @foreach($user->students as $student)
                    <li class="_notification-settings-card--item-active--aYKAW">
                        <div class="_notification-settings-card--item-header--1V4kt">
                            <div class="_notification-settings-card--item-title--2v-8k"><span style="background-image: url(&quot;/avatars/users/{{$student->photo}}&quot;);"><a style="color: #000;" href="{{url('users', $student)}}" title="">{{$student->name}}</a></span>
                                <div class="_notification-settings-card--title-text--xTZhH">
                                    <h3><a style="color: #000;" href="{{url('users', $student)}}" title="">{{$student->name}} ({{$student->email}})</a></h3>
                                    <h4>Projet en cours</h4>
                                    @foreach($student->formations as $formation)
                                      @foreach($formation->projets as $key => $projet)
                                      @if (!$student->worked($projet->id))
                                      @if($key == 0)
                                    <p>{{$projet->titre}}</p>
                                        @endif
                                      @endif
                                    @endforeach
                                  @endforeach
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="_notification-settings-card--item-footer--2pLca">
                            <dl>
                                <div class="_notification-settings-card--title--1BlGY"><dt class="_notification-settings-card--hide-title--3ilQ_">Delivery Method:</dt></div>
                                <div class="_notification-settings-card--options--GNEYl">
                                    <dd>
                                        <div class="vds-checkbox"><input id="payment_reminders-delivery-sms" class="vds-checkbox__input" disabled="" name="vds-checkbox" type="checkbox" value=""><label class="vds-checkbox__label" for="payment_reminders-delivery-sms">SMS</label><i
                                              class="vds-icon vds-icon--sm" role="img" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24">
                                                    <path d="M17 5.3a1.2 1.2 0 1 1 2 1.4l-7.8 12c-.4.6-1.3.7-1.9.2l-4.2-4.2A1.3 1.3 0 0 1 7 12.9l3 3.1 7-10.7z"></path>
                                                </svg></i></div>
                                        <div class="_notification-settings-card--tooltip--I-yz5">
                                            <div class="tooltip--tooltip-container--2mGjh" aria-describedby="tooltip-sms"><i class="vds-icon vds-color--orange" role="img" aria-hidden="true"><svg viewBox="0 0 32 32">
                                                        <path d="M16.874 6.514l10 18A1 1 0 0 1 26 26H6a1 1 0 0 1-.874-1.486l10-18a1 1 0 0 1 1.748 0zM7.7 24h16.6L16 9.06 7.7 24zm8.3-2a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-1-8a1 1 0 0 1 2 0v4a1 1 0 0 1-2 0v-4z"
                                                          fill-rule="nonzero"></path>
                                                    </svg></i>
                                                <div class="tooltip--tooltip-hover-left--12vXZ tooltip--hidden--1YyX5" id="tooltip-sms">
                                                    <div>Phone number is missing and/or unverified.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                      -->
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </section>
</div>
