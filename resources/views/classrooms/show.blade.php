@extends('layouts.menu-dashboard-teacher')

@section('content')


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- page start-->
    <div class="chat-room mt">
      <aside class="mid-side">
        <div class="chat-room-head">
          <h3>Chat Room: Support</h3>
          <form action="#" class="pull-right position">
            <input type="text" placeholder="Search" class="form-control search-btn ">
          </form>
        </div>
        <div class="group-rom">
          <div class="first-part odd">Sam Soffes</div>
          <div class="second-part">Hi Mark, have a minute?</div>
          <div class="third-part">12:30</div>
        </div>
        <div class="group-rom">
          <div class="first-part">Mark Simmons</div>
          <div class="second-part">Of course Sam, what you need?</div>
          <div class="third-part">12:31</div>
        </div>
        <div class="group-rom">
          <div class="first-part odd">Sam Soffes</div>
          <div class="second-part">I want you examine the new product</div>
          <div class="third-part">12:32</div>
        </div>
        <div class="group-rom">
          <div class="first-part">Mark Simmons</div>
          <div class="second-part">Ok, send me the pic</div>
          <div class="third-part">12:32</div>
        </div>
        <div class="group-rom">
          <div class="first-part odd">Sam Soffes</div>
          <div class="second-part">
            <a href="#">product.jpg</a> <span class="text-muted">35.4KB</span>
            <p><img class="img-responsive" src="img/product.jpg" alt=""></p>
          </div>
          <div class="third-part">12:32</div>
        </div>
        <div class="group-rom">
          <div class="first-part">Mark Simmons</div>
          <div class="second-part">Fantastic job, love it :)</div>
          <div class="third-part">12:32</div>
        </div>
        <div class="group-rom last-group">
          <div class="first-part odd">Sam Soffes</div>
          <div class="second-part">Thanks!!</div>
          <div class="third-part">12:33</div>
        </div>
        <footer>
          <div class="chat-txt">
            <input type="text" class="form-control">
          </div>
          <div class="btn-group hidden-sm hidden-xs">
            <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
            <button type="button" class="btn btn-white"><i class=" fa fa-paperclip"></i></button>
          </div>
          <button class="btn btn-theme">Send</button>
        </footer>
      </aside>
      <aside class="right-side">
        <div class="user-head">
          <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
          <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
        </div>
        <div class="invite-row">
          <h4 class="pull-left">Team Members</h4>
          <a href="#" class="btn btn-theme04 pull-right">+ Invite</a>
        </div>
        <ul class="chat-available-user">
          <li>
            <a href="chat_room.html">
              <img class="img-circle" src="img/friends/fr-02.jpg" width="32">
              Paul Brown
              <span class="text-muted">1h:02m</span>
              </a>
          </li>
          <li>
            <a href="chat_room.html">
              <img class="img-circle" src="img/friends/fr-05.jpg" width="32">
              David Duncan
              <span class="text-muted">1h:08m</span>
              </a>
          </li>
          <li>
            <a href="chat_room.html">
              <img class="img-circle" src="img/friends/fr-07.jpg" width="32">
              Laura Smith
              <span class="text-muted">1h:10m</span>
              </a>
          </li>
          <li>
            <a href="chat_room.html">
              <img class="img-circle" src="img/friends/fr-08.jpg" width="32">
              Julia Schultz
              <span class="text-muted">3h:00m</span>
              </a>
          </li>
          <li>
            <a href="chat_room.html">
              <img class="img-circle" src="img/friends/fr-01.jpg" width="32">
              Frank Arias
              <span class="text-muted">4h:22m</span>
              </a>
          </li>
        </ul>
      </aside>
    </div>
    <!-- page end-->
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->



@endsection
