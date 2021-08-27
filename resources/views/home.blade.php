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
                    <div class="panel-body">
                        <a href="/events/create " class="btn btn-primary">Create Event</a><br></br>
                    <h3> {{  Auth::user()->name }}{{ __(' logged in!') }}</h3>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
