<?php

namespace App\Models;

use App\Models\Fakultas;
use App\Models\Pembimbing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = [
      'id',
    ];

    public function pembimbing()
    {
      return $this->belongsTo(Pembimbing::class);
    }

    public function fakultas()
    {
      return $this->belongsTo(Fakultas::class);
    }

    // jika mau pencarian berdasarkan nim
    // public function getRouteKeyName()
    // {
    //     return 'nim';
    // }
}
