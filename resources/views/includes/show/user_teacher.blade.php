<div class="_subscriptions--no-subscriptions--3Pm1g">
  <img width="20" src="/avatars/users/{{$user->teacher->photo}}" alt="{{$user->name}}">
    <div>
        <!--
        <h3 class="vds-heading--h3 vds-spacing--stack-2x">You have yet to enroll in a Nanodegree program.</h3>
      -->
        <a class="vds-button vds-button--primary" href="{{url('users', $user->teacher->id)}}" role="button" tabindex="0">
          <span class="vds-button__content">Nom du formateur: {{$user->teacher->name}}</span>
        </a>

        
    </div>

</div>
