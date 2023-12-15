<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class Editor extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        /*    'Editor_Id', */
           'Faculty_Id',
           'Batch_Id',
           'email',
           'password',
           'E_Name',
           'Society_Id',
           'Admin_Id',
           'Dep_Id'

   ];
//    protected static function booted()
// {
//     static::creating(function ($editor) {
//         $editor->Editor_Id = 'E' . str_pad(Editor::count() + 1, 3, '0', STR_PAD_LEFT);
//     });
// }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guard = 'editor';
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
         'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
