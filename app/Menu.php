<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table= "menu";
    protected $guarded=["_token", "files"];

    public $timestamps = false;

    public function root(){
        return $this->hasOne(Menu::class, "id", "parent");
    }

    public function child(){
        return $this->hasMany(Menu::class, "parent", "id");
    }
}
