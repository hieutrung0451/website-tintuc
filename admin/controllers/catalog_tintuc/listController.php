<?php

	class ListCatalogTintuc extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["topic"];
					$metaTitle = RemoveString($name);
					$this->Model->execute("insert into menu_catalog(name,metaTitle) values('$name','$metaTitle')");
					
					echo "<meta http-equiv='refresh' content = '0; URL=index.php?controller=catalog_tintuc/list'>";
					break;
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from menu_catalog where id=$id");
					echo "<meta http-equiv='refresh' content = '0; URL=index.php?controller=catalog_tintuc/list'>";
					break;
			}

			$data = $this->Model->fetch("select * from menu_catalog"); 

			include "views/catalog_tintuc/listView.php";
		}
	}
	new ListCatalogTintuc();
?>