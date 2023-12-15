<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['Society_Name'];

    protected static function booted()
    {
        static::creating(function ($society) {
            $society->Society_Id = 'S' . str_pad(Society::count() + 1, 3, '0', STR_PAD_LEFT);
        });
    }

}
