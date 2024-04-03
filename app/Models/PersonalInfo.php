<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PersonalInfo extends Model
{
    
    protected $table = 'personal_infos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'tgl_lahir', 'jenis_kelamin', 'no_telepon', 'foto', 'alamat_id'
    ];

    public function alamat():BelongsTo
    {
        return $this->belongsTo(Alamat::class, 'alamats_id');
    }

    public function pegawai() : HasOne {
        return $this->hasOne(Pegawai::class, 'personal_infos_id');
    }

    public function dokter() : HasOne {
        return $this->hasOne(Dokter::class, 'personal_infos_id');
    }

    public function apoteker():HasOne
    {
        return $this->hasOne(Apoteker::class, 'personal_infos_id');
    }
}
