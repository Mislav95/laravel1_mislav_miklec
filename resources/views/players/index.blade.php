@extends('layouts.app')

@section('content')

<table class="table">
<a class="btn btn-primary float-right" href="/players/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Player firtsname</th>
      <th scope="col">Player lastname</th>
      <th scope="col">Player year</th>
      <th scope="col">Club name</th>
      <th scope="col">Country name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($players as $player)
     <tr>
      <td><?= $player->id ?></td>
      <td><?= $player->player_firstname ?></td>
      <td><?= $player->player_lastname ?></td>
      <td><?= $player->player_year ?></td>
      <td><?= $player->club->club_name ?></td>
      <td><?= $player->country->country_name ?></td>
      
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
