@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/countries" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="country_code" type="text" placeholder="Country code">
</div>
<div class="form-group">
    <input class="form-control" name="country_name" type="text" placeholder="Country name">
</div>
<div class="form-group">
    <input class="form-control" name="country_continent" type="text" placeholder="Country continent">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection