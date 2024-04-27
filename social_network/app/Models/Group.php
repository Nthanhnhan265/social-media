<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $primaryKey = 'group_id';
    protected $timestapms = true;
  
    public function group()
    {
        return $this->hasMany(UserGroup::class);
    }
    public function post_group(){
        return $this->hasMany(PostGroup::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Posts::class, 'postgroup');
    }
    public function usergroups()
    {
        return $this->hasMany(Usergroup::class, 'group_id_fk');
    }
}
