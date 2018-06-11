<?php
/**
 * Created by PhpStorm.
 * User: wx
 * Date: 2018/3/21
 * Time: 13:45
 */

    namespace app\admin\controller;
    use think\Controller;
    use think\Session;
    use think\Db;
    class BaseController extends Controller
{
    //session认证
    public function checkSession()
    {
        if(session::get('is_login')){
            return true;
        }else{
            $this->redirect('login/index');
            exit;
        }
    }
    //访问权限验证
    public function checkAuth($auth)
    {
        $name = session('is_login');
        $res = Db::table('admin_user a')
               ->field('a.*,b.privilege as privilege')
               ->join('privilege_group b','a.cid=b.id','left')
               ->where('a.name',$name)
               ->find();
        if(in_array($auth,json_decode($res['privilege']))){
            return true;
        }else{
            $this->error('无访问权限');
        }
    }
    //含图片添加
    public function addWithImg($table,$toUrl,$data)
    {
        $file = request()->file('image');
        $info1 = $file->getInfo();
        $name = $info1['name'];
        $arr = explode(".",$name);
        $ext = $arr[1];
        $arr5 = ['jpg','jpeg','png','gif'];
        if(!in_array($ext,$arr5)){
            $this->error('图片格式不正确');
        }else{
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
            if($info){
                $data['img'] = $info->getSaveName();
                $res = Db::table($table)->insert($data);
                if($res) {
                    $this->success('添加成功',$toUrl);
                }
            }
        }
    }
    //修改带图片
    public function editWithImg()
    {
        $file = request()->file('image');
        $info1 = $file->getInfo();
        $name = $info1['name'];
        $arr = explode(".",$name);
        $ext = $arr[1];
        $arr5 = ['jpg','jpeg','png','gif'];
        if(!in_array($ext,$arr5)){
            $this->error('图片格式不正确');
        }else{
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
            if($info){
                $img = $info->getSaveName();
            }
        }
        $data['img'] = $img;
        return $data['img'];
    }
}