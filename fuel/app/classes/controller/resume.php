<?php

class Controller_Resume extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Resume &raquo; Index';
		$this->template->content = View::forge('resume/index', $data);
	}

}
