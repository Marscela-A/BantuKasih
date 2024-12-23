@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:70px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="title" style="text-align:center;">@lang('crud.btn_tambah')</h2>
            <div class="card", style="justify-content-center">
                <form action="{{ route('profile_store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>@lang('crud.phone_number')</label>
                        <input type="text" name="phone_number" required>
                    </div>
                    
                    <div class="form-group">
                        <label>@lang('crud.address')</label>
                        <input type="text" name="address" required>
                    </div>

                    <div class="form-group">
                        <label>@lang('crud.sex')</label>
                        <select name="sex">
                            @foreach (['perempuan', 'pria'] as $sexOption)
                                <option value="{{$sexOption}}">{{$sexOption}}</option>
                            @endforeach
                        </select>
                    </div>
                    <form action="{{route('profile_store')}}" method="POST" style="display:inline;">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-primary"">@lang('crud.btn_simpan')</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    form {
        max-width: 400px;
        margin: 0 auto;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"], input[type="email"], input[type="number"], input[type="file"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
</style>
@endsection
