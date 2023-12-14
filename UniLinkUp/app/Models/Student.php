<?php
//jayani-start
namespace App\Models;

use App\Models\LikeNotice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
                    'Student_Id',
                      'Faculty_Id',
                      'Batch_Id',
                      'email',
                      'password',
                      'S_Name',
                      'Dep_Id',
                      'Admin_Id'
                    
    ];

    public function likedPosts()
    {
        return $this->belongsToMany(LikeNotice::class, 'likes', 'Student_Id', 'Publish_notice_id');
    }
}
//jayani_end
