

<div id="livrables" class="box content">
    <section class="setting-linked-accounts--content-container--3172B form--flex-column--g8OLQ">
        <div class="setting-linked-accounts--main--1H5vk form--main--31YLe">
            <h1 class="setting-linked-accounts--content-header--2s99F form--header-text--ZDMyT">Livrables</h1>
            <ul>
              @foreach($user->etatprojets as $etatprojet)
                <li>
                    <dl>
                        <dd title="Connected" class="setting-linked-accounts--connected--2gX8u"><span>Livré</span></dd><dt>{{$etatprojet->projet}}</dt>
                        <dd> <a target="_blank" href="{{$etatprojet->livrables}}">Voir les livrables</a> </dd>
                        <dd> <a href="#" data-target="#myModal{{$etatprojet->id}}">Voir les commentaires</a> </dd>
                        @if($etatprojet->statut == "Validé")
                        <dd class="setting-linked-accounts--status--2jRiF"><a style="color: green;" href="#"><span>{{ $etatprojet->statut }}</span></a></dd>
                        @elseif($etatprojet->statut == "En évaluation" || $etatprojet->statut == "A refaire")
                        <div style="margin-left: 15px;" class="dropdown">
                          <button type="button" style="background-color: #02B3E4;">
                            <a style="color: #fff;" href="{{route('etatprojets.edit', $etatprojet)}}">Evaluer</a>
                          </button><br><br>

                            <form action="{{ route('etatprojets.destroy', $etatprojet) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="btn btn-danger" type="submit">Supprimer ces livrables</button>
                            </form>
                          </div>
                        </div>
                        @endif
                    </dl>
                </li>
                @endforeach

            </ul>
        </div>
    </section>
</div>
