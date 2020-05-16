<div id="games">
        <ul class="list-group list-group-flush p-0">
                @foreach($games as $game)
                    @if (!(isset($game->parentGame)))
                        <li class="list-group-item">

                         <a href="{{route('result.details.create', $game->id)}}">{{$game->name}}</a>
                        </li>
                    @endif
                 @endforeach
        </ul>
    </div>















