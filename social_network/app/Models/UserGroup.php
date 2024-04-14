<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    protected $table = 'usergroup';
    protected $primaryKey = 'usergroup';
    protected $timestapms = true;
  
    public function post()
    {
        return $this->belongsTo(Group::class);
    }
  
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id_fk');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id_fk');
    }
}
