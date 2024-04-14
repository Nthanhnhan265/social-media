<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageLocation extends Model
{
    use HasFactory;
    protected $table = 'imagelocation';
    protected $primaryKey = 'imagelocation_id';
    protected $timestapms = true;
    public function images()
    {
        return $this->hasMany(Image::class, 'img_location_fk');
    }
}
