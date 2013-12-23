<?php

	class Home extends CI_Controller{
	
		function __construct(){
			parent::__construct();
			$this->template->write_view('navigation','nav/public');
			$this->template->write_view('leftsidebar','sidebar/leftsidebar');
			$this->template->write_view('rightsidebar','sidebar/rightsidebar');
			
		}
		
		function index(){
			$this->template->write('title','Home');
			$this->template->write_view('content','content/home');
			$this->template->render();
		}
	}
	
?>
