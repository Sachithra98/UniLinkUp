<?php

namespace App\Models;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $primarykey='Batch_Id';
    protected $fillable = [
        'Batch_Id',
        'Faculty_Id',
    ];

   
}

    

