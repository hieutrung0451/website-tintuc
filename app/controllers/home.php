<?php

	class homeClient extends Controller{
		public function __construct(){
			parent::__construct();

			$number = $this->Model->count("select * from menu_list");
			
			$num_page = 6;
			
			$page_show = ceil($number/$num_page);

			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

			$form = ($page-1)*$num_page;

			$data = $this->Model->fetch("select * from menu_list order by id desc limit $form,$num_page");

			include "app/views/home.php";

		}
	}
	new homeClient();
?>

