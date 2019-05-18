
<div id="info" class="box content">
  <ul>
    <li>
      <section class="setting-personal-info--content-container--2rXvo form--flex-column--g8OLQ">
        <form method="post" enctype="multipart/form-data" action="{{ url('users', Auth::user() ) }}" role="form" class="form-horizontal">
          {{ csrf_field() }}
          {{ method_field('patch') }}
        <div class="setting-personal-info--main--3cA9D form--main--31YLe">
          <h1 class="setting-personal-info--content-header--330IJ form--header-text--ZDMyT">Information basique</h1>
          <img style="display: block; margin: auto; width: 20%;" src="/avatars/users/{{Auth::user()->photo}}" alt="">
          <label for="firstNameInput">Prénoms</label>
          <input id="firstNameInput" name="prenoms" type="text" placeholder="Prénoms" class="setting-personal-info--field--1SB0y form--input-field--1iAH4"
            value="{{Auth::user()->prenoms}}">
            <label for="lastNameInput">Nom</label>
            <input id="lastNameInput" name="nom" type="text" placeholder="Nom" class="setting-personal-info--field--1SB0y form--input-field--1iAH4" value="{{Auth::user()->nom}}">
            <label for="emailInput">Adresse email</label>
            <input readonly id="emailInput" name="email" type="text" placeholder="Email" class="setting-personal-info--field--1SB0y form--input-field--1iAH4" value="{{Auth::user()->email}}">
            <label for="emailInput">A propos de vous</label>
            <p> <strong>A propos de {{Auth::user()->name}}</strong> </p>
            <textarea name="description" id="emailInput" type="text" placeholder="Description" class="setting-personal-info--field--1SB0y form--input-field--1iAH4" value="{{Auth::user()->email}}">
              {{Auth::user()->description}}
            </textarea>
            <label for="emailInput">Photo</label>
            <input id="emailInput" name="photo" type="file" placeholder="" class="setting-personal-info--field--1SB0y form--input-field--1iAH4">

        </div>
        <div class="_setting-buttons--buttons-container--3qh20">

          </button><button class="vds-button vds-button--primary"
             type="submit"><span class="vds-button__content">Enregistrer</span></button>
          </div>
        </form>
      </section>
    </li>
    <li><noscript></noscript></li>
  </ul>
</div>
