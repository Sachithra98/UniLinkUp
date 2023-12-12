<?php
//jayani-starts
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'Admin_Id';
    protected $fillable = [
          'Admin_Id',
          'Admin_Email',
          'Admin_Name',
          'Admin_Password'
        
];
protected static function booted()
{
    static::creating(function ($admin) {
        $admin->Admin_Id = 'A' . str_pad(Admin::count() + 1, 3, '0', STR_PAD_LEFT);
    });
}
//jayani-ends
}