@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Helloooooooooooooooooooo

                    <a href="{{ route('home.event.index') }}">Accéder à la section event</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
