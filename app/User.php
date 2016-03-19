<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable
{
    protected $table='users';

    protected $primaryKey ='user_id';

    protected $fillable=['user_name','email','password', 'Phone','first_name','last_name','display_name','marital_status','date_of_birth','hometown','current_location'];
}
