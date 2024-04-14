<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $primaryKey = 'video_id';
    protected $timestapms = true;
    public function post()
    {
        return $this->belongsTo(Posts::class, 'ref_id_fk');
    }
    public function comment ()
    {
        return $this->belongsTo(Comment::class);
    }
}
