@extends("master")

@section("content")
<br>
  <h1 class="mt-5">Top 10 Mahasiswa Terbaik di Universitas Singaperbangsa</h1>
  <ol>
  @forelse ($mahasiswas as $mahasiswa)
  <li>{{$mahasiswa}}</li>
  @empty
  @endforelse
  </ol>