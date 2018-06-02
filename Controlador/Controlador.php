<?php 
  
  class Controlador
  {
  	public function abrir_pagina($url){
			require $url;
		}

	public function login($usuario,$password,$url){

			$gestor = new Gestor();
			$result = $gestor->login($usuario,$password);
			switch ($result) {
				case 1:
					$resultdf = $gestor->usuario($usuario);
					$row = $resultdf->fetch();
					$_SESSION['usuario'] = $row['idUsuario'];
					$_SESSION['nombre'] = $row['nombreUsuario'];
					$_SESSION['ROL'] = $row['id_tipoUsuario'];
					if ($_SESSION['ROL']==3) {
						header("Location:".$url);
					}elseif($_SESSION['ROL']==2 || $_SESSION['ROL']==1){
						require ("Vista/html/panel.php");
					}
					break;
				case 2:
					header("Location:index.php");
					die();
					break;
				case 3:
					header("Location:index.php");
					die();
					break;		
			}

		}
	}
?>