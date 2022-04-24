<?php

	class DetailTintuc extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:"";
			$value = $this->Model->fetchOne("select * from menu_list where token='$id'");

			include "views/tintuc/detailView.php";
		
		}
	}
	new DetailTintuc();
?>