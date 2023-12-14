<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishPoll extends Model
{
    use HasFactory;

    protected $table = 'publish_polls';

    protected $fillable = [  
        'publish_poll_id',
        'poll_title',
        'poll_desc',
        'media_path',
        'Approval_Letter',
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
        // Add other fields as needed
    ];
    
    // PublishPoll.php

   public function votes()
    {
        return $this->hasMany(Vote::class, 'poll_id');
    }

    // Add any relationships or additional methods as needed
}


