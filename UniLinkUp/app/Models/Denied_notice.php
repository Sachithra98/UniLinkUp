<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denied_notice extends Model
{
    use HasFactory;
    protected $fillable = [
        'notice_id',
        'reason',
        'corrections'
    ];

    // Denied.php (model)
    public function notice()
    {
        return $this->belongsTo(Notice::class, 'notice_id');
    }
}
