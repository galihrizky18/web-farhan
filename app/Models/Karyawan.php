<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_karyawan', 'id_karyawan');
    }
    public function absensi()
    {
        return $this->hasOne(AbsensiKaryawan::class, 'id_karyawan', 'id_karyawan');
    }
}
