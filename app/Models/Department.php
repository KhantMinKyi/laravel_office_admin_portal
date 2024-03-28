<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name','city_id','township_id','branch_id'];

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function township(){
        return $this->belongsTo(Township::class);
    }
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
