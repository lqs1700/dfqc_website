<?php
/**
 * Created by PhpStorm.
 * User: wx
 * Date: 2018/3/14
 * Time: 14:41
 */

namespace app\admin\controller;
use think\Db;

class JoinUs extends BaseController
{
    public function _initialize()
    {
        $this->checkSession();
        $auth = 14;
        $this->checkAuth($auth);
    }
    public function index()
    {
        $joinlist = DB::table('join_us')->order('id desc')->paginate(15);
        $page = $joinlist->render();
        $this->assign(['page'=>$page, 'joinlist'=>$joinlist]);
        return $this->fetch();
    }

    public function agree()
    {
        $id = input('get.id');
        $res = Db::table('join_us')->update(['status' => 2,'id'=>$id]);
        if($res){
            $this->success("审核通过",'index');
        }
    }

    public function refuse()
    {
        $id = input('get.id');
        $res= Db::table('join_us')->update(['status' => 3,'id'=>$id]);
        if($res){
            $this->success("审核不通过",'index');
        }
    }
}