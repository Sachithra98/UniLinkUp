<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'Society_Id',
        'Society_Name',
        'Faculty_Id',
        
    ];

    
    protected static function booted()
    {
        static::creating(function ($society) {
            $latestSociety = static::latest('Society_Id')->first();
            $nextId = $latestDepartment ? (int)substr($latestDepartment->Society_Id, 1) + 1 : 1;
            $society->Society_Id = 'S' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
        });
    }
}
