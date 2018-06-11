<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Request;

	class Cooperator extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 10;
		$this->checkAuth($auth);
	}

	public function index()
	{
		$cooperator = Db::table('cooperator')->paginate(10);
		$page= $cooperator->render();
		$this->assign(['cooperator'=>$cooperator, 'page'=>$page]);
		return $this->fetch();
	}

	public function add()
	{
		$file = request()->file('image');
		if($file){
			$data = input('');
			$table = 'cooperator';
			$toUrl = 'cooperator/index';
			$this->addWithImg($table,$toUrl,$data);
		}
		return $this->fetch('add');
	}

	public function del()
	{
		$id = input('get.id');
		$res = Db::table('cooperator')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','index');
		}
	}
}
