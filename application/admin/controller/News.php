<?php
	namespace app\admin\controller;
  	use think\Db;
	use think\Request;

	class News extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 5;
		$this->checkAuth($auth);
	}

	public function index()
	{
		$news = Db::table('news a')
			->join('new_type b','a.nid=b.id','left')
			->field('a.*,b.name as type')
			->order('time desc')
			->paginate(5);
		$page= $news->render();
		$this->assign(['news'=>$news, 'page'=>$page]);
		return $this->fetch();
	}

	public function addNews()
	{
		if($_POST){
			$data = input('');
			$table = 'news';
			$toUrl = 'index';
			$this->addWithImg($table,$toUrl,$data);
		}
		$newtype = Db::query("select * from new_type");
		$this->assign('newtype',$newtype);
		return $this->fetch();
    }

    public function editNews()
    {
		if($_POST){
			$id = Request::instance()->get('id');
			$file = request()->file('image');
			$data = input('');
			if($file){
				$data['img'] = $this->editWithImg();
			}
			$res = Db::table('news')->where('id',$id)->update($data);
			if($res){
				$this->success('修改成功','news/index');
			}else{
				$this->error('修改失败');
			}
		}
		$id = input('get.id');
		$news = Db::table('news')->where('id',$id)->select();
		$newtype =Db::table('new_type')->select();
		$this->assign(['news'=>$news, 'id'=>$id, 'newtype'=>$newtype]);
		return $this->fetch();
  	}

    public function delNews()
    {
		$id = input('get.id');
		$res = Db::table('news')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','news/index');
		}
   	}

    public function newType()
    {
		$res = Db::table('new_type')->select();
		return $this->fetch('newtype',['res' => $res]);
    }

    public function delNewType()
    {
		$id = input('get.id');
		$re = Db::table('new_type')->where('id',$id)->find();
		$res = Db::table('news')->where('nid',$re['name'])->select();
		if($res){
		  $this->error('此类目下有内容，无法删除');
		}
		$res1 = Db::table('new_type')->where('id',$id)->delete();
	  	if($res1){
			$this->success('删除成功','news/newType');
	  	}
    }

    public function addNewType()
    {
		if($_POST){
			$data['name'] = input('post.newtypename');
			$res2 = Db::table('new_type')->where('name',$data['name'])->select();
			if($res2){
				$this->error('该名称已经存在,请再次填写');
			}
		    $res = Db::table('new_type')->insert($data);
		    if($res){
			  $this->success('添加成功','news/newType');
		    }
		}
		return $this->fetch();
    }

    public function ajax()
    {
        $new_type_name = $_GET['new_type_name'];
        $res = Db::table('new_type')->where('name',$new_type_name)->select();

        $arr_return = ['error' => 0, 'msg' => ''];  
        if ($res){
          $arr_return = ['error' => 1, 'msg' => '该分类名称已经存在,请再想一个'];
        } 
        echo json_encode($arr_return);
    }
}