<?php 
	class Productos extends Controllers{
		public function __construct()
		{
			parent::__construct();
			/* session_start();
			session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(5); */
		}

		public function Productos()
		{
			// if(empty($_SESSION['permisosMod']['r'])){
			// 	header("Location:".base_url().'/dashboard');
			// }
			$data['page_tag'] = "productos";
			$data['page_title'] = "PRODUCTOS <small>Empresa_Generica</small>";
			$data['page_name'] = "productos";
			$data['page_functions_js'] = "functions_productos.js";
			$this->views->getView($this,"productos",$data);
		}

        



    }

?>


