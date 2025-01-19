@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:70px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title" style="text-align:center;">@lang('crud.btn_ubah')</h1>
            <div class="card", style="justify-content-center; padding-top:20px;">
                <form action="{{ route('profile_updates', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('crud.gender') }}</label>

                        <div class="col-md-6">
                            <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                <option value="">{{ __('crud.select') }}</option>
                                <option value="male">{{ __('crud.male') }}</option>
                                <option value="female">{{ __('crud.female') }}</option>
                            </select>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mobile_number" class="col-md-4 col-form-label text-md-end">{{ __('crud.mobile_number') }}</label>

                        <div class="col-md-6">
                            <input id="mobile_number" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number">

                            @error('mobile_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('crud.address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4 d-flex justify-content-center" style="padding-bottom:20px;">
                            <button type="submit" class="btn btn-danger" style="background-color: #AF0000; color: white;">@lang('crud.btn_perbarui')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .button {
        text-align: center; 
        padding-left: 100px;
        padding-right: 100px;
    }
</style>
@endsection
