<?php

namespace App\Models;

use App\Models\LikeNotice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['Student_Id', 'Publish_notice_id'];

    public function post()
    {
        return $this->belongsTo(LikeNotice::class, 'Publish_notice_id');
    }
}
