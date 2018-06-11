<?php
	namespace app\index\controller;	
	use think\Captcha;
	use think\Controller;
	use think\Db;

	class AboutUs extends BaseController
{
	public function index(){
		$title = "企业介绍";
		$nav0 = $this->getNav0();
		$nav1 = $this->getNav1();
		$info = $this->getInfo();
		$code=$this->getCode();
		$this->assign(['title'=>$title,'nav0'=>$nav0,'nav1'=>$nav1,'info'=>$info,'code'=>$code]);
		return $this->fetch();
	}
}
