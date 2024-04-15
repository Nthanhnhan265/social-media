<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $timestapms = true;
    public function posts()
    {
        return $this->hasMany(Posts::class);
    }
}
