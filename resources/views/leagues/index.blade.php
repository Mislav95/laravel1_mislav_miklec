@extends('layouts.app')

@section('content')

<table class="table">
<a class="btn btn-primary float-right" href="/leagues/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">League name</th>
      <th scope="col">Country name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($leagues as $league)
     <tr>
      <td><?= $league->id ?></td>
      <td><?= $league->league_name ?></td>
      <td><?= $league->country->country_name ?></td>
      
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
