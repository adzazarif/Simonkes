<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alamat extends Model
{
    protected $table = 'alamats';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'provinsi', 'kab_kota', 'kecamatan', 'detail_alamat'
    ];

    public function personal_info():HasOne
    {
        return $this->hasOne(PersonalInfo::class, 'alamats_id');
    }
}
