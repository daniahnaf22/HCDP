<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pegawai',
        'nip',
        'jabatan',
        'unit_eselon',
        'satuan_kerja',
        'jenjang_pendidikan',
        'jurusan',
    ];
}
