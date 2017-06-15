<?php
/**
 * Created by PhpStorm.
 * User: 金鹏哥哥
 * Date: 2017/6/10
 * Time: 7:49
 */

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	public function show()
    {
        $callback = Input::get('callback');
        $username = Input::get('name');
        $pwd = Input::get('pwd');

        $data = DB::table('user')->get();
        foreach ($data as $user) {
            $u_name = $user->username;
            $u_pwd = $user->password;
        }
        if ($username != $u_name || $pwd != $u_pwd)
        {
            echo $callback."(".json_encode(0).")";
        }
        else
        {
            setcookie('username',$username);
            echo $callback."(".json_encode($u_name).")";
        }
    }
}
