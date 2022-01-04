<?php

namespace App\Models;

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
}
