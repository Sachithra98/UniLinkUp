<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnlikeNotice extends Model
{
    use HasFactory;
    protected $fillable = ['notice_id'];

    public function notice()
    {
        return $this->belongsTo(PublishNotice::class, 'notice_id');
    }
}