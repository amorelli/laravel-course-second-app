@foreach ($conversation->replies as $reply)
    <div>
        <header style="display: flex; justify-content: space-between;">
            <p class="m-0"><strong>{{ $reply->user->name }} said...</strong></p>

            {{ $reply->body }}
            @if ($reply->isBest())
                <span style="color: green">Best Reply</span>
            @endif
        </header>
    </div>
    @can('update', $conversation)
        <form method="POST" action="/best-replies/{{ $reply->id }}">
            @csrf
            <button type='submit' class="btn p-0 text-mute">Best Reply?</button>
        </form>
    @endcan
    @continue($loop->last)
    <hr>
@endforeach
