@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($conversations as $conversation)
                    <h2><a href="/conversations/{{ $conversation->id }}"> {{ $conversation->title }} </a></h2>
                    @continue($loop->last)
                    <hr>
                @endforeach
            </div>
        </div>
        @can('edit_forum', Model::class)
            <div class="row justify-content-end">
                <a href="">Edit Forum</a>
            </div>
        @endcan

        @can('view_reports', Model::class)
            <div class="row justify-content-end">
                <a href="/reports">View Reports</a>
            </div>
        @endcan
    </div>
@endsection
