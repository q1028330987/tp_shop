<?php
    namespace Home\Controller;

    use Think\Controller;

    class IndexController extends Controller
    {
        public function index()
        {
            $wheel = M('wheel');
            $wheels = $wheel->where("status='1'")->select();
            // dump($wheels);
            $this->assign('wheel', $wheels);
            $this->display();
        }
    }
