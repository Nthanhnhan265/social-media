<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    protected $primaryKey = 'notification_id';
    public $timestamps = true;
    protected $fillable = ['notification_id', "receiver", "content", "status","type_id","type"]; 

}
