<?php
    namespace Admin\Controller;

    use Think\Controller;

    class GoodsController extends Controller
    {
        public function add()
        {
            //获取Model类
            $GoodsModel = D('Goods');
            // $id  = I('post');
            // dump($_POST['id']);

            //获取所有分类
            $types = $GoodsModel->getAlltype();
            dump($type);
            $this->assign('types',$types);
            // $this->assign('id',$id);

            $this->display();
        }

        public function insert()
        {
            echo '11';
            $a  = I('post.');
            dump($a);


        //     //实例化模型
        //     $goods=M('goods');

        //     if(IS_AJAX)
        //     {
        //         $title=$_POST['title'];

        //         $result=$goods->where("title='$title'")->select();

        //         if($result){
        //             $this->ajaxReturn(0);
        //         }else{
        //             $this->ajaxReturn(1);
        //         }
        //      }

        //     if($_FILES['img']['name'])
        //     {
        //         $upload = new \Think\Upload();// 实例化上传类
        //         $upload->maxSize=3145728 ;// 设置附件上传大小
        //         $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //         $upload->rootPath = "./Public";//需要手动设置上传的根目录
        //         $upload->savePath ='/Uploads/'; // 设置附件上传目录    // 上传文件
        //         $info   =$upload->upload();

        //         //拼接图片的路径
        //         $_POST['img'] = $upload->rootPath.$info['img']['savepath'].$info['img']['savename'];
        //     }


        //     $_POST['lonetime']=time();

        //     if($goods->add($_POST))
        //     {
        //         $this->success('添加成功',U('Admin/Goods/index'),3);
        //     } else {
        //         $this->error('添加失败',U('Admin/Goods/index'),3);
        //     }

        // }

        // public function eideGoods()
        // {
        //     $id=I('get.id');
        //     $goods=M('goods');
        //     $goodsInfo=$goods->find($id);
        //     $pid=$goodsInfo['pid'];
        //     $type=M('type');
        //     $typeInfo=$type->find($pid);
        //     $this->assign('goodsInfo',$goodsInfo);
        //     $this->assign('typeInfo',$typeInfo);
        //     $types=$this->getAlltype();
        //     $this->assign('types',$types);
        //     $this->assign('id',$id);
        //     $this->display();
        // }

        // public function UpdateGoods()
        // {
        //     $goods=M('goods');
        //     $id=I('post.id');
        //     if(IS_AJAX)
        //     {

        //         $result=$goods->save($_POST);

        //         if($result)
        //         {
        //             $this->ajaxReturn(0);
        //         } else {
        //             $this->ajaxReturn(1);
        //         }
        //     }

        //     // //获取当前商品的信息
        //     $goodsInfo = $goods->find($id);
        //     //获取img的路径
        //     $img = $goodsInfo['img'];
        //     //执行删除
        //     @unlink($img);

        //     if($_FILES['img']['name'])
        //     {
        //         $upload = new \Think\Upload();// 实例化上传类
        //         $upload->maxSize=3145728 ;// 设置附件上传大小
        //         $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //         $upload->rootPath = "./Public";//需要手动设置上传的根目录
        //         $upload->savePath ='/Uploads/'; // 设置附件上传目录    // 上传文件
        //         $info   =$upload->upload();

        //         //拼接图片的路径
        //         $_POST['img'] = $upload->rootPath.$info['img']['savepath'].$info['img']['savename'];
        //     }

        //     $goodses=$goods->where("id='$id'")->save($_POST);


        //     if($goodses)
        //     {

        //         $this->success('更新成功',U('Goods/index'),3);

        //     } else {

        //         $this->error('更新失败',U('Goods/index'),3);

        //     }
        }


        // public function index()
        // {
        //     $id=I('get.id');
        //     // var_dump($id);
        //     //实例化模型
        //     $goods=M('goods');

        //     $num = I('get.num');//$_GET['num']

        //     $num = !empty($num) ? $num : 10;//如果没有传递数量 每页默认显示10条
        //     //获取关键字
        //     $goodsname = I('get.keyword');

        //     if($id)
        //     {
        //         $where['pid']=array('eq',$id);
        //     } else {
        //         $where="";
        //     }

        //     // $where = "";//条件字符串
        //     if($goodsname)
        //     {
        //         //模糊查询
        //         $where['title'] = array('like','%'.$goodsname.'%');
        //     }

        //     //获取数据的总数
        //     $count = $goods->where($where)->count();

        //     //实例化分页类
        //     $Page = new \Think\Page($count,$num);//
        //     //获取页码的字符串
        //     $pages = $Page->show();// 分页显示输出
        //     // var_dump($pages);

        //     //获取limit参数
        //     $limit = $Page->firstRow.','.$Page->listRows;


        //     $goodses=$goods->where($where)->limit($limit)->select();


        //     // var_dump($nu);die;
        //     // var_dump($color);die;


        //     $number=1;

        //     //分配变量
        //     $this->assign('number',$number);

        //     $this->assign('pages',$pages);
        //     $this->assign('num',$num);

        //     $this->assign('goodses',$goodses);
        //     $this->display();
        // }

        // //删除
        // public function delete()
        // {
        //     //获取id
        //     $id=I('get.id');
        //     if(empty($id))
        //     {
        //         $this->error('非法操作',U('Goods/index'),3);
        //     }

        //     //实例化对象

        //     $goods=M('goods');
        //     $goodsInfo=$goods->find($id);
        //     $goodtype=M('goodtype');
        //     $colorInfo=$goodtype->where("pid='$id'")->select();

        //     if($colorInfo)
        //     {
        //         $this->error("商品还有子类,请删除子类",U("Admin/Meal/edit/id/$id"));
        //     } else {

        //         $img=$goodsInfo['img'];

        //         @unlink($img);

        //         //执行删除操作
        //         if($goods->delete($id))
        //         {
        //             $this->success('删除成功',U('Goods/index'),3);
        //         } else {
        //             $this->error('删除失败',U('Goods/index'),3);
        //         }
        //     }
        // }


        // //商品详情
        // public function intro()
        // {
        //     $id=I('get.id');
        //     $goods=M('goods');
        //     $type=M('type');
        //     $goodtype=M('goodtype');
        //     $mealtable=M('mealtable');


        //     $goodsInfo=$goods->find($id);
        //     $pid=$goodsInfo['pid'];
        //     $typePid=$goodsInfo['id'];
        //     // var_dump($goodsInfo);
        //     $types=$type->find($pid);
        //     $goodtypes=$goodtype->where("pid='$typeid'")->select();
        //     $mealpid='';

        //     foreach($goodtypes as $key=>$value)
        //     {

        //         $mealpid[$key]=$value['id'];

        //         $mealInfo[]=$mealtable->where("typeid='$mealpid[$key]'")->select();

        //     }

        //     // var_dump($goodsInfo);
        //     // var_dump($mealInfo);die;
        //     $this->assign('mealInfo',$mealInfo);
        //     $this->assign('goodtypes',$goodtypes);

        //     $this->assign('types',$types);
        //     $this->assign('goodsInfo',$goodsInfo);
        //     $this->display();
        // }

}
