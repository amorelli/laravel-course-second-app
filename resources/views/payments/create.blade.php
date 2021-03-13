@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <form method="POST" action="/payments">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        {{ __('Make Payment') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
