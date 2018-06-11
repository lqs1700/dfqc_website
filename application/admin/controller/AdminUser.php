<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Session;

	class AdminUser extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 2;
		$this->checkAuth($auth);
	}

	public function index()
	{
		$prigou= Db::table('admin_user a')
				->join('privilege_group b','a.cid=b.id','left')
				->field('a.*,b.pri_name as p_type')
				->select();
		$this->assign('prigou',$prigou);
		return view();
	}

	public function addUser()
	{
		if(input('post.user_name'))
		{
			$data['name'] = input('post.user_name');
			$data['pwd'] = md5(md5(input('post.password')).'8888');
			if(session('errorname')||session('errorpas')){
				$this->error('用户名或密码格式不正确');
			};
			$data['cid'] = input('post.pri_name');
			$res = Db::table('admin_user')->insert($data);
			if($res){
				$this->success('添加成功','index');
			}
		}
		$pri_grou= Db::table('privilege_group')->select();
		$this->assign('pri_grou',$pri_grou);
		return view();
	}

	public function editUser()
	{
		if($_POST)
		{
			$id = input('get.id');
			$data['pwd'] = md5(md5(input('post.password')).'8888');
			$data['cid'] = input('post.pri_name');
			if(session('errorpas')){
				Session::delete('errorpas');
				$this->error('密码格式不正确');
			};
			$res = Db::table('admin_user')->where('id',$id)->update($data);
			if($res){
				$this->success('修改成功','index');
			}else{
				$this->error('修改失败');
			}
		}
		$id = input('get.id');
		$val = Db::table('admin_user')->where('id',$id)->find();
		$this->assign('val',$val);
		$pri_grou = Db::table('privilege_group')->select();
		$this->assign('pri_grou',$pri_grou);
		return $this->fetch();
	}
	
	public function delUser()
	{
		$id = input('get.id');
		$res = Db::table('admin_user')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','index');
		}
	}

	public function ajax()
	{
		// 用来判断是否已经相同名称的用户权限组
		Session::delete('errorname');
		$user_group_name = $_GET['user_group_name'];
		$res = Db::table('admin_user')->where('name',$user_group_name)->select();	
		$arr_return = ['error' => 0, 'msg' => ''];
		if ($res) {
			$arr_return = ['error' => 1, 'msg' => '该用户已经存在'];
			echo json_encode($arr_return);
			exit;
		}
		$pattern='/^[a-zA-Z]\w{7,17}$/';
		$return=preg_match_all($pattern,$user_group_name);
		if(!$return){
			$arr_return = ['error' => 2, 'msg' => '用户名必须字母开头，长度8-18位'];
			session::set('errorname','1');
		}
		echo json_encode($arr_return);
		exit;
	}

	public function ajax1()
	{
		// 用来判断密码格式是否正确
		Session::delete('errorpas');
		$user_group_name = $_GET['user_group_name'];
		$pattern='/^[a-zA-Z_]\w{7,17}$/';
		$return=preg_match_all($pattern,$user_group_name);
		$arr_return = ['error' => 0, 'msg' => ''];
		if(!$return){
			$arr_return = ['error' => 2, 'msg' => '密码必须下划线或字母开头，长度8-18位'];
			session::set('errorpas','2');
		}
		echo json_encode($arr_return);
		exit;
	}
}