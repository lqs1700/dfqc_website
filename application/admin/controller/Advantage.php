<?php
	namespace app\admin\controller;
	use think\Db;
	use think\Request;

	class Advantage extends BaseController
{
	public function _initialize()
	{
		$this->checkSession();
		$auth = 8;
		$this->checkAuth($auth);
	}

	public function index()
	{
		$advantage = Db::table('advantage')->paginate(4);
		$page= $advantage->render();
		$this->assign(['advantage'  => $advantage, 'page' => $page]);
		return $this->fetch();
	}

	public function addAdvantage()
	{
		$file = request()->file('image');
		if($file)
		{
			$data = input('');
			$table = 'advantage';
			$toUrl = 'index';
			$this->addWithImg($table,$toUrl,$data);
		}
		return $this->fetch('add_advantage');
	}

	public function delAdvantage()
	{
		$id = input('get.id');
		$res = Db::table('advantage')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功','index');
		}
	}

  	public function editAdvantage()
  	{
		if($_POST)
	  	{
	  		  $data = input('');
			  $file = request()->file('image');
			  if($file){
				  $data['img'] = $this->editWithImg();
			  }
	          $res = Db::table('advantage')->where('id',$data['id'])->update($data);
			  if($res){
					$this->success('修改成功','advantage/index');
			  }
		  }
		  $id = input('get.id');
		  $advantage = Db::table('advantage')->where('id',$id)->select();
		  $this->assign(['id'  => $id, 'advantage' => $advantage]);
		  return $this->fetch();
  	}
}
