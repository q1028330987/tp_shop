<?php
    namespace Home\Controller;

    use Think\Controller;

    class PagingController extends Controller
    {
        public function paging()
        {
            $paging = D('goods')->paging();
            $commodityPhone = D('goods')->commodityPhone();
            // dump($commodityPhone);

            $this->assign('paging', $paging);
            $this->assign('commodityPhone', $commodityPhone);
            $this->display();
        }

    }
