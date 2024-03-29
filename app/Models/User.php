<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'password',
        'first_name',
        'last_name',
        'full_name',
        'date_of_birth',
        'nrc',
        'gender',
        'nationality',
        'marital_status',
        'degree',
        'phone_1',
        'phone_2',
        'email',
        'email_verified_at',
        'address',
        'father_name',
        'contact_phone',
        'start_date',
        'position',
        'city_id',
        'township_id',
        'branch_id',
        'department_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function township(){
        return $this->belongsTo(Township::class);
    }
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
