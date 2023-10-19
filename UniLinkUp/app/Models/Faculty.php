<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'Faculty_Id',
        'Faculty_Name'

    ];
}
