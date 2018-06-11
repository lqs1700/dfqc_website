<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Request;

	class CompanyInfo extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 12;
		$this->checkAuth($auth);
	}

	public function index()
	{
		$company_info = Db::table('contact_us')->select();
		$this->assign('company_info',$company_info);
		return $this->fetch();
	}

	public function edit()
	{
		if($_POST){
			$data = input('');
			$res =Db::table('contact_us')->where('id','=',1)->update($data);
			if($res){
				$this->success('修改成功','index');
			}else{
				$this->success('修改失败');
			}
		}
		$company_info = DB::table('contact_us')->where('id','=',1)->select();
		$this->assign('company_info',$company_info);
		return $this->fetch();
	}
}
