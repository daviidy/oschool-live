<div id="state" class="box content">

    <section class="setting-linked-accounts--content-container--3172B form--flex-column--g8OLQ">
        <div class="setting-linked-accounts--main--1H5vk form--main--31YLe">
            <h1 class="setting-linked-accounts--content-header--2s99F form--header-text--ZDMyT">Etat de votre abonnement</h1>
            <ul>
              @foreach(Auth::user()->achats->sortBy('created_at') as $achat)
                <li>
                    <dl>
                        <dd title="Connected" class="setting-linked-accounts--connected--2gX8u"><span>Payé</span></dd><dt>{{ Carbon\Carbon::parse($achat->created_at)->format('d-m-Y H:i') }}</dt>
                        <dd> {{ $achat->montant }} FCFA </dd>
                        <dd> <span style="background-color: #FFFF00">{{ Carbon\Carbon::parse(Auth::user()->fin_abonnement)->format('d-m-Y H:i') }}</span> </dd>
                        <dd> {{ $achat->formation }}</dd>

                    </dl>
                </li>
                @endforeach

            </ul>
        </div>
    </section>
</div>
