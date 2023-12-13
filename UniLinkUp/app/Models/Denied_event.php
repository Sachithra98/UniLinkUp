<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denied_event extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'reason',
        'corrections'
    ];

    // Denied.php (model)
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
