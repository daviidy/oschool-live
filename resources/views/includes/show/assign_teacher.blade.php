<div id="teacher" class="box content">
    <section class="setting-language-preference--content-container--3t0-2 form--flex-column--g8OLQ">
        <div class="setting-language-preference--main--24B9l form--main--31YLe">
            <h1 class="setting-language-preference--content-header--3b-w8 form--header-text--ZDMyT">Attribuer un formateur</h1>
            <form method="post" enctype="multipart/form-data" action="{{ url('users', $user) }}" class="setting-language-preference--drop-down--1PMaS">
              {{ csrf_field() }}
              {{ method_field('patch') }}
                <div class="Select Select--single">
                  <select class="" name="user_id">
                    <option value="0">Personne</option>
                    @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                  </select>
                </div>

        </div>
        <div class="_setting-buttons--buttons-container--3qh20">

          <button class="vds-button vds-button--primary" type="submit"><span
                  class="vds-button__content">Enregistrer</span>
          </button>
        </div>
        </form>
    </section>
</div>
