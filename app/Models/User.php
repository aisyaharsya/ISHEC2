<?php

namespace App\Models;

// use App\Models\User;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\reservasi;
use App\Models\RekamMedis;
use App\Models\DetailJadwal;
use App\Models\DoctorSchedule;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $hidden = ['password'];
    // protected $fillable=['nama', 'email', 'password'];
    /**
     * Get all of the reservasi for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservasi(): HasMany
    {
        return $this->hasMany(reservasi::class);
    }
    /**
     * Get all of the rekammedis for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rekammedis(): HasMany
    {
        return $this->hasMany(RekamMedis::class);
    }
}



// class User extends Model
// {
//     use HasApiTokens, HasFactory, Notifiable;

//     protected $fillable=[
//         'username',
//         'email',
//         'password'
//     ];
//     public function RekamMedis()
//     {
//         return $this->hasMany(RekamMedis::class);
//     }
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $guarded = 'id';

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    // public function DoctorSchedule()
    // {
    //     return $this->hasMany(DoctorSchedule::class);
    // }

//     public function DetailJadwal()
//     {
//         return $this->hasMany(DetailJadwal::class);
//     }
// }
