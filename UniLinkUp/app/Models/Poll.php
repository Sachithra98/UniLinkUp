<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
    'poll_title',
    'poll_desc',
    'media_path' ,
    'Approval_Letter',
    'question',
    'option1',
    'option2',
    'option3',
    'option4',
    'option5'];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
