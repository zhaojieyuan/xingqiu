<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/14
 * Time: 17:00
 */

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller{

    public function Login(){
        return view("/admin/login");
    }

    public function Index(){
        return view("/admin/index");
    }

    public function Add(){
        return view("/admin/add");
    }

    public function Cate(){
        return view("/admin/cate");
    }

    public function Page(){
        return view("/admin/page");
    }

    public function Main(){
        return view("/admin/list");
    }

    public function Tips(){
        return view("/admin/tips");
    }

    public function Pass(){
        return view("/admin/pass");
    }

    public function Cate_add(){
        return view("/admin/cate_add");
    }
}