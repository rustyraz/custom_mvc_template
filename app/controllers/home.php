<?php
class home extends Controller{

	public function index($name = 'Guest')
	{
		$user = $this->model('User');
		$user->name = $name;
		//echo $user->name;
		
		//call a view
		$this->view('home/index', ['name' => $user->name]);
	}


}