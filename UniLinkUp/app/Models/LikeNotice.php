<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeNotice extends Model
{
    use HasFactory;

    public function students()
    {
         return $this->belongsToMany(Student::class);
    }

    public function notice()
    {
        return $this->hasOne(PublishNotice::class, 'Publish_notice_id');
    }

}
