<?php
//jayani-starts
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'Faculty_Id',
        'Staff_Email',
        'Staff_Password',
        'Staff_Name',
        'Dep_Id',
        'Admin_Id'
        
];

protected static function booted()
{
    static::creating(function ($staff) {
        $staff->Staff_Id = 'S' . str_pad(Staff::count() + 1, 3, '0', STR_PAD_LEFT);
    });
}
//jayani-ends
}
