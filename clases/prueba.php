<?php 

class Prueba{
//var $nombre_variables_basededatos;

	//var $primero,$ultimo,$total,$proximo,$anterior;


	function __construct() {
		$this->nombre_variable="";
		$this->primero=$this->ultimo=$this->total=$this->proximo=$this->anterior="";
		
		include ("conexion.php");
		
	}

	function agregar_programador($nombre, $apellido, $cedula, $correo, $lenguajes){

		$err='OK';
		$query="insert into programador (nombre, apellido, cedula, correo, lenguajes, fecha_creacion) values ('$nombre', '$apellido', '$cedula', '$correo', '$lenguajes', '".date('Y-m-d')."')";

		$con=@mysqli_connect($this->varhost,$this->varlogin,$this->varpass,$this->vardb);
		@mysqli_select_db($con,$this->vardb);
		mysqli_set_charset($con, "utf8");
		$rs=@mysqli_query($con,$query);echo mysqli_error($con);
		if ($rs) {
			$this->cod_programador=@mysqli_insert_id($con);
		}else {
			$err='X';
		}
		@mysqli_close($con);
		return $err;
	}

	// listar todos las mensualidades del colegio
	function listar_programadores($pag, $regxpag){
		if (empty($pag)) $pag=1;		
		if (empty($regxpag)) $regxpag=20;		
	    $inic = ($pag * $regxpag) - $regxpag;		
		$con=@mysqli_connect($this->varhost,$this->varlogin,$this->varpass,$this->vardb);
		@mysqli_select_db($con,$this->vardb);	
		   $query="select SQL_CALC_FOUND_ROWS t1.* from programador t1 ORDER BY t1.cod_programador DESC";
		
		$rs=@mysqli_query($con,$query);		
		if (@mysqli_num_rows($rs)){ 
		    $query="SELECT FOUND_ROWS()";
			$rss=@mysqli_query($con,$query);
			$this->total=$this->mysqli_result($rss,0,'FOUND_ROWS()');
			while($obj = @mysqli_fetch_object($rs)) {
			       $return[] = $obj;
			}
			$this->proximo = $pag + 1;
			$this->anterior = $pag - 1;
			
			$this->primero = $inic + 1;
			$this->ultimo=$inic + $regxpag;
			
			if ($this->total < $this->ultimo)
			    $this->ultimo=$this->total;
		}
	}


		function mysqli_result($res, $row, $field=0) { 
		$res->data_seek($row); 
		$datarow = $res->fetch_array(); 
		return $datarow[$field]; 
	}

}