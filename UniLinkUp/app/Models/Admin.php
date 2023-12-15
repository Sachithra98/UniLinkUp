<?php
//jayani-starts
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'Admin_Id';
    protected $keyType = 'string';
    protected $fillable = [
          /* 'Admin_Id', */
          'email',
          'Admin_Name',
          'password'
        
];
protected static function booted()
{
    static::creating(function ($admin) {
        $admin->Admin_Id = 'A' . str_pad(Admin::count() + 1, 3, '0', STR_PAD_LEFT);
    });
}
//jayani-ends

public function achieve()
{
    return $this->belongsTo(AdminAchieve::class, 'Admin_Id', 'Admin_Id');
}


}