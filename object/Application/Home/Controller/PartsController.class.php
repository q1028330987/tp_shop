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
            $this->assign('commodityParts', $commodityParts);
            $this->display();
        }
    }
