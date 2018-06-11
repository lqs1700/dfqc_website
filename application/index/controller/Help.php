<?php
	namespace app\index\controller;	
	use think\Captcha;
	use think\Controller;
	use think\Db;

	class Help extends BaseController
{
	public function index()
	{
		$nav0 = $this->getNav0();
		$nav1 = $this->getNav1();
		$info = $this->getInfo();
		$code=$this->getCode();

		$title = "帮助中心";
		$help_type=Db::table('help_type')->select();
		$help = Db::table('help a')
			->join('help_type b','a.type=b.id','left')
			->field('a.*,b.name as h_type')
			->select();
		$downloads = $this->getDownload();
		$shopsites = $this->getShopSites();
		$this->assign(['info'=>$info,'code'=>$code,'title'=>$title,'downloads'=>$downloads,'shopsites'=>$shopsites,'help_type'=>$help_type,'help'=>$help,'nav0'=>$nav0,'nav1'=>$nav1]);
		return $this->fetch();
	}
	public function getDownload(){
		$downloads = Db::table('down_load')->select();
		return $downloads;
	}
	public function getShopSites(){
		$shopSites=Db::table('shop_site')->select();
		return $shopSites;
	}
}