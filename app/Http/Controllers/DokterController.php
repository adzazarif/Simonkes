<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Alamat;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function index()
    {
        return view('layout.dokter.profile', [
            "title" => "Profile Dokter"
        ]);
    }

    public function store(Request $request)
    {
        $formData = $request->all();

        $dokter = new Dokter([
            "nama_dokter" => $formData['nama_dokter'],
            "spesialisasi" => $formData['spesialisasi']
        ]);

        $personalInfo = new PersonalInfo([
            "tgl_lahir" => $formData["tgl_lahir"],
            "jenis_kelamin" => $formData["jenis_kelamin"],
            "no_telepon" => $formData["no_telepon"],
        ]);

        $alamat = new Alamat([
            "provinsi" => $formData["provinsi"],
            "kab_kota" => $formData["kab_kota"],
            "kecamatan" => $formData["kecamatan"],
            "detail_alamat" => $formData["detail_alamat"]
        ]);

        $alamat->save();
        $alamatId = $alamat->id;
        $almt = Alamat::find($alamatId);
        $personalInfo->alamat()->associate($almt);
        $personalInfo->save();
        $personalInfoId = $personalInfo->id;
        $prsnlInfo = PersonalInfo::find($personalInfoId);
        $dokter->personal_info()->associate($prsnlInfo);
        $dokter->save();
    }
}
