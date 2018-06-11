<?php
	namespace app\admin\controller;
	use think\Captcha;
	use think\Db;
	use think\Session;
	use think\Cookie;

class Login extends BaseController
{	
	//登陆
	public function index()
	{
		$title="登陆";	
		if($_POST)
		{
			$captcha =input('post.verify');
			if(!captcha_check($captcha)){
				$this->success('验证码错误','login/index');
			};
			$username = input('post.username');
			$pwdd = input('post.password');
			$pwd = md5(md5($pwdd).'8888');
			$res = Db::table('admin_user')->where('name',$username)->where('pwd',$pwd)->select();
			if($res){
				session::set('is_login',$username);
				$this->success('登陆成功','index/index');
			}else{
				$this->error('用户名或者密码错误');
			}
		}else{
			return $this->fetch('index', ['title' => $title]);
		}
	}
	//退出
	public function loginout()
	{
		session::set('is_login','');
		return $this->fetch('index');
	}
}