

<div id="livrables" class="box content">
    <section class="setting-linked-accounts--content-container--3172B form--flex-column--g8OLQ">
        <div class="setting-linked-accounts--main--1H5vk form--main--31YLe">
            <h1 class="setting-linked-accounts--content-header--2s99F form--header-text--ZDMyT">Livrables</h1>
            <ul>
              @foreach($classroomsstudents->sortByDesc('date') as $classroom)
                <li>
                    <dl>
                        <dd title="Connected" class="setting-linked-accounts--connected--2gX8u"><span>Session</span></dd><dt>{{ Carbon\Carbon::parse($classroom->date)->format('d-m-Y') }}</dt>
                        <dd> <a href="#" data-toggle="modal" data-target="#myModal{{$classroom->id}}">Voir le compte rendu</a> </dd>
                        @if($classroom->statut == "Planifié")
                        <dd class="setting-linked-accounts--status--2jRiF"><a style="color: orange;" href="#"><span>{{ $classroom->statut }}</span></a></dd>
                        @elseif($classroom->statut == "Annulée")
                        <dd class="setting-linked-accounts--status--2jRiF"><a style="color: red;" href="#"><span>{{ $classroom->statut }}</span></a></dd>
                        @else
                        <dd class="setting-linked-accounts--status--2jRiF"><a style="color: green;" href="#"><span>{{ $classroom->statut }}</span></a></dd>
                        @endif
                    </dl>
                </li>

                <!-- The Modal -->
                <div class="modal fade" id="myModal{{$classroom->id}}">
                <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 style="font-size: 24px;" class="modal-title">Compte-rendu de la session</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                        {!! $classroom->commentaire !!}
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>

                </div>
                </div>
                </div>
                @endforeach

            </ul>
        </div>
    </section>
</div>
