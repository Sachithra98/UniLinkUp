<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denied extends Model
{
    use HasFactory;

    protected $fillable = [
        'poll_id',
        'reason',
        'corrections'
    ];

    // Denied.php (model)
    public function poll()
    {
        return $this->belongsTo(Poll::class, 'poll_id');
    }


}
