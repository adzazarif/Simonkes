<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dokter extends Model
{


    protected $table = 'dokters';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'nama_dokter', 'spesialisasi', 'personal_infos_id'
    ];

    public function personal_info(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'personal_infos_id');
    }
    public function users():HasOne
    {
        return $this->hasOne(User::class, 'users_id');
    }
}
