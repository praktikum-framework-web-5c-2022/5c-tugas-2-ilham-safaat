@extends("master")

@section("content")
<div class="container.fluid">
<br>
  <h1 class="mt-5">Top 10 Dosen Terbaik di Universitas Singaperbangsa</h1>
  <ol>
  @forelse ($dosens as $dosen)
  <li>{{$dosen}}</li>
  @empty
  @endforelse
  </ol>
  </div>