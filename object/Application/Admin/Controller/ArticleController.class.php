<?php
	namespace Admin\Controller;

	use Think\Controller;

	class ArticleController extends Controller
	{ 
		public function article_list()
	    { 
	    	$this->display('article-list/article-list');
	    }
	}