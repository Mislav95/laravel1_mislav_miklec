@extends('layouts.app')

@section('content')

<table class="table">
<a class="btn btn-primary float-right" href="/countries/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Country code</th>
      <th scope="col">Country name</th>
      <th scope="col">Country continent</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($countries as $country)
    <tr>
      <td><?= $country->id ?></td>
      <td><?= $country->country_code ?></td>
      <td><?= $country->country_name ?></td>
      <td><?= $country->country_continent ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
