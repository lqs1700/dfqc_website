<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Session;

	class Index extends BaseController
	{
		public function _initialize()
		{
			$this->checkSession();
		}
		public function index()
		{
			$name = session('is_login');
			$res = Db::table('admin_user a')
				->field('a.*,b.pri_name as pri_name,b.privilege as privilege')
				->join('privilege_group b','a.cid=b.id','left')
				->where('a.name',$name)
				->find();
			$pri_name = $res['pri_name'];
			$idss = json_decode($res['privilege']);
			$fath = Db::table('privilege')->where('cid',0)->where('id','in',$idss)->order('id')->select();
			$sub = Db::table('privilege')->where('cid','<>',0)->where('id','in',$idss)->select();
			$this->assign(['pri_name'=>$pri_name, 'admin'=>$name, 'sub'=>$sub, 'fath'=>$fath]);
			return $this->fetch('index');
		}

		public function backendIndex()
		{
			return $this->fetch('backendIndex');
		}
	}
