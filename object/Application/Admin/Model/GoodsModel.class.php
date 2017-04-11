<?php
    namespace Admin\Model;

    use Think\Model;

    class GoodsModel extends Model
    {
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
