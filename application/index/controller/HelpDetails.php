<?php
namespace app\index\controller;
use think\Captcha;
use think\Controller;
use think\Db;

class HelpDetails extends BaseController
{
    public function index()
    {
        $nav0 = $this->getNav0();
        $nav1 = $this->getNav1();
        $info = $this->getInfo();
        $code=$this->getCode();
        $title = "帮助中心";
        $id = input('get.id');
        $help = Db::table('help')->where('id','=',$id)->find();
        $helps = Db::table('help a')
            ->join('help_type b','a.type=b.id','left')
            ->field('a.*,b.name as h_type')
            ->select();
        $this->assign(['title'=>$title,'help'=>$help,'helps'=>$helps,'nav0'=>$nav0,'nav1'=>$nav1,'info'=>$info,'code'=>$code]);
        return $this->fetch();
    }

}