<?php
/**
 * Created by PhpStorm.
 * User: vgalatin
 * Date: 05.11.2018
 * Time: 21:26
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Users_information extends Model
{

    public $timestamps = false;

    public function scopeGetInf($query,$userid)
    {
        $array=$query->where('user_id', $userid)->get()->toArray();
        return $array[0];
    }

}