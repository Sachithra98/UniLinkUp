<?php

namespace App\Models;
use App\Models\LikeNotice;
use App\Models\UnlikeNotice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishNotice extends Model
{
    use HasFactory;
    protected $table = 'publish_notices';

    protected $fillable = [
        'Publish_notice_id',
        'Editor_Id',
        'Title',
        'Description',
        'media_path',
        'Approval_Letter',
        'Society_Id',
        'Dep_Id',
        'Faculty_Id',
     ];

     public function likes()
    {
        return $this->hasMany(LikeNotice::class, 'notice_id', 'Publish_notice_id');
    }

    public function unlikes()
    {
        return $this->hasMany(UnlikeNotice::class, 'notice_id', 'Publish_notice_id');
    }
}
