<?php
    namespace Home\Controller;

    use Think\Controller;

    class PartsController extends Controller
    {
        public function parts()
        {
            $parts = D('goods')->parts();
            $commodityParts = D('goods')->commodityParts();

            // dump($parts);
            $this->assign('parts', $parts);
            $this->assign('commodityParts', $commodityParts['goodsInfo']);
            $this->assign('pages', $commodityParts['pageBtn']);
            $this->display();
        }
    }
