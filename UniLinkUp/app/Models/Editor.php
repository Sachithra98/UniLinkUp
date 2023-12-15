<?php

namespace App\Models;
//jayani-starts
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'Editor_Id';
    protected $keyType = 'string';
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
protected static function booted()
{
    static::creating(function ($editor) {
        $editor->Editor_Id = 'E' . str_pad(Editor::count() + 1, 3, '0', STR_PAD_LEFT);
    });
}
//jayani-ends
}
