<?php 

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Admin\Admin;

use App\Helpers\HasAttributes;
use App\Helpers\HasRoles;

class User extends Authenticatable
{
    use Admin, HasAttributes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
