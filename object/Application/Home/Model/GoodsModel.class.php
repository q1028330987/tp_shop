<?php
    namespace Home\Model;

    use Think\Model;

    class GoodsModel extends Model
    {
        //手机分页
        public function paging()
        {
            // echo 1;
            $types = M('type');
            $typesInfo = $types->where("name='手机'")->select();
            $pid = $typesInfo[0]['id'];
            $typesPhone = $types->where("pid='$pid'")->select();

            return $typesPhone;
            // dump($typesPhone);
        }

        //配件分页
        public function parts()
        {
            $this->display();
        }

        //商品详情
        public function details()
        {
            $this->display();
        }
    }
