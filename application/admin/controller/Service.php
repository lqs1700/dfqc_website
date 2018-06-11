<?php
	namespace app\admin\controller;	
	use think\Db;
	use think\Request;

	class Service extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 7;
		$this->checkAuth($auth);
	}

	//服务列表
	public function index()
	{
		$service = Db::table('service a')
			->join('service_type b','a.s_type = b.id','left')
			->field('a.*,b.name as type')
			->paginate(6);

		$page = $service->render();
		return $this->fetch('index', ['service' => $service,'page' => $page]);
	}
	
	//服务添加
	public function addService()
	{
		if($_POST){
			$file = request()->file('image');
			if($file){
				$data = input('');
				$table = 'service';
				$toUrl = 'index';
				$this->addWithImg($table,$toUrl,$data);
			}
		}
		$service_type = Db::table('service_type')->paginate(10);
		$this->assign(['service_type' => $service_type]);
		return $this->fetch();

	}

	//服务修改
	public function editService()
	{
		if($_POST){
			$data = input('');

			$file = request()->file('image');
			if($file){
				$data['img'] = $this->editWithImg($data);
			}
			$res=Db::table('service')->where('id','=',$data['id'])->update($data);
			if($res){
				$this->success('修改成功','index');
			}else{
				$this->error('修改失败');
			}
		}
		$id = input('get.id');
		$service = Db::table('service')->where('id','=',$id)->select();
		$service_type = Db::table('service_type')->select();
		$this->assign(['id'=>$id,'service'=>$service,'service_type'=>$service_type]);
		return $this->fetch();
	}

	//服务删除
	public function delService()
	{
		$id = input('get.id');
		$res = Db::table('service')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','index');
		}
	}
	//服务分类列表
	public function serviceType()
	{
		$Service_type = Db::table('service_type')->select();
		return $this->fetch('servicetype', ['Service_type' => $Service_type]);
	}

	//服务分类添加
	public function addServiceType()
	{
		if($_POST)
		{
			$data['name'] = input('post.servicetypename');
			$res2 = Db::table('service_type')->where('name',$data['name'])->select();
			if($res2){
				$this->error('该分类已经存在');
			}
			$res = Db::table('service_type')->insert($data);
		  	if($res){
				$this->success('添加成功','service/servicetype');
		  	}
		}
		return $this->fetch();
	}

	//服务分类删除
	public function delServiceType()
	{
		$id = input('get.id');
		$type = input('get.type');
		$res2 = Db::table('service')->where('s_type',$type)->select();
		if($res2){
            $this->error('该分类下有服务内容,无法删除');
		}
		$res = Db::table('service_type')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','service/servicetype');
		}
	}

	//异步提示
    public function ajax()
    {
        $service_type_name = $_GET['service_type_name'];
        $res = Db::table('service_type')->where('name',$service_type_name)->select();

        $arr_return = ['error' => 0, 'msg' => ''];  
        if ($res) {
          $arr_return = ['error' => 1, 'msg' => '该分类名称已经存在,请再想一个'];
        } 
        echo json_encode($arr_return);
    }
}
