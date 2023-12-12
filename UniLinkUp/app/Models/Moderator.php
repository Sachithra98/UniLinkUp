<?php

namespace App\Models;
//jayani-starts
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    use HasFactory;
    protected $fillable = [
        /* 'Moderator_Id', */
        'Position',
        'email',
        'password',
        'M_Name',
        'Dep_Id',
        'Admin_Id',
        'Society_Id',
        'Faculty_Id'
       
        
];

protected static function booted()
{
    static::creating(function ($moderator) {
        $moderator->Moderator_Id = 'M' . str_pad(Moderator::count() + 1, 3, '0', STR_PAD_LEFT);
    });
}
//jayani-ends
}
