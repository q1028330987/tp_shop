<?php
    namespace Home\Controller;

    use Think\Controller;

    class DetailsController extends Controller
    {
        public function details()
        {
            $details = D('goods')->details();
            $stock = D('goods')->stock();
            $parameter = D('goods')->parameter();
            $pics = D('goods')->pics();
            // dump($parameter['cpu']);

            if ($details) {
                $this->assign('details', $details);
                $this->assign('stock', $stock);
                $this->assign('parameter', $parameter);
                $this->assign('pics', $pics);
                $this->display();
            } else {
                echo "<h2>你的商品已被外星人偷走了，请回首页挑选其他商品～</h2>";
            }
        }
    }
