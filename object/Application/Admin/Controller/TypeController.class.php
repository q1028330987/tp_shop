<?php
    namespace Admin\Controller;

    use Think\Controller;

    class TypeController extends Controller
    {
        //打开Type/add页面
        public function add()
        {
            // echo '1';
            //获取Model类
            $typeModel = D('Type');
            // dump(D('Type'));

            //获取所有分类
            $type = $typeModel->getAlltype();
            $cid  = I('post');
            // dump($cid);

            //查询数据库
            $type = M('type');

            //分配变量
            $this->assign('types', $types);
            $this->assign('cid', $cid);

            $this->display();
        }

        //将分类写进数据库
        public function insert()
        {
            $typeModel = D('Type')->insert();

            //进行添加
            if ($typeModel) {
                $this->success('添加成功', U('type/index'), 3);
            } else {
                $this->error('添加失败', U('type/index'), 3);
            }
        }

        //分类的列表页
        public function index()
        {
            //获取Model类
            $typeModel = D('Type');
            // dump(D('Type'));
            //获取所有分类
            $types = $typeModel->getAlltype();
            // var_dump($types);
            //分配变量
            $this->assign('types', $types);
            //解析模板
            $this->display();
        }

        //分类的修改页
        public function edit()
        {
            //获取Model类
            $typeModel = D('Type');

            //获取所有分类
            $types = $typeModel->getAlltype();
            //获取分类的id
            $cid = I('get.id');

            if(empty($cid)) $this->error('非法请求');
            //查询数据库
            $type = M('type');
            //读取数据库
            $typeInfo = $type->find($cid);
            // var_dump($typeInfo);
            // var_dump($types);
            //分配变量
            $this->assign('typeInfo', $typeInfo);
            $this->assign('types', $types);
            //解析模板
            $this->display();
        }

        //更新操作
        public function update()
        {
            //创建模型
            $type = D('type');
            if (!$type->create()) {

                error( $type->getError() );
            }
            //执行更新
            if($type->save()) {
                //检测是否为ajax请求
                if(IS_AJAX) {
                    $this->ajaxReturn(0);
                } else {
                    $this->success('更新成功', U('type/index'), 1);
                }
            } else {
                if(IS_AJAX) {
                    $this->ajaxReturn(1);
                } else {
                    $this->error('更新失败', U('type/index'), 1);
                }
            }
        }


        //删除操作
        public function delete()
        {

            //获取id
            $type = D('type')->myDelete();

            //先删除id为指定id的值
            if($type) {
                //删除当前分类下的子分类
                $this->success('删除成功', U('type/index'), 1);
            } else {
                $this->error('删除失败', U('type/index'), 1);
            }
        }

    }
