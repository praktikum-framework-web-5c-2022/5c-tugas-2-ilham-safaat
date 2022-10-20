<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    //Raw
    
    public function insertRaw(){
        $data = DB::insert("INSERT INTO dosen 
        (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir) VALUES ('20106215','Ilham','L','Bekasi','BEKAASI','17 Juli 2002')");
        dump($data);
       }
    public function selectRaw(){
    $data=DB::select("SELECT * FROM dosen");
    dump($data);
   }
   public function updateRaw(){
    $data = DB::update("UPDATE dosen SET nama='Safaat' WHERE nama='Ilham'");
    dump($data);
   }
   public function deleteRaw(){
    $data = DB::delete("DELETE FROM dosen WHERE nama= 'Safaat'");
    dump($data);
   }

   //Query Builder 

   public function insertQueryBuilder(){
    $data = DB::table('dosen')->insert(
        [
            'nidn' => '21093213',
            'nama' => 'Zeldris',
            'jenis_kelamin' => 'L',
            'alamat' => 'Arab',
            'tempat_lahir' => 'Arab',
            'tanggal_lahir' => '16 Juli 2000',
        ]
        );
    dump($data);
   }
   public function selectQueryBuilder(){
    $data=DB::table("dosen")->get();
    dump($data);
   }
   public function updateQueryBuilder(){
    $data = DB::table('dosen')
    ->where('nama', 'Zeldris',)
    ->update(
        [
            'updated_at' => now(),
        ]
        );
    dump($data);
   }
   public function deleteQueryBuilder(){
    $data = DB::table('dosen')
    ->where('nama', 'Zeldris')
    ->delete();
    dump($data);
   }

   //Eloquent

   public function insertEloquent(){
    Dosen::create(
        [
            'nidn' => '21093214',
            'nama' => 'Ilhan Firaldi',
            'jenis_kelamin' => 'L',
            'alamat' => '?',
            'tempat_lahir' => '?',
            'tanggal_lahir' => '10 Juli 2000',
        ]
        );
    return "Data Berhasil Diproses";
   } 
   public function selectEloquent(){
    $data = Dosen::all();
    dump($data);
   }
   public function updateEloquent(){
    Dosen::where('nama', 'Ilhan Firaldi')->first()->update([
        'name' => 'Firaldi Ilhan'
    ]);
    return "Data Berhasil di Ubah";
   }
   public function deleteEloquent(){
    $data = Dosen::where('nama', 'Firaldi Ilhan')->delete();
    dump($data);
   }
}
