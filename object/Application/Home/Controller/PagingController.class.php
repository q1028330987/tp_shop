<?php
    namespace Home\Controller;

    use Think\Controller;

    class PagingController extends Controller
    {
        public function paging()
        {
            $paging = D('goods')->paging();

            // dump($paging);
            $this->assign('paging', $paging);
            $this->display();
        }
    }
