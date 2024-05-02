<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;
    protected $table = 'relationships';
    protected $primaryKey = 'relationship_id';
    public $timestamps = true;
    protected $fillable = ['relationship_id', "sender", "receiver", "status"]; 

    
}
