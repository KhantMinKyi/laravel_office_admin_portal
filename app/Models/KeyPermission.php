<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyPermission extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'key_id',
        'key',
        'is_active',
        'is_granded',
    ];
    public function key_description()
    {
        return $this->belongsTo(Key::class, 'key_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
