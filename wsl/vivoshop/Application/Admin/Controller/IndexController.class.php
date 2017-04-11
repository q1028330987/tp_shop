<?php
    namespace Admin\Controller;

    use Think\Controller;

    class IndexController extends Controller
    {
        //加载首页
        public function index()
        {
            $this->display('Index/index');
        }

        //加载welcome页
        public function welcome()
        {
            $this->display('Welcome/welcome');
        }

        //加载Picture_list页
        public function picture_list()
        {
            $this->display('Picture/picture-list');
        }

        //加载article_list页
        public function article_list()
        {
            $this->display('Article/article-list');
        }

        //加载product_brand页
        public function product_brand()
        {
            $this->display('Product/product-brand');
        }

        //加载product_category页面
        public function product_category()
        {
            $this->display('Product/product-category');
        }

        //加载product_list页面
        public function product_list()
        {
            $this->display('Product/product-list');
        }

        public function product_category_add()
        {
            $this->display('Product/product-category-add');
        }
    }
