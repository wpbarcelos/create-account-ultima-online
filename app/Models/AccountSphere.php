<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSphere extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'users_sphere';

    protected $fillable = [
        'usersname',
        'usersemail',
        'userspassword'
    ];
}
