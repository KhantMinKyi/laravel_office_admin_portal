<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable =['name','city_id','township_id','address'];

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function township(){
        return $this->belongsTo(Township::class);
    }
    public function departments(){
        return $this->hasMany(Department::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
