<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

// Route::get('/dosen', [DosenController::class, 'dosen']);
Route::get('/dosenSelectRaw', [DosenController::class, 'selectRaw']);
Route::get('/dosenSelectQueryBuilder', [DosenController::class, 'selectQueryBuilder']);
Route::get('/dosenSelectEloquent', [DosenController::class, 'selectEloquent']);
Route::get('/dosenInsertRaw', [DosenController::class, 'insertRaw']);
Route::get('/dosenInsertQueryBuilder', [DosenController::class, 'insertQueryBuilder']);
Route::get('/dosenInsertEloquent', [DosenController::class, 'insertEloquent']);
Route::get('/dosenDeleteRaw', [DosenController::class, 'deleteRaw']);
Route::get('/dosenDeleteQueryBuilder', [DosenController::class, 'deleteQueryBuilder']);
Route::get('/dosenDeleteEloquent', [DosenController::class, 'deleteEloquent']);
Route::get('/dosenUpdateRaw', [DosenController::class, 'updateRaw']);
Route::get('/dosenUpdateQueryBuilder', [DosenController::class, 'updateQueryBuilder']);
Route::get('/dosenUpdateEloquent', [DosenController::class, 'updateEloquent']);

Route::get('/mahasiswaSelectRaw', [MahasiswaController::class, 'selectRaw']);
Route::get('/mahasiswaSelectQueryBuilder', [MahasiswaController::class, 'selectQueryBuilder']);
Route::get('/mahasiswaSelectEloquent', [MahasiswaController::class, 'selectEloquent']);
Route::get('/mahasiswaInsertRaw', [MahasiswaController::class, 'insertRaw']);
Route::get('/mahasiswaInsertQueryBuilder', [MahasiswaController::class, 'insertQueryBuilder']);
Route::get('/mahasiswaInsertEloquent', [MahasiswaController::class, 'insertEloquent']);
Route::get('/mahasiswaDeleteRaw', [MahasiswaController::class, 'deleteRaw']);
Route::get('/mahasiswaDeleteQueryBuilder', [MahasiswaController::class, 'deleteQueryBuilder']);
Route::get('/mahasiswaDeleteEloquent', [MahasiswaController::class, 'deleteEloquent']);
Route::get('/mahasiswaUpdateRaw', [MahasiswaController::class, 'updateRaw']);
Route::get('/mahasiswaUpdateQueryBuilder', [MahasiswaController::class, 'updateQueryBuilder']);
Route::get('/mahasiswaUpdateEloquent', [MahasiswaController::class, 'updateEloquent']);

Route::get('/matakuliahSelectRaw', [MataKuliahController::class, 'selectRaw']);
Route::get('/matakuliahSelectQueryBuilder', [MataKuliahController::class, 'selectQueryBuilder']);
Route::get('/matakuliahSelectEloquent', [MataKuliahController::class, 'selectEloquent']);
Route::get('/matakuliahInsertRaw', [MataKuliahController::class, 'insertRaw']);
Route::get('/matakuliahInsertQueryBuilder', [MataKuliahController::class, 'insertQueryBuilder']);
Route::get('/matakuliahInsertEloquent', [MataKuliahController::class, 'insertEloquent']);
Route::get('/matakuliahDeleteRaw', [MataKuliahController::class, 'deleteRaw']);
Route::get('/matakuliahDeleteQueryBuilder', [MataKuliahController::class, 'deleteQueryBuilder']);
Route::get('/matakuliahDeleteEloquent', [MataKuliahController::class, 'deleteEloquent']);
Route::get('/matakuliahUpdateRaw', [MataKuliahController::class, 'updateRaw']);
Route::get('/matakuliahUpdateQueryBuilder', [MataKuliahController::class, 'updateQueryBuilder']);
Route::get('/matakuliahUpdateEloquent', [MataKuliahController::class, 'updateEloquent']);

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/dosen', function () {
//     $dosen = [
//         "Data_Mining"=>"Betha Nurina sari",
//         "Framework_Pemrograman_Web"=>"Aji Primajaya",
//         "Cloud_Computing"=>"Arip Solehudin",
//         "Teknopreneur"=>"Hannie",
//         "Blockchain"=>"Adhi Rizal", 
//         "Pemrograman_Berbasis_Mobile"=>"Purwantoro",
//         "Statistika_dan_Probabilitas"=>"Iqbal Maulana",
//         "Kecerdasan_Buatan"=>"Ratna Mufidah",
//         "Rekayasa_Perangkat_Lunak"=>"Oman Komarudin", 
//         "Analisis_Desain_Algoritma"=>"Intan Purnama Sari",];

//         return view('dosen')->with('dosens',$dosen);
// });

// Route::get('/mahasiswa', function () {
//     $mahasiswa = [
//         "Ilham Safaat",
//         "Lily",
//         "Joko Kendil",
//         "Frise Anesha Lutia",
//         "Hagi Azzam Azzikri", 
//         "Ilhan Firaldi",
//         "Ray Rizky Fawzy",
//         "Gilang Maulana",
//         "Rusdi Ngawi", 
//         "Fauzan Arista Alamsyah",];
  
//         return view('mahasiswa')->with('mahasiswas',$mahasiswa);
// });

// Route::get('/matakuliah', function () {
//     $matakuliah = [
//         "Data Mining",
//         "Framework Pemrograman Web",
//         "Cloud Computing",
//         "Teknopreneur",
//         "Blockchain", 
//         "Pemrograman Berbasis Mobile",
//         "Statistika dan Probabilitas",
//         "Kecerdasan Buatan",
//         "Rekayasa Perangkat Lunak", 
//         "Analisis Desain Algoritma",];
  
//         return view('matakuliah')->with('matakuliahs',$matakuliah);
// });