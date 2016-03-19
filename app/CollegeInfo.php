<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeInfo extends Model
{
    protected $table='college';

    protected $primaryKey ='college_id';

    protected $fillable=['user_id','college_name','passing_year', 'course'];
}
