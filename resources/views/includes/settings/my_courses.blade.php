<div id="courses" class="box content">
    <section class="setting-subscriptions--content-container--2WtjD form--flex-column--g8OLQ form--main--31YLe">
        <div>
            <h1 class="setting-subscriptions--course-header--3r5Qn setting-subscriptions--_header-text--3Ucr6 form--header-text--ZDMyT"><i class="vds-icon vds-icon--lg vds-color--green" role="img"><span class="vds-visually-hidden">Mes cours</span><svg
                      viewBox="0 0 32 32">
                        <path d="M6.766 21h8.468L11 13.944 6.766 21zm5.091-9.514l6 10A1 1 0 0 1 17 23H5a1 1 0 0 1-.857-1.514l6-10a1 1 0 0 1 1.714 0zm13 5l3 5A1 1 0 0 1 27 23h-6a1 1 0 0 1-.857-1.514l3-5a1 1 0 0 1 1.714 0zM22.767 21h2.467L24 18.944 22.766 21zm-2.91-5.486a1 1 0 0 1-1.714 0l-3-5A1 1 0 0 1 16 9h6a1 1 0 0 1 .857 1.514l-3 5zM20.234 11h-2.468L19 13.056 20.234 11z"
                          fill-rule="nonzero"></path>
                    </svg></i> Mes cours</h1>

            <ul>
              @foreach(Auth::user()->formations as $formation)

                <li>
                    <div class="_card--card--1vaya">
                        <h5 class="_card--header--3XUBR form--header-text--ZDMyT">{{$formation->nom}}</h5>
                        <p>{{$formation->nom}}</p>
                        <ul class="_link-list--link-container--2WXGs form--link--hghHc">
                            <li><a href="{{url('projects', $formation)}}">Voir les projets</a></li>
                        </ul>
                    </div>
                </li>

                @endforeach
            </ul>
        </div>
    </section>
</div>
