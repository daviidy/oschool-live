<div _ngcontent-c29="" class="contain contain--small text-center">
    <!---->
    <h2 _ngcontent-c29="" class="ng-star-inserted">Apprenez avec les meilleurs</h2>
    <!---->
    <!---->
    <ir-horizontal-scroller _ngcontent-c29="" _nghost-c50="">
        <div _ngcontent-c50="" style="padding-top: 7rem;display: flex;flex-wrap: wrap;justify-content: center;">
            <!---->
            @foreach($formation->users as $user)
              @if($formation->teacher == $user->name && $user->type2 == 'teacher')
            <div _ngcontent-c29="" class="card ng-star-inserted"><img _ngcontent-c29="" class="image" irdeferimage="" alt="Karl Krueger" src="/avatars/users/{{$user->photo}}"
                  srcset="/avatars/users/{{$user->photo}}">
                <h5 _ngcontent-c29="" class="name">{{$user->prenoms}} {{$user->nom}}</h5>
                <p _ngcontent-c29="" class="title h6">{{$user->type2}}</p>
                <!---->
                <div _ngcontent-c29="" class="bio x-small mb-0 ng-star-inserted">
                    <ir-markdown _ngcontent-c29="" _nghost-c46="">
                        <!---->
                        <div _ngcontent-c46="" class="ng-star-inserted">
                            <p>{{$user->description}}</p>
                        </div>
                    </ir-markdown>
                </div>
            </div>
              @endif
              @endforeach
              <!--
              <div _ngcontent-c29="" class="card ng-star-inserted"><img _ngcontent-c29="" class="image" irdeferimage="" alt="Richard Kalehoff" src="//images.ctfassets.net/2y9b3o528xhq/2LYMAowSY1jgENqYUxyh5F/a7774379b5e9da03740ba5a627c7debe/richard-kalehoff.jpg"
                    srcset="//images.ctfassets.net/2y9b3o528xhq/2LYMAowSY1jgENqYUxyh5F/a7774379b5e9da03740ba5a627c7debe/richard-kalehoff.jpg 1x">
                  <h5 _ngcontent-c29="" class="name">Richard Kalehoff</h5>
                  <p _ngcontent-c29="" class="title h6">Instructor</p>
                  <!----
                  <div _ngcontent-c29="" class="bio x-small mb-0 ng-star-inserted">
                      <ir-markdown _ngcontent-c29="" _nghost-c46="">
                          <!----
                          <div _ngcontent-c46="" class="ng-star-inserted">
                              <p>Richard is a Course Developer with a passion for teaching. He has a degree in computer science, and first worked for a nonprofit doing everything from front-end web development, to backend programming, to database and
                                  server management.</p>
                          </div>
                      </ir-markdown>
                  </div>
              </div>
            -->
        </div>
        <!--
        <div _ngcontent-c50="" class="scrollbar">
            <div _ngcontent-c50="" class="handle" style="width: 940px; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
      -->
    </ir-horizontal-scroller>
</div>
