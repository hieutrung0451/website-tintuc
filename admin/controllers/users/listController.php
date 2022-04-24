<?php

	class ListUsers extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from users where token='$id'");
					header("location: index.php?controller=users/list");
					break;
			}

			$number = $this->Model->count("select * from users");
			
			$num_page = 2;
			
			$page_show = ceil($number/$num_page);

			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

			$form = ($page - 1)*$num_page;

			$data = $this->Model->fetch("select * from users limit $form, $num_page");
			include "views/users/listView.php";
		}
	}

	new ListUsers();
?>
