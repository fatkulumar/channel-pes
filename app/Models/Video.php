<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'video';

    public function Admin()
    {
        return $this->belongsTo(Admin::class, 'id_pesantren_channel', 'id_pesantren');
    }
}