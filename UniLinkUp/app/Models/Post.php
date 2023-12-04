<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//dhilmi
class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'Post_Id';

    public function postOperations()
    {
        return $this->hasMany(PostOperation::class, 'Post_Id', 'Post_Id');
    }

}
