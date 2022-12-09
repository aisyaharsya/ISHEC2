<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorSchedule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function DetailJadwal()
    {
        return $this->hasMany(DetailJadwal::class);
    }
}
