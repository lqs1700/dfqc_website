<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Request;

	class Banner extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 4;
		$this->checkAuth($auth);
	}

	public function bannerList()
	{
		$banner = Db::table('banner')->paginate(5);
		$page= $banner->render();
		$this->assign(['banner'=>$banner, 'page'=>$page]);
		return $this->fetch('index');
	}

	public function addBanner()
	{
		$file = request()->file('image');
		if($file){
			$data = input('');
			$table = 'banner';
			$toUrl = 'bannerlist';
			$this->addWithImg($table,$toUrl,$data);
		}
		return $this->fetch('add_banner');
	}

	public function delBanner()
	{
		$id = Request::instance()->get('id');
		$res = Db::table('banner')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','bannerlist');
		}
	}
}
