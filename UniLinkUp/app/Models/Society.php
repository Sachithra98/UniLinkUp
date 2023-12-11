<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['Society_Id', 'Society_Name'];

}
