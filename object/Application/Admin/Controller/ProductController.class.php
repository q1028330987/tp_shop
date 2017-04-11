<?php
	namespace Admin\Controller;

	use Think\Controller;

	class ProductController extends Controller
	{ 
		public function product_brand()
	    { 
	        $this->display('product/product-brand');
	    }

	    public function product_list()
	    { 

	        $this->display('product/product-list');
	    }

	    public function product_category()
	    { 
	        $this->display('product/product-category');
	    }

	    public function product_category_add()
	    { 
	        $this->display('product/product-category-add');
	    }

	    public function product_add()
	    { 
	        $this->display('product/product-add');
	    }
	}