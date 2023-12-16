<?php

namespace App\Models;
use App\Models\PublishEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeEvent extends Model
{
    use HasFactory;
    protected $fillable = ['event_id'];

    public function event()
    {
        return $this->belongsTo(PublishEvent::class, 'event_id');
    }
}
