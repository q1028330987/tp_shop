<?php 

    namespace Admin\Model;

    use Think\Model;

    class UserModel extends Model
    {
            public function index()
    {
       
        if (IS_POST) {



            // dump(I('post.'));
            $UserModel = D('User');

            //使用create()方法来创建数据对象
            $res = $UserModel->create();//这个方法可以触发自动验证、自动完成

            if (!$res) {


                // echo $UserModel->getError();exit;
                //说明报错了
                $this->error( $UserModel->getError() );
                exit;
            }

            $UserModel->add();

            $this->success('成功', U('demo'), 5);

            // dump($res);

        } else {

            $this->display();
        }
    }
    }