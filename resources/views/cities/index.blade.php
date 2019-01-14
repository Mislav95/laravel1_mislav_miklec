@extends('layouts.app')

@section('content')

<table class="table">
<a class="btn btn-primary float-right" href="/cities/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">City name</th>
      <th scope="col">Country name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cities as $city)
    <tr>
      <td><?= $city->id ?></td>
      <td><?= $city->city_name ?></td>
      <td><?= $city->country->country_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection