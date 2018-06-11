<?php
	namespace app\admin\controller;
    use think\Db;
    use think\Request;

    class Product extends BaseController
{
    public function _initialize()
    {
        $this->checkSession();
        $auth = 6;
        $this->checkAuth($auth);
    }
  //产品列表
    public function index()
  {
  $products = Db::table('product a')
      ->join('product_version b','a.version=b.id','left')
      ->field('a.*,b.name as p_type')
      ->order('id desc')
      ->limit(8)
      ->paginate();
    $page= $products->render();
    $this->assign(['products'=>$products,'page' => $page]);
    return $this->fetch();
  }

  //添加产品
    public function addProduct()
  {
    if($_POST)
    {
        $file = request()->file('image');
        if($file){
            $data = input('');
            $table = 'product';
            $toUrl = 'index';
            $this->addWithImg($table,$toUrl,$data);
        }
    }
      $product_version = Db::table("product_version")->select();
      $this->assign('product_version',$product_version);
      return $this->fetch();
  }

  //修改产品
    public function editProduct()
  {
    if($_POST)
    {
        $file = request()->file('image');
        $data = input('');
        if($file){
            $data['img'] = $this->editWithImg();
        }
        $res = Db::table('product')->where('id',$data['id'])->update($data);
        if($res){
          $this->success('修改成功','product/index');
        }else{
          $this->error('修改失败');
        }
    }
      $id = input('get.id');
      $product = Db::table('product a')
          ->field('a.*,b.name as p_type')
          ->join('product_version b','a.version=b.id','left')
          ->where('a.id','=',$id)
          ->find();
      $product_version=Db::table('product_version')->select();
      $this->assign(['product'=>$product,'product_version'=>$product_version]);
      return $this->fetch();
  }

  //删除产品
    public function delProduct()
  {
    $id = input('get.id');
    $res = Db::table('product')->where('id',$id)->delete();
    if($res){
      $this->success('删除成功','product/index');
    }
  }

  //产品版本列表
    public function productversion()
  {
    $res = Db::table('product_version')->paginate(10);
    $page= $res->render();
    return $this->fetch('productversion',['res' => $res,'page' => $page]);
  }

  //添加产品版本
    public function addProductVersion()
  {
        if($_POST)
        {
            $data['name'] = input('post.productversionsname');
            $res2 = Db::table('product_version')->where('name',$data['name'])->select();
            if($res2){
                $this->error('该名称已经存在');
            }
            $res = Db::table('product_version')->insert($data);
            if($res){
                $this->success('添加成功','product/productVersion');
            }
        }
        return $this->fetch();
  }

  //删除分类
    public function delProductVersion()
  {
        $id = input('get.id');
        $re = Db::table('product_version')->where('id',$id)->find();
        $res = Db::table('product')->where('version',$re['name'])->select();
        if($res){
            $this->error('此类目下有内容，无法删除');
        }
        $res = Db::table('product_version')->where('id',$id)->delete();
        if($res){
            $this->success('删除成功','product/productVersion');
        }
  }

  //ajax异步提示
    public function ajax()
  {
      $product_serious = $_GET['productseriousname'];
      $res = Db::table('product_serious')->where('name',$product_serious)->select();
      $arr_return = ['error' => 0, 'msg' => ''];  
      if ($res){
        $arr_return = ['error' => 1, 'msg' => '该系列已经存在,请再想一个'];
      } 
      echo json_encode($arr_return);
  }

    public function ajax2()
  {
      $product_version = $_GET['productversionsname'];
      $res = Db::table('product_version')->where('name',$product_version)->select();
      $arr_return = ['error' => 0, 'msg' => ''];  
      if($res){
        $arr_return = ['error'=> 1, 'msg' =>'该版本已经存在,请再想一个'];
      }
      echo json_encode($arr_return);
  }
}