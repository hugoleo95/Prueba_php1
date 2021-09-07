<?php 
extract($_REQUEST);
ob_start();

require_once("../clases/prueba.php");

switch ($operacion){

	   case "registrar_programador":
		$pru = new Prueba();

		$exito=$pru->agregar_programador($nombre, $apellido, $cedula, $correo, $lenguajes);

		

	
		if ($exito=='OK') {
			
			$objProgramadores=$pru->listar_programadores('', '');
			$total_programadores=$pru->total;
		}

		$respuesta = new stdClass();

		$respuesta->resultado ="$exito";
		$respuesta->mensaje="Programador exitosamente registrado";
		$respuesta->total_programadores="$total_programadores";

		echo json_encode($respuesta);

		break;


	case "calculadora":

	if($operador!='raiz' and $operador!='%') {
		
		if ($operador=='+') {
			$resultado=round($operando1+$operando2, 2);
			$nombre_operador="La Suma";
			
		}
		if ($operador=='-') {
			$resultado=round($operando1-$operando2, 2);
			$nombre_operador="La Resta";
		}
		if ($operador=='*') {
			$resultado=round($operando1*$operando2, 2);
			$nombre_operador="La Multiplicacion";
		}
		if ($operador=='/') {
			$resultado=round($operando1/$operando2, 2);
			$nombre_operador="La División";
		}
	}
	elseif ($operador=='raiz') {
		$resultado=round(sqrt($operando3),2);
		$nombre_operador="La Raiz Cuadrada";
	}elseif ($operador=='%') {
		$resultado=round( ($operando4*$porcentaje)/100  ,2);
		$nombre_operador="El Porcentaje";
	}
	else{
		$resultado='';
	}

	header("Location:../calculadora.php?resultado=$resultado&nombre_operador=$nombre_operador");


	break;

	case "logico":
	$izquierda_derecha=$arreglo[0]+$arreglo[4]+$arreglo[8];
	$derecha_izquierda=$arreglo[2]+$arreglo[4]+$arreglo[6];
	$resultado=$izquierda_derecha-$derecha_izquierda;
	$resultado=abs($resultado);

	header("Location:../logico.php?resultado=$resultado");

	break;



	

	//header("Location:../programador_resultado.php?err=$err");


	default:
		header("Location:../index.php");
	break;

	}
	ob_end_flush();

	?>