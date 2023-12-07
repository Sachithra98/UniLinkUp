<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'Dep_Id',
        'Dep_Name',
        'Faculty_Id',
    ];

    protected static function booted()
    {
        static::creating(function ($department) {
            $latestDepartment = static::latest('Dep_Id')->first();
            $nextId = $latestDepartment ? (int)substr($latestDepartment->Dep_Id, 1) + 1 : 1;
            $department->Dep_Id = 'D' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
        });
    }
}
