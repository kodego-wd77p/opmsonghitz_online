@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{asset('public/images/songhitz logo.png')}}" width="600" height="600">
        </div>
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
