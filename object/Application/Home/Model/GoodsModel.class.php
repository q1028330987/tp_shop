<?php
    namespace Home\Model;

    use Think\Model;

    class GoodsModel extends Model
    {
        //手机分类
        public function paging()
        {
            // echo 1;
            //查询手机类
            $types = M('type');
            $typesInfo = $types->where("name='手机'")->select();
            $pid = $typesInfo[0]['id'];
            $typesPhone = $types->where("pid='$pid'")->select();
            //返回分类
            return $typesPhone;
            // dump($typesPhone);
        }


        //查询商品手机
        public function commodityPhone()
        {
            // dump(I('get.'));
            $paging = $this->paging();
            $id = $_GET['id'];
            $grounding = $_GET['grounding'];
            $cost = $_GET['cost'];
            // dump($cost);die;

            //获取查询的关键字
            $searchKeywordStr = I('post.searchKeywordStr');
            // dump($paging);

            $list = [];
            foreach ($paging as $k =>$v) {

                // $paging[$k] = $k['id'];
                $list[$k] = $v['id'];
            }
            // dump($list);

            //判断构造条件
            if ($id) {
                $arr['tid'] = array('EQ', $id);

            } else if($searchKeywordStr){
                $arr['name'] = array('like','%'.$searchKeywordStr.'%');

            } else{
                $arr['tid'] = array('IN', $list);

            }

            //判断排序
            if ($cost == 1) {
                //判断价格排序
                $res = array('price'=>'asc');

            } else if ($cost == 2) {
                $res = array('price'=>'desc');

            } else if ($grounding == 1) {
                //判断上架时间排序
                $res = array('addtime'=>'asc');

            } else if ($grounding == 2) {
                $res = array('addtime'=>'desc');

            } else {
                $res = '';
            }

            // dump(array('order', 'price'=>'desc'));
            // die;
            //获取数据的总数
            $count = $this->where($arr)->count();
            //设置每页显示
            $num = 4;
            //实例化分页类
            $Page = new \Think\Page($count,$num);
            //显示分页
            $pages = $Page->show();
            //获取limit参数
            $limit = $Page->firstRow.','.$Page->listRows;
            //进行分页查询
            $goodsInfo = $this->where($arr)->limit($limit)->order($res)->select();
            // echo $this->getLastSql();
            // die;
            // return 1;
            return array(
                'pageBtn' => $pages,
                'goodsInfo' => $goodsInfo
            );
            // $goodsInfo = $this->where($arr)->select();
            // echo $this->getLastSql();
            // return $goodsInfo;
            // dump($list);
        }

        //查询商品配件
        public function commodityParts()
        {
            $parts = $this->parts();
            $id = $_GET['id'];
            //获取查询的关键字
            $searchKeywordStr = I('post.searchKeywordStr');
            // dump($parts);

            $list = [];
            foreach ($parts as $k =>$v) {

                // $parts[$k] = $k['id'];
                $list[$k] = $v['id'];
            }
            // dump($list);

            //判断排序
            if ($cost == 1) {
                //判断价格排序
                $res = array('price'=>'asc');

            } else if ($cost == 2) {
                $res = array('price'=>'desc');

            } else if ($grounding == 1) {
                //判断上架时间排序
                $res = array('addtime'=>'asc');

            } else if ($grounding == 2) {
                $res = array('addtime'=>'desc');

            } else {
                $res = '';
            }


            //判断构造条件
            if ($id) {

                $arr['tid'] = array('EQ', $id);

            } else if($searchKeywordStr){

                $arr['name'] = array('like','%'.$searchKeywordStr.'%');

            } else{
                $arr['tid'] = array('IN', $list);
            }

            //获取数据的总数
            $count = $this->where($arr)->count();
            //设置每页显示
            $num = 4;
            //实例化分页类
            $Page = new \Think\Page($count,$num);
            //显示分页
            $pages = $Page->show();
            //获取limit参数
            $limit = $Page->firstRow.','.$Page->listRows;
            //进行分页查询
            $goodsInfo = $this->where($arr)->order($res)->limit($limit)->select();

            // return 1;
            return array(
                'pageBtn' => $pages,
                'goodsInfo' => $goodsInfo
            );
            // $goodsInfo = $this->where($arr)->select();
            // echo $this->getLastSql();
            // return $goodsInfo;
        }


        //配件分类
        public function parts()
        {
            //查询配件类
            $types = M('type');
            $typesInfo = $types->where("name='配件'")->select();
            $pid = $typesInfo[0]['id'];
            $typesPhone = $types->where("pid='$pid'")->select();
            //返回分页
            return $typesPhone;
        }

        //判断商品的分类路径
        public function detailsType()
        {
            // dump(I('get.'));die;
            $id = I('get.id');
            $goods = M('goods');
            $type = M('type');

            $goods = $goods->where("id='$id'")->select();
            $tid = $goods[0]['tid'];
            $types = $type->where("id='$tid'")->select();

            $arr = '';
            foreach ($types as $k => $v) {
                // dump($v);
                $arr[$k] = $v;
            };
            // dump($arr);
            return $arr;

        }

        //商品详情
        public function details()
        {
            $id = I('get.id');
            $Goods = M('goods');

            if (!$id) {
                // echo 0;
                return 0;
                exit;
            }
            // dump($id);
            $details = $this->where("id='$id'")->select();
            // dump($details);
            return $details;
        }


        //商品库存
        public function stock()
        {
            $id = I('get.id');
            $stock = M('stock');

            if (!$id) {
                // echo 0;
                return 0;
                exit;
            }

            $stocks = $stock->where("gid='$id'")->select();

            $col = [
                '香槟金',
                '磨砂黑',
                '玫瑰金',
                '流光白',
                '星空灰',
                '其他'
                ];
            $cap = [
                '16G',
                '32G',
                '64G',
                '128G',
                '其他'
                ];

            //遍历内存与颜色
            foreach ($stocks as $k => $v) {
                // dump($stocks);
                // $colors[$k] = $v['colors'];
                $stocks[$k]['colors'] = $col[$v['colors']];
                $stocks[$k]['capacity'] = $cap[$v['capacity']];
            }
            return $stocks;
        }


        //商品参数
        public function parameter()
        {
            $id = I('get.id');
            $parameter = M('parameter');

            if (!$id) {
                // echo 0;
                return 0;
                exit;
            }
            // dump($id);
            $parameter = $parameter->where("gid='$id'")->select();
            // dump($parameter[0]['cpu']);
            return $parameter;
        }


        //商品图片详情
        public function pics()
        {
            $id = I('post.goodsid');
            $pic = M('pics');

            if (!$id) {
                // echo 0;
                return 0;
                exit;
            }
            // dump($id);
            $pics = $pic->where("gid='$id'")->select();
            // dump($pics);
            return $pics;
        }
    }
