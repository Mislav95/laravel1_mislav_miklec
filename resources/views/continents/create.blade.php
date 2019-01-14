@extends('layouts.app')

@section('content')

<form method="post" action="/continents">
@csrf

<div class="form-group">
    <input class="form-control" name="continent_name" type="text" placeholder="Continent name">
</div>
<div class="form-group">
    <input class="form-control" name="number_of_countries" type="text" placeholder="Number of countries">
</div>
<div class="form-group">
    <input class="form-control" name="native_name" type="text" placeholder="Native name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection