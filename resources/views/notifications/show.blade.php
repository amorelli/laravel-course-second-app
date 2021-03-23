@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @forelse ($notifications as $notification)
                <li>
                    @if ($notification->type === 'App\Notifications\PaymentReceived')
                        We have received payment of ${{ $notification->data['amount'] / 100 }}
                    @endif
                </li>
            @empty
                <li>You have no unread notifications.</li>
            @endforelse
        </ul>
    </div>
@endsection
