<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Request;

	class Helpcenter extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 11;
		$this->checkAuth($auth);
	}

	public function index(){
		$help = Db::table('help a')
			->join('help_type b','a.type=b.id','left')
			->field('a.*,b.name as h_type')
			->paginate(15);
		$page= $help->render();
		$this->assign(['help'=>$help, 'page'=>$page]);
		return $this->fetch();
	}

	public function edit(){
		if($_POST){
			$data = input('');
			$res=Db::table('help')->where('id',$data['id'])->update($data);
			if($res){
				$this->success('修改成功','index');
			}else{
				$this->error('修改失败');
			}
		}
		$id=input('get.id');
		$help = Db::table('help')->where('id',$id)->find();
		$help_type = Db::table('help_type')->select();
		$this->assign(['help'=>$help,'help_type'=>$help_type]);
		return $this->fetch();
	}
	public function helpType()
	{
		$help_type = Db::table('help_type')->paginate(10);
		$page= $help_type->render();
		$this->assign(['help_type'=>$help_type, 'page'=>$page]);
		return $this->fetch();
	}

	public function add()
	{
		if($_POST){
			$data = input('');
			$res = Db::table('help')->insert($data);
			if($res){
				$this->success('添加成功','index');
			}
		}
		$help_type = Db::table("help_type")->select();
		$this->assign('help_type',$help_type);
		return $this->fetch();
	}

	public function addType()
	{
		$file = request()->file('image');
		if($file){
			$data = input('');
			$table = 'help_type';
			$toUrl = 'helptype';
			$this->addWithImg($table,$toUrl,$data);
		}
		return $this->fetch('add_type');
	}

	public function delType()
	{
		$id = input('get.id');
		$res = Db::table('help_type')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','helptype');
		}
	}

	public function del()
	{
		$id = input('get.id');
		$res = Db::table('help')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','index');
		}
	}

	 public function ajax()
    {
        $type_name = input('get.type_name');
        $res = Db::table('help_type')->where('name',$type_name)->select();
        $arr_return = ['error' => 0, 'msg' => ''];  
        if ($res) {
          $arr_return = ['error' => 1, 'msg' => '该分类名称已经存在,请再想一个'];
        } 
        echo json_encode($arr_return);
    }
}
