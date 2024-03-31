<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pegawai extends Model
{


    protected $table = 'pegawais';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'nama_pegawai', 'jabatan', 'personal_infos_id', 'departements_id'
    ];

    public function personal_info(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'personal_infos_id');
    }

    public function departemen():BelongsTo
    {
        return $this->belongsTo(Departemen::class, 'departements_id');
    }

    public function pasien():HasMany
    {
        return $this->hasMany(Pasien::class, 'pasiens_id');
    }
}
