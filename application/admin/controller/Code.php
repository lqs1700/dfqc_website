<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Request;

	class Code extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 9;
		$this->checkAuth($auth);
	}

	public function index()
	{
		$code = Db::table('qr_code')->paginate(5);
		$page= $code->render();
		$this->assign(['code'=>$code, 'page'=>$page]);
		return $this->fetch();
	}

	public function addCode()
	{
		$data['name']=input('post.name');
		$file = request()->file('image');
		if($file){
			$data = input('');
			$table = 'qr_code';
			$toUrl = 'code/index';
			$this->addWithImg($table,$toUrl,$data);
		}
		return $this->fetch();
	}

	public function delCode()
	{
		$id = input('get.id');
		$res = db('qr_code')->delete($id);
		if($res){
			$this->success('删除成功','index');
		}
	}
}
