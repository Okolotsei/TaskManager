<?php
/**
 * Created by PhpStorm.
 * User: vgalatin
 * Date: 03.11.2018
 * Time: 13:27
 */

namespace App\Http\Controllers;

use App\User as Users;
use App\Users_information as UserInf;

//use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    public function authorization()
    {

        $usercheck = Users::Authuser();
        $count = $usercheck->count();

        if ($count == 1) {
            $userarray = $usercheck->get()->toArray();
            $user = $userarray[0];
            unset($user['password']);

            $userinf = UserInf::Getinf($user['user_id']);

            session($user);
            session($userinf);
            $fio = $userinf['FIO'];

            session(['message' => "$fio, вы успешно авторизировались"]);


            return view('deffault');


        } else {


            session(['login' => $_POST['login']]);
            session(['message' => 'ошибка в данных']);

            return redirect()->route('auth');

        }

    }

}