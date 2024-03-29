<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    use HasFactory;
    protected $fillable = ['name','city_id'];

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function branches(){
        return $this->hasMany(Branch::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
