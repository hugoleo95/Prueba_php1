
<?php

extract($_REQUEST);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
  <link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/gen_validatorv4.js" language="JavaScript" xml:space="preserve"></script>
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="js/jquerymask.js" charset="utf-8"></script>

<script type="text/javascript">
  
  function seleccion_operacion(elemento) {
    console.log(elemento);
    if(elemento=='+' || elemento =='-' || elemento=='*' || elemento =='/') {
     
      document.getElementById('normales').style.display = "table-row";
      document.getElementById('raiz').style.display = "none";
      document.getElementById('porcentaje').style.display = "none";

      
    }  else if (elemento=='raiz') {
      document.getElementById('normales').style.display = "none";
      document.getElementById('raiz').style.display = "table-row";
      document.getElementById('porcentaje').style.display = "none";


    } else if (elemento=='%') {
      document.getElementById('normales').style.display = "none";
      document.getElementById('raiz').style.display = "none";
      document.getElementById('porcentaje').style.display = "table-row";
    }

     else{
      document.getElementById('normales').style.display = "none";
      document.getElementById('raiz').style.display = "none";
      document.getElementById('porcentaje').style.display = "none";
      
      
     
  
    }
  }
</script>
</head>

<body>
  <form id="form2" name="form2" method="post" action="index.php">
           <tr>
           <td valign="top">
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td valign="top" class="barra2"><input name="regresar" type="submit" class="boton2" id="regresar" value="Regresar" />
                
                 </td>
               </tr>
             </table></td>
         </tr>
          </form>

	<tr>
            <td valign="top"><form id="forma1" name="forma1" method="post" action="Controllers/prueba.controller.php" enctype="multipart/form-data">
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="2" class="texto">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                 <?php if (!empty($err)) {?>
                  <tr>
                    <td colspan="3" align="center" class="mensajes"><?php echo $err?></td>
                  </tr>
                  <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  <?php } ?>
                <tr>
                  <td colspan="3" class="texto1">Calculadora:</td>
                </tr>
                  <?php if (!empty($resultado)) {
              
                 ?>
                <tr>
                  <td height="28">&nbsp;</td>
                  <td height="28" colspan="2" class="formularios-asterisco" style="font-size: 20px;">El resultado de <?php echo $nombre_operador ?> es <?php echo "$resultado"; ?></td>
                  </tr>

               <?php } ?>
                <tr>
                  <td width="2%">&nbsp;</td>
                  <td width="20%" class="texto">&nbsp;</td>
                   
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25" class="texto"><select name="operador" id="operador" onchange="seleccion_operacion(this.value)">
                              <option value="">Seleccione el operador</option>
                              <option value="+" >Sumar</option>
                              <option value="-" >Restar</option>
                              <option value="*" >Multiplicar</option>
                              <option value="/" >Division</option>
                              <option value="raiz" >Raiz Cuadrada</option>
                              <option value="%" >Porcentaje</option>

                  </select></td>
                   
                </tr>
                 <tr >
                  <td width="2%" height="20">&nbsp;</td>
                  <td width="20%" height="20" class="texto">&nbsp;</td>
                  <td height="20">&nbsp;</td>
                </tr>

                 <tr style="display: none;" id="normales">
                  <td height="25">&nbsp;</td>
                  <td width="20%" height="25" class="texto"> Ingrese Operando 1 <input name="operando1" type="text" id="operando1" size="15" /></td>
                 
                   <td height="25" class="texto">Ingrese Operando 2<input name="operando2" type="text" id="operando2" size="15" /></td>
                </tr>

                 <tr style="display: none;" id="raiz">
                  <td height="25">&nbsp;</td>
                  <td width="20%" height="25" class="texto"> Ingrese Operando  <input name="operando3" type="text" id="operando1" size="15" /></td>
                 
                  
                </tr>

                 <tr style="display: none;" id="porcentaje">
                  <td height="25">&nbsp;</td>
                  <td width="20%" height="25" class="texto"> Ingrese Operando  <input name="operando4" type="text" id="operando1" size="15" /></td>
                 
                   <td height="25" class="texto">Ingrese Porcentaje<input name="porcentaje" type="text" id="operando2" size="15" /></td>
                </tr>
                
                
               
               
                <tr>
                  <td width="2%">&nbsp;</td>
                  <td width="20%" class="texto">&nbsp;</td>
                   
                  <td>&nbsp;</td>
                </tr>
                <tr>
                 <td width="2%">&nbsp;</td>
                  <td colspan="2">
                  <input name="crear_programador" type="submit" class="boton" id="crear_programador" value="  Calcular  " />
                  <input name="operacion" type="hidden" id="operacion" value="calculadora" />
                 
                    
                      </td>
                </tr>
                <tr>
                  <td width="2%" height="20">&nbsp;</td>
                  <td width="20%" height="20" class="texto">&nbsp;</td>
                  <td height="20">&nbsp;</td>
                </tr>
              </table>
            </form></td>
          </tr>

</body>

</html>