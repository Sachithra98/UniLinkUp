<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//dhilmi
class Post_Operation extends Model
{
    use HasFactory;
    protected $primaryKey = 'Student_Id';

    public function post()
    {
        return $this->belongsTo(Post::class, 'Post_Id', 'Post_Id');
    }
}
