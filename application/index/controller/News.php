<?php
	namespace app\index\controller;	
	use think\Captcha;
	use think\Controller;
	use think\Db;

	class News extends BaseController
{
	public function index()
	{
		$nav0 = $this->getNav0();
		$nav1 = $this->getNav1();
		$info = $this->getInfo();
		$code=$this->getCode();
		$title = "新闻资讯";
		$new_type =input('get.new_type')?input('get.new_type'):1;
		$news_type = $this->getNewType();
		$news = $this->getNews($new_type);
		$page = $news->render();
		$this->assign(['title'=>$title,'news'=>$news,'info'=>$info,'code'=>$code,'page'=>$page,'new_type'=>$new_type,'news_type'=>$news_type,'nav0'=>$nav0,'nav1'=>$nav1]);
		return $this->fetch();
	}
	public function getNewType(){
		$news_type=Db::table('new_type')->select();
		return $news_type;
	}
	public function getNews($new_type){
		$news = Db::table('news a')
			->join('new_type b','a.nid=b.id','left')
			->field('a.*,b.name as n_type')
			->where('a.nid',$new_type)
			->order('time desc')
			->paginate(5);
		return $news;
	}

}