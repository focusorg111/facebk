<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    protected $table='hobies';

    protected $primaryKey ='hobie_id';

    protected $fillable=['user_id','option_1','option_2', 'option_3'];
}
