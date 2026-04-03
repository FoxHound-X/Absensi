<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'id_guru',
        'nama_guru',
        'mata_pelajaran',
        'no_telp',
    ];
}
