<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Departemen extends Model
{


    protected $table = 'departemens';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'nama_departemens', 'nama_manajer', 'thn_berdiri'
    ];

    public function pegawai():HasMany
    {
        return $this->hasMany(Pegawai::class, 'pegawais_id');
    }
}
