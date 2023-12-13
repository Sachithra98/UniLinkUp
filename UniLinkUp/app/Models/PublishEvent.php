<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishEvent extends Model
{
    use HasFactory;
    protected $table = 'publish_events';

    protected $fillable = [
        'Publish_event_id',
        'Editor_Id',
        'Title',
        'Description',
        'media_path',
        'Approval_Letter',
        'Society_Id',
        'Dep_Id',
        'Faculty_Id',
     ];

    
}
