@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<div class="container" style="padding-top:70px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#AF0000;color:white; text-align:center">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="mr-auto">Akun</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Hello, welcome to BantuKasih.
                            </div>
                        </div>
                    @endif
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                @if($user->profile && $user->profile->photo)
                                    <img src="{{ $profilePhoto}}" class="img-thumbnail rounded mx-auto d-block">
                                @else
                                    <img src="{{ asset('img/profile.png') }}" class="img-thumbnail rounded mx-auto d-block">
                                @endif
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('profile_update', $user->id) }}" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <label for="pas_photo" class="col-md-12 col-form-label text-md-center", style="text-align:center">{{ __('Change Profile Photo') }}</label>
                                    <div class="row mb-10">
                                        <div class="col-md-12" style="padding-bottom:20px">
                                            <input id="photo" type="file" class="form-control" name="photo">
                                        </div>
                                    </div>
                                    <div class="col-md-12 offset-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Profile') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>  
                        <div class="card">
                            <div class="card-body">
                                <p><strong>{{__('crud.nama')}}:</strong> {{ $user->name }}</p>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                <p><strong>{{__('crud.gender')}}:</strong> {{ $user->gender }}</p>
                                <p><strong>{{__('crud.mobile_number')}}:</strong> {{ $user->mobile_number }}</p>
                                <p><strong>{{__('crud.address')}}:</strong> {{ $user->address }}</p>
                                <a href="{{route('profile_edit', $user->id)}}" class="btn btn-warning">@lang('crud.btn_ubah')</a>
                                <div class="col-md-12" style="padding-top:70px">
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">@lang('crud.btn_hapus')</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Add event listener for file input change
document.getElementById('photo').addEventListener('change', function(event) {
  // Update the profile picture preview
  var profilePicture = document.getElementById('profile-picture');
  profilePicture.src = URL.createObjectURL(event.target.files[0]);
});
</script>
@endsection
