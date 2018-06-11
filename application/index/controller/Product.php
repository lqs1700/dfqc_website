<?php
	namespace app\index\controller;	
	use think\Captcha;
	use think\Controller;
	use think\Db;

	class Product extends BaseController
{
	public function Index()
	{
		$nav0 = $this->getNav0();
		$nav1 = $this->getNav1();
		$info = $this->getInfo();
		$code=$this->getCode();
		$title = "产品中心";
		$products = Db::table('product a')
				->join('product_version b','a.version=b.id','left')
				->field('a.*,b.name as p_type')
				->order('id desc')
				->limit(8)
				->select();
		$this->assign(['title'=>$title,'products'=>$products,'nav0'=>$nav0,'nav1'=>$nav1,'info'=>$info,'code'=>$code]);
		return $this->fetch();
	}

}
