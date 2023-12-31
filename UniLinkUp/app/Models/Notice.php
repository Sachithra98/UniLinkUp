<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $primaryKey = 'Post_Id'; 
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
