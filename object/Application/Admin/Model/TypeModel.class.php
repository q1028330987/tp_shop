<?php

    namespace Admin\Model;

    use Think\Model;

    class TypeModel extends Model
    {
        // //将分类写进数据库
        // public function insert()
        // {
        //     //实例化当前的模型
        //     $type = M('type');
        //     // dump($type);

        //     //添加一级分类
        //     if ($_POST['pid'] == 0)
        //     {
        //         $_POST['path'] = '0';
        //     } else {
        //         //读取一级分类信息
        //         $pid = $_POST['pid'];
        //         $parentInfo = $type->where("id = $pid")->find();
        //         //拼接二级分类的path
        //         // dump($_POST);
        //         $_POST['path'] = $parentInfo['path'].'-'.$parentInfo['id'];
        //     }

        //     //进行添加
        //     if ($type->add($_POST))
        //     {
        //         $this->success('添加成功', U('type/index'), 3);
        //     } else {
        //         $this->error('添加失败', U('type/index'), 3);
        //     }
        // }

        // //更新操作
        // public function update()
        // {
        //     //创建模型
        //     $type = M('type');
        //     $type->create();
        //     //执行更新
        //     if($type->save())
        //     {
        //         //检测是否为ajax请求
        //         if(IS_AJAX)
        //         {
        //             $this->ajaxReturn(0);
        //         } else {
        //             $this->success('更新成功', U('type/index'), 1);
        //         }
        //     } else {
        //         if(IS_AJAX)
        //         {
        //             $this->ajaxReturn(1);
        //         } else {
        //             $this->error('更新失败', U('type/index'), 1);
        //         }
        //     }
        // }

        // //删除操作
        // public function delete()
        // {
        //     //获取id
        //     $id = I('get.id');//3
        //     $type = M('type');
        //     //执行删除
        //     $typeInfo = $type->find($id);//  3  0,1  => 0,1,3
        //     $paths = $typeInfo['path'].','.$typeInfo['id'];
        //     //先删除id为指定id的值
        //     if($type->where("id=$id")->delete())
        //     {
        //         //删除当前分类下的子分类
        //         $type->where("path like '$paths%'")->delete();
        //         $this->success('删除成功', U('type/index'), 1);
        //     } else {
        //         $this->error('删除失败', U('type/index'), 1);
        //     }
        // }

        //获取当前表中所有的分类信息并返回
        public function getAlltype()
        {
            //创建模型
            $type = M('type');
            // dump($type);
            //获取关键字
            $typename=I('get.keyword');

            // dump($typename);

            $where="";

            if($typename)
            {
                // //执行转意操作
                $where = "name like '%$typename%'";
            }

            //读取数据库中的所有分类 并且按照父子关系进行排序
            $types = $type->field('title,id,name,path,pid,concat(path,"-",id) as paths')->where($where)->order('paths')->select();


            foreach($types as $k=>$v)
            {
                //获取层级
                $num = count(explode('-', $v['path']))-1;
                // var_dump($num);

                //调整name的标识
                $types[$k]['name'] = str_repeat('|-------', $num).$v['name'];
            }

            return $types;
        }
    }
