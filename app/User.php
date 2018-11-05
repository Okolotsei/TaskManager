<?php
/**
 * Created by PhpStorm.
 * User: vgalatin
 * Date: 03.11.2018
 * Time: 13:52
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model

{

    public $timestamps = false;

    public function scopeAuthuser($query)
    {
        return $query->where([['login','=',$_POST['login']],['password','=',$_POST['pasword']]]);
    }
}