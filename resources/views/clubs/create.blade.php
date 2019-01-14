@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/clubs" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="club_name" type="text" placeholder="Club name">
</div>
<div class="form-group">
    <select class="form-control" name="country_id">
        @foreach($countries as $country)
        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
    <select class="form-control" name="city_id">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
        @endforeach
        </div>
    </select>
    <div class="form-group">
    <select class="form-control" name="league_id">
        @foreach($leagues as $league)
        <option value="{{ $league->id }}">{{ $league->league_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection