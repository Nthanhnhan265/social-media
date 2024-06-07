<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoLocation extends Model
{
    use HasFactory;
    protected $table = 'videolocation';
    protected $primaryKey = 'videolocation_id';
    protected $timestapms = true;
    public function videos()
    {
        return $this->hasMany(Video::class, 'video_location_fk');
    }
}
