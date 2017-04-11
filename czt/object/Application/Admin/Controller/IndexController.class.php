<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller 
{
    public function index()
    {
    	$this->display();
    }

    public function welcome()
    {
    	$this->display();
    }

    public function article_list()
    { 
    	$this->display('article-list/article-list');
    }

    public function picture_list()	
    { 
    	$this->display('picture/picture-list');
    }

    public function picture_show()
    { 
    	$this->display('picture/picture-show');
    }

    public function picture_add()
    { 
    	$this->display('picture/picture-add');
    }
}