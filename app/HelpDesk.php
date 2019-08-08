<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpDesk extends Model
{
    protected $table= "help_desk";
    protected $guarded=["_token"];
}
