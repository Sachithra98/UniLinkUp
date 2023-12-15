<?php
//dhilmi
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAchieve extends Model
{
    use HasFactory;
    protected $primaryKey = 'Achieve_Id'; // Assuming 'Achieve_Id' is the primary key

    // Relationship: AdminAchieve hasMany Admins
    public function admins()
    {
        return $this->hasMany(Admin::class, 'Admin_Id', 'Admin_Id');
    }
}
