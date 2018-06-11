<?php
/**
 * Created by PhpStorm.
 * User: wx
 * Date: 2018/4/11
 * Time: 10:15
 */

namespace app\admin\controller;


use think\Db;

class ShopSite extends BaseController
{
    public function _initialize()
    {
        $this->checkSession();
        $auth = 15;
        $this->checkAuth($auth);
    }

    public function index(){
        $sites = Db::table('shop_site')->field('*,CASE WHEN cid = 1 THEN \'省级\' WHEN cid = 2 THEN \'其他\'  END AS \'cid\'')->paginate(15);
        $page = $sites->render();
        $this->assign(['sites'=>$sites,'page'=>$page]);
        return $this->fetch();
    }

    public function add(){
        if($_REQUEST){
            $data = input('');
            $res = Db::table('shop_site')->insert($data);
            if($res){
                $this->success('添加成功','index');
            }
        }
       return $this->fetch();
    }

    public function edit(){
        if($_POST){
            $data=input('');
            $res = Db::table('shop_site')->where('id', '=', $data['id'])->update($data);
            if ($res) {
                $this->success('修改成功', 'index');
            }
        }
        $id=input('get.id');
        $site = Db::table('shop_site')->where('id', '=', $id)->find();
        $this->assign('site',$site);
        return $this->fetch();
    }
    public function del(){
        $id = input('get.id');
        $res = Db::table('shop_site')->where('id','=',$id)->delete();
        if($res){
            $this->success('删除成功','index');
        }
    }
}