<?php 
 
/**
* 
*/
class Gestor
{
	public function login($usuario,$password){

			$conexion = new Conexion();
			$sql = "SELECT * FROM usuarios WHERE idUsuario = '$usuario' AND 	contrasena = '$password'";
			$conexion->buscar_query($sql);
			$validar = $conexion->ObtenerFilasAfectadas();

			if ($validar>0) {
				return 1;
			}else{

				$sql = "SELECT * FROM usuarios WHERE idUsuario = '$usuario'";
				$conexion->buscar_query($sql);
				$validar = $conexion->ObtenerFilasAfectadas();
				if ($validar>0) {
				 	return 2;
				}else{

					return 3;

				} 

			}

		}
	public function usuario($usuario){
			$conexion = new Conexion();
			$sql = "SELECT * FROM usuarios WHERE idUsuario = '$usuario'";
			$conexion->buscar_query($sql);
			$resultdf = $conexion->obtenerResult();
			return $resultdf;
		}
}
?>