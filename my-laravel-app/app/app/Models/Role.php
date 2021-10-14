<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $table = 'roles';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'role_name'
    ];

    protected $casts = [
        'id' => 'integer'
    ];
    
}
