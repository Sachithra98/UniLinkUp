<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = ['Faculty_Name'];

    protected static function booted()
    {
        static::creating(function ($faculty) {
            $faculty->Faculty_Id = 'F' . str_pad(Faculty::count() + 1, 3, '0', STR_PAD_LEFT);
        });
    }
}
