<?php

namespace App\Models;
use App\Models\PublishNotice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeNotice extends Model
{
    use HasFactory;

    protected $fillable = ['notice_id'];

    public function notice()
    {
        return $this->belongsTo(PublishNotice::class, 'notice_id');
    }
}
