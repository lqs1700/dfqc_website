<?php
	namespace app\index\controller;	
	use think\Captcha;
	use think\Controller;
	use think\Db;

	class Index extends BaseController
{
	public function index()
	{
		$nav0 = $this->getNav0();
		$nav1 = $this->getNav1();
		$info = $this->getInfo();
		$code=$this->getCode();
		$title = "官网首页";
		$banner = $this->getBanner();
		$advantage = $this->getAdvantate();
		$service = $this->getService();
		$news = $this->getNews();
		$cooperator = $this->getCooperatot();
		$this->assign(['cooperator'=>$cooperator,'title'=>$title,'banner'=>$banner,'advantage'=>$advantage,'service'=>$service,'news'=>$news,'info'=>$info,'code'=>$code,'nav0'=>$nav0,'nav1'=>$nav1]);
		return $this->fetch();
	}
	private function getBanner(){
		$banner = Db::table('banner')->select();
		return $banner;
	}
	private function getAdvantate(){
		$advantage = Db::table('advantage')->select();
		return $advantage;
	}
	private function getService(){
		$service = Db::table('service a')
			->field('a.img,a.name,a.content,b.name as type')
			->join('service_type b','a.s_type=b.id','left')
			->select();
		return $service;
	}
	private function getNews(){
		$news = Db::table('news')
			->order('time desc')
			->limit(3)
			->select();
		return $news;
	}
	private function getCooperatot(){
		$cooperator = Db::table('cooperator')->select();
		return $cooperator;
	}

	public function form(){
		$captcha =input('post.verify');
		if(!captcha_check($captcha)){
			echo "<script>alert('验证码错误,请重新输入');window.history.go(-1);</script>";
			exit;
		};
		$mes = input('');
		$data['name']=$mes['userName'];
		$data['email']=$mes['email'];
		$data['tel']=$mes['sms'];
		$data['message']=$mes['msg'];
		$data['status']=1;
		$res = Db::table('join_us')->insert($data);
		if($res){
			echo "<script>alert('申请成功,请耐心等待审核');window.history.go(-1);</script>";
		}
	}
}