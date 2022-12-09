<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    public function detail_obat(){
        return $this->hasMany(detail_obat::class);
    }

    public function detail_diagnosis(){
        return $this->hasMany(detail_diagnosis::class);
    }

}
