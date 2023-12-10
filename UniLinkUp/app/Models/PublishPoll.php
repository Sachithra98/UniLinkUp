<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishPoll extends Model
{
    use HasFactory;

    protected $table = 'publish_polls';

    protected $fillable = [
        'poll_id',
        'poll_title',
        'poll_desc',
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
        // Add other fields as needed
    ];
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
    // Add any relationships or additional methods as needed
}


