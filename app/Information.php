<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table= "informations";
    protected $guarded=["_token","logo"];
}
