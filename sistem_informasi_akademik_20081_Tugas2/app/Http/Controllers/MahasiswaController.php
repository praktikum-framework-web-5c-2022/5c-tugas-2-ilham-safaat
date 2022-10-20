<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //Raw
    public function insertRaw(){
        $data = DB::insert("INSERT INTO mahasiswa 
        (nim,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir) VALUES ('20106215','Gilang','L','Bekasi','BEKAASI','17 Juli 2002')");
        dump($data);
       }
    public function selectRaw(){
        $data=DB::select("SELECT * FROM Mahasiswa");
        dump($data);
    }
    public function updateRaw(){
        $data = DB::update("UPDATE mahasiswa SET nama='Maulana' WHERE nama='Gilang'");
        dump($data);
       }
    public function deleteRaw(){
        $data = DB::delete("DELETE FROM Mahasiswa WHERE nama= 'Maulana'");
        dump($data);
       }
    //QueryBuilder
   public function insertQueryBuilder(){
    $data = DB::table('Mahasiswa')->insert(
        [
            'nim' => '21093213',
            'nama' => 'Escanor',
            'jenis_kelamin' => 'L',
            'alamat' => 'Arab',
            'tempat_lahir' => 'Arab',
            'tanggal_lahir' => '16 Juli 2000',
        ]
        );
    dump($data);
   }
   public function selectQueryBuilder(){
    $data=DB::table("Mahasiswa")->get();
    dump($data);
   }
   public function updateQueryBuilder(){
    $data = DB::table('mahasiswa')
    ->where('nama', 'Escanor',)
    ->update(
        [
            'updated_at' => now(),
        ]
        );
    dump($data);
   }
   public function deleteQueryBuilder(){
    $data = DB::table('Mahasiswa')
    ->where('nama', 'Escanor')
    ->delete();
    dump($data);
   } 
   //Eloquent
   public function insertEloquent(){
    Mahasiswa::create(
        [
            'nim' => '21093214',
            'nama' => 'Ray Rizky Fauzi',
            'jenis_kelamin' => 'L',
            'alamat' => '?',
            'tempat_lahir' => '?',
            'tanggal_lahir' => '10 Juli 2000',
        ]
        );
    return "Data Berhasil Disimpan";
   }
   public function selectEloquent(){
    $data = Mahasiswa::all();
    dump($data);
   }
   public function updateEloquent(){
    Mahasiswa::where('nama', 'Ray Rizky Fauzi')->first()->update([
        'nama' => 'Fauzi Ray'
    ]);
    return "Data Berhasil di Ubah";
   }
   public function deleteEloquent(){
    $data = Mahasiswa::where('nama', 'Fauzi Ray')->delete();
    return "Data Berhasil Dihapus";
   }
}
