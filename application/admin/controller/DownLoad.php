<?php
/**
 * Created by PhpStorm.
 * User: wx
 * Date: 2018/4/11
 * Time: 16:37
 */

namespace app\admin\controller;

use think\Db;

class DownLoad extends BaseController
{
    public function _initialize(){
        $this->checkSession();
        $auth = 16;
        $this->checkAuth($auth);
    }
    public function index(){
        $download=Db::table('down_load')->paginate(10);
        $page = $download->render();
        $this->assign(['download'=>$download,'page'=>$page]);
        return $this->fetch();
    }

    public function add(){
        if($_POST){
            $data=input('');
            $res = Db::table('down_load')->insert($data);
            if($res){
                $this->success('添加成功','index');
            }
        }
        return $this->fetch();
    }

    public function edit(){
        if($_POST){
            $data=input('');
            $res = Db::table('down_load')->where('id',$data['id'])->update($data);
            if($res){
                $this->success('修改成功','index');
            }else{
                $this->error('修改失败');
            }
        }
        $id=input('get.id');
        $download=Db::table('down_load')->where('id',$id)->find();
        $this->assign('down_load',$download);
        return $this->fetch();
    }

    public function del(){
        $id=input('get.id');
        $res = Db::table('down_load')->where('id',$id)->delete();
        if($res){
            $this->success('删除成功','index');
        }
    }
}