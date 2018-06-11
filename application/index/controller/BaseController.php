<?php
/**
 * Created by PhpStorm.
 * User: wx
 * Date: 2018/4/4
 * Time: 14:30
 */

namespace app\index\controller;

use think\Controller;
use think\Db;

class BaseController extends Controller
{
    public function getNav0(){
        $nav0 = Db::table('nav')->where('cid',0)->select();
        return $nav0;
    }
    public function getNav1(){
        $nav1 = Db::table('nav')->where('cid','<>',0)->select();
        return $nav1;
    }
    public function getInfo(){
        $info = Db::table('contact_us')->where('id',1)->find();
        return $info;
    }
    public function getCode()
    {
        $code = Db::table('qr_code')->select();
        return $code;
    }
}