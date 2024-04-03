<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pasien extends Model
{
   protected $table = 'pasiens';
   protected $primaryKey = 'id';
   public $timestamps = true;
   public $incrementing = true;

   protected $fillable = [
        'nama_pasien', 'pegawais_id','users_id'
   ];

   public function pegawai():BelongsTo
   {
        return $this->belongsTo(Pegawai::class, 'pegawais_id');
   }

   public function users() : HasOne
   {
    return $this->hasOne(User::class, 'users_id');
   }
}
