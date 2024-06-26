<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'key',
        'is_active',
        'is_encrypted',
    ];
    public function key_permissions()
    {
        return $this->hasMany(KeyPermission::class);
    }
}
