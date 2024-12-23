@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:70px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title" style="text-align:center;">@lang('crud.btn_ubah')</h1>
            <div class="card", style="justify-content-center">
                <form action="{{ route('profile_updates', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>@lang('crud.phone_number')</label>
                        <input type="text" name="phone_number" value="{{ $user->profile->phone_number }}" required>
                    </div>

                    <div class="form-group">
                        <label>@lang('crud.address')</label>
                        <input type="text" name="address" value="{{ $user->profile->address }}" required>
                    </div>

                    <div class="form-group">
                        <label>@lang('crud.sex')</label>
                        <select name="sex">
                            @foreach (['perempuan', 'pria'] as $sexOption)
                                <option value="{{$sexOption}}">{{$sexOption}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('crud.btn_perbarui')</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
