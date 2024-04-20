<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $primaryKey = 'video_id';
    protected $fillable = ["video_id","url","ref_id_fk","video_location_fk"]; 
    public $timestamps = true;
    public function post()
    {
        return $this->belongsTo(Posts::class, 'ref_id_fk');
    }

}
