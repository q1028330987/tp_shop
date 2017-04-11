<?php
	namespace Admin\Controller;

	use Think\Controller;

	class FeedbackController extends Controller
	{ 
		public function feedback_ist()
	    { 
	        $this->display('menu-comments/feedback-list');
	    }
	}