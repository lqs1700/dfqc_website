<?php
	namespace app\admin\controller;
	use think\Db;

	class Privilege extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 1;
		$this->checkAuth($auth);
	}
	//列表
	public function index()
	{
		$pri_group = Db::table('Privilege_group')->select();
		$privilege = Db::table('Privilege')->select();
		$this->assign(['pri_group'=>$pri_group, 'privilege'=>$privilege]);
		return $this->fetch();
	}
	
	//添加
	public function addPrivilege()
	{
		if(input('post.fath/a'))
		{
			$data['pri_name'] = input('post.pri_grou');
			$data['privilege'] = json_encode(input('post.fath/a'));
			$res = Db::table('privilege_group')->insert($data);
			if($res){
				$this->success('添加成功','index');
			}
		}
		$fath = Db::table('Privilege')->where('cid',0)->order('id')->select();
		$sub = Db::table('Privilege')->where('cid','<>',0)->select();
		$this->assign(['fath'=>$fath, 'sub'=>$sub]);
		return $this->fetch();
	}
	
	//修改
	public function editPrivilege()
	{
		if($_POST)
		{
			$data['pri_name'] = input('post.pri_grou');
			$id = input('get.idd');
			$data['privilege'] = json_encode(input('post.fath/a'));
			$res = Db::table('privilege_group')->where('id',$id)->update($data);
			if($res){
				$this->success('修改成功','index');
			}else{
				$this->error('修改失败');
			}
		}
		$id = input('get.id');
		$num = Db::table('Privilege_group')->where('id',$id)->find();
		$fath= Db::table('privilege')->where('cid',0)->select();
		$sub = Db::table('privilege')->where('cid','<>',0)->select();
		$this->assign(['fath' => $fath, 'sub' => $sub, 'num' => $num]);
		return $this->fetch();
	}

	public function delPrivilege()
	{
		$id = input('get.id');
		$res = Db::table('privilege_group')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','index');
		}
	}

	public function ajax()
	{
		$user_group_name = $_GET['user_group_name'];
		$res = Db::table('privilege_group')->where('pri_name',$user_group_name)->select();
		$arr_return = ['error' => 0, 'msg' => ''];	

		if ($res) {
			$arr_return = ['error' => 1, 'msg' => '该权限组已存在'];
		}	
		echo json_encode($arr_return);
	}
}
