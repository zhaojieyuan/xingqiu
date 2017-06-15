<?php
namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{

    public function reg()
    {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $callback = $_GET['callback'];
        $data=DB::insert('insert into `user`(username,password)VALUES (?,?)',[$username,$password]);
        echo $callback.'('.json_encode($data).')';
    }
}

?>