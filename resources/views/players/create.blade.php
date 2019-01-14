@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/players" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="player_firstname" type="text" placeholder="Player firstname">
</div>
<div class="form-group">
    <input class="form-control" name="player_lastname" type="text" placeholder="PLayer lastname">
</div>
<div class="form-group">
    <input class="form-control" name="player_year" type="text" placeholder="Player year">
</div>
<div class="form-group">
    <select class="form-control" name="club_id">
        @foreach($clubs as $club)
        <option value="{{ $club->id }}">{{ $club->club_name }}</option>
        @endforeach
    </select>
    </div>

    <div class="form-group">

    <select class="form-control" name="country_id">
        @foreach($countries as $country)
        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection