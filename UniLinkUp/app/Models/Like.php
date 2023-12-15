<?php

namespace App\Models;

use App\Models\LikeNotice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['Student_Id', 'Publish_notice_id'];

    public function notice()
    {
        return $this->belongsTo(PublishNotice::class, 'Publish_notice_id');
    }

    // Define the relationship to the user/student
    public function user()
    {
        return $this->belongsTo(Student::class, 'Student_Id');
    }
}
