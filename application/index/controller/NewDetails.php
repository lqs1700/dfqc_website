<?php
namespace app\index\controller;
use think\Captcha;
use think\Controller;
use think\Db;

class NewDetails extends BaseController
{
    public function index()
    {
        $nav0 = $this->getNav0();
        $nav1 = $this->getNav1();
        $info = $this->getInfo();
        $code=$this->getCode();
        $title = "新闻资讯";
        $id = input('get.id');
        $new = Db::table('news')->where('id','=',$id)->find();
        $this->assign(['title'=>$title,'new'=>$new,'nav0'=>$nav0,'nav1'=>$nav1,'info'=>$info,'code'=>$code]);
        return $this->fetch();
    }

}