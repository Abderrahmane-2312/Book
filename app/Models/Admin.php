<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Authenticatable implements AuthenticatableContract 
{
    use HasFactory;

    // Specify the table name if it's different from the default 'admins'
    protected $table = 'admins';

    // Fillable fields
    protected $fillable = [
        'name', 'email', 'password',
    ]; 

    // Hidden fields
    protected $hidden = [
        'password', 'remember_token',
    ];
}
