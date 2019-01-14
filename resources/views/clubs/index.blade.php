@extends('layouts.app')

@section('content')



<table class="table">
<a class="btn btn-primary float-right" href="/clubs/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Club name</th>
      <th scope="col">Country name</th>
      <th scope="col">City name</th>
      <th scope="col">League name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($clubs as $club)
    <tr>
      <td><?= $club->id ?></td>
      <td><?= $club->club_name ?></td>
      <td><?= $club->country->country_name ?></td>
      <td><?= $club->city->city_name ?></td>
      <td><?= $club->league->league_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection