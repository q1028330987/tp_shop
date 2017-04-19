<?php

    namespace Admin\Model;

    use Think\Model;

    class TypeModel extends Model
    {

        protected $_map = array(
            'pid'=>'path'
            );

        protected $_auto = array(

            array('path', 'getPath', 3, 'callback'),
            );

        public function getPath()
        {

            if ($_POST['pid'] == 0) {
                $_POST['path'] = '0';

            } else {
                //读取一级分类信息
                $pid = $_POST['pid'];
                $parentInfo = $this->where("id = $pid")->find();
                //拼接二级分类的path
                // dump($_POST);
                $_POST['path'] = $parentInfo['path'].'-'.$parentInfo['id'];
            }

            return $_POST['path'];
        }

        public function insert()
        {
            //添加一级分类
            if ($_POST['pid'] == 0) {
                $_POST['path'] = '0';

            } else {
                //读取一级分类信息
                $pid = $_POST['pid'];
                $parentInfo = $this->where("id = $pid")->find();
                //拼接二级分类的path
                // dump($_POST);
                $_POST['path'] = $parentInfo['path'].'-'.$parentInfo['id'];
            }

            return $this->add($_POST);
        }


        public function myDelete()
        {
            //获取id
            $id = I('get.id');//3
            // dump($id);
            // die;
            //执行删除
            $typeInfo = $this->find($id);//  3  0,1  => 0,1,3
            $paths = $typeInfo['path'].'-'.$typeInfo['id'];
            // dump($id);
            $type = $this->where("id=$id")->delete();
            // echo $this->getLastSql();
            // die;

            if (!$type) {
                return false;
            }
            //删除当前分类下的子分类
             return $this->where("path like '$paths%'")->delete();
             // echo $this->getLastSql();die;


        }

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

            if($typename) {
                // //执行转意操作
                $where = "name like '%$typename%'";
            }

            //读取数据库中的所有分类 并且按照父子关系进行排序
            $types = $type->field('title,id,name,path,pid,concat(path,"-",id) as paths')->where($where)->order('paths')->select();


            foreach($types as $k=>$v) {
                //获取层级
                $num = count(explode('-', $v['path']))-1;
                // var_dump($num);

                //调整name的标识
                $types[$k]['name'] = str_repeat('|-------', $num).$v['name'];
            }

            return $types;
        }
    }
