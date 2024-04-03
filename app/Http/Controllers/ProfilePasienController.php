<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Pasien;
use App\Models\Pegawai;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePasienController extends Controller
{
    public function index()
    {
        return view("layout.pasien.profile",[
            "title"=> "Profile Pasien",
        ]);
    }

    public function store(Request $request)
    {
        $alamat = Alamat::create([
            "provinsi" => $request->provinsi,
            "kab_kota" => $request->kab_kota,
            "kecamatan" => $request->kecamatan,
            "detail_alamat" => $request->detail_alamat,
        ]);

        $request->validate([
            'foto'=>'required|mimes:jpg,jpeg,png,bmp',
        ]);

        $imageName = '';
        if ($image = $request->file('foto')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/uploads', $imageName);
        }

        $personalInfo = PersonalInfo::create([
            "tgl_lahir"=> $request->tgl_lahir,
            "jenis_kelamin"=> $request->jenis_kelamin,
            "no_telepon"=> $request->no_telepon,
            "foto"=> $imageName,
            "alamats_id"=> $alamat->id,
        ]);

        $pegawai = Pegawai::create([
            "nama_pegawai"=> $request->nama,
            "jabatan"=> "Manajer",
            "personal_info" => $personalInfo->id,
            
        ]);
        
        Pasien::create([
            "nama_pasien"=> $pegawai->nama_pegawai,
            "pegawais_id"=> $pegawai->id,
            "users_id"=> Auth::user()->id,
        ]);

        return redirect("/profile")->with("success","Data berhasil ditambahkan");
    }
}
