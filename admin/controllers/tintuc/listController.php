<?php

	class ListTintuc extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
			 	case 'delete':
			 		$id = isset($_GET["id"])?$_GET["id"]:0;
			 		$this->Model->execute("delete from menu_list where token='$id'");
			 		echo "<meta http-equiv='refresh' content = '0; URL=index.php?controller=tintuc/list'>";
			 		break;
			 } 

			$number = $this->Model->count("select * from menu_list");
			
			$num_page = 4;
			
			$page_show = ceil($number/$num_page);

			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

			$form = ($page - 1)*$num_page;

			$data = $this->Model->fetch("select * from menu_list order by id desc limit $form,$num_page"); 

			include "views/tintuc/listView.php"; 
		}
	}
	new ListTintuc();

?>