<?php
// Vote.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['choice', 'poll_id'];

    protected $primaryKey = 'vote_id';

    public function publishPoll()
    {
        return $this->belongsTo(PublishPoll::class, 'poll_id');

        return $this->belongsTo(PublishPoll::class, 'poll_id', 'poll_id');

    }

}
