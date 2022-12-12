<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function anggota($value='')
    {
        return $this->belongsTo(anggota::class);
    }
    public function buku($value='')
    {
        return $this->belongsTo(buku::class);
    }
}
