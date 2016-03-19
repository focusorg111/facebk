<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    protected $table='employee';

    protected $primaryKey ='employee_id';

    protected $fillable=['user_id','current_employee','working_since', 'designation'];
}
