<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $table = 'follows';
    protected $primaryKey = 'follow_id';
    public $timestamps = true;
    protected $fillable = ['follow_id', "user_id_fk", "follow_type", "follow_id_fk"]; 

    public function user() { 
        return $this->belongsTo(Follow::class,"user_id_fk");
    }
}
