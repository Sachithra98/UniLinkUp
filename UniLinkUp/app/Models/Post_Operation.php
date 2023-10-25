<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Operation extends Model
{
    use HasFactory;
    protected $primaryKey = 'Viewer_Id';
    public $timestamps = false;
}
