<div id="state" class="box content">
    <section class="setting-language-preference--content-container--3t0-2 form--flex-column--g8OLQ">
        <div class="setting-language-preference--main--24B9l form--main--31YLe">
            <h1 class="setting-language-preference--content-header--3b-w8 form--header-text--ZDMyT">Votre rapport d'activités</h1>
            <form method="post" enctype="multipart/form-data" action="/moisFactures" class="setting-language-preference--drop-down--1PMaS">
              {{ csrf_field() }}
                <div class="Select Select--single">
                  <select class="" name="month">
                    <option value="01">Janvier</option>
                    <option value="02">Février</option>
                    <option value="03">Mars</option>
                    <option value="04">Avril</option>
                    <option value="05">Mai</option>
                    <option value="06">Juin</option>
                    <option value="07">Juillet</option>
                    <option value="08">Août</option>
                    <option value="09">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                  </select>
                </div>

                <div class="Select Select--single">
                  <select class="" name="year">
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2019">2020</option>
                  </select>
                </div>

        </div>
        <div class="_setting-buttons--buttons-container--3qh20">

          <button class="vds-button vds-button--primary" type="submit"><span
                  class="vds-button__content">Voir</span>
          </button>
        </div>
        </form>
    </section>


</div>
