<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_diagnosis extends Model
{
    use HasFactory;

    public function diagnosis(){
        return $this->belongsTo(diagnosis::class);
    }

    public function RekamMedis(){
        return $this->belongsTo(RekamMedis::class);
    }
}
