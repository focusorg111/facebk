<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';

    protected $primaryKey ='news_id';

    protected $fillable=['topic_name','topic_description','date', 'created_by'];
}
