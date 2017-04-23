<?php
    namespace Home\Controller;

    use Think\Controller;

    class PagingController extends Controller
    {
        public function paging()
        {
            // echo 1;
            $paging = D('Goods')->paging();
            $commodityPhone = D('goods')->commodityPhone();
            // dump($commodityPhone);

            $this->assign('paging', $paging);
            $this->assign('commodityPhone', $commodityPhone['goodsInfo']);
            $this->assign('pages', $commodityPhone['pageBtn']);
            $this->display();
        }

    }
