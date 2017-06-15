<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/13
 * Time: 17:28
 */

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Overtrue\Pinyin\Pinyin;

class IndexController extends Controller{

//首页
    public function Index(){
        return view("/index/index");
    }

//主页面
    public function Main(){

        return view("/index/main");
    }

//注册页面
    public function Register(){

        return view("/index/register");
    }

//登陆页面
    public function Log(){

        return view("/index/log");
    }

//    中文拼音包
    public function China(){
        $pinyin = new Pinyin();
        $data = $pinyin->abbr('带着希望去旅行',',');
        print_r($data);
    }


}