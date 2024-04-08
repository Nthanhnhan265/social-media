<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGroup extends Model
{
    use HasFactory;
    protected $table = 'postgroup';
    
    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id_fk');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id_fk');
    }
}
