<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded=[];
    public function pekerjaan($value='')
    {
        return $this->belongsTo(pekerjaan::class);
    }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama','like','%' . $search . '%');
        });
    }
}
