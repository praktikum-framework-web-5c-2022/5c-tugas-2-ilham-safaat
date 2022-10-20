@extends("master")

@section("content")
<br>
  <h1 class="mt-5">Top 10 Matakuliah Tersulit di Universitas Singaperbangsa</h1>
  <ol>
  @forelse ($matakuliahs as $matakuliah)
  <li>{{$matakuliah}}</li>
  @empty
  @endforelse
  </ol>