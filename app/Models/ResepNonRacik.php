<?php

namespace App\Models;

use App\Models\Obat;
use App\Models\Signa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResepNonRacik extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'resep_non_raciks';

    public function obat() {
        return $this->belongsToMany(Obat::class, 'detail_resep_non_racik', 'id_resep_non_racik', 'obatalkes_id');
    }
    
    public function signa() {
        return $this->belongsToMany(Signa::class, 'detail_resep_non_racik', 'id_resep_non_racik', 'signa_id');
    }
}
