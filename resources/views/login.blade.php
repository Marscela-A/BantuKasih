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
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/banner.jpg" class="img-thumbnail" alt="Profile" width="250" height="250" >
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Nama:</strong> {{ $profile->name }}</p>
                                <p><strong>Email:</strong> {{ $profile->email }}</p>
                                @if ($profile->username)
                                    <p><strong>Username:</strong> {{ $profile->username }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
