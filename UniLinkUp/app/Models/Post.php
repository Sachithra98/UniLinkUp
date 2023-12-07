<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Change 'Post_Id' to 'id'
    public $incrementing = true; // This indicates that 'Post_Id' is an auto-incrementing field
    public $timestamps = true;



    protected $fillable = [
        
        'Editor_Id',
        'Title',
        'Description',
        'Expire_Date',
        'media_path',
        'Approval_Letter',
        'Society_Id',
        'Dep_Id',
        'Faculty_Id'
    ];
}
