
<?php

extract($_REQUEST);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Logico</title>
  <link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/gen_validatorv4.js" language="JavaScript" xml:space="preserve"></script>
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="js/jquerymask.js" charset="utf-8"></script>


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
                  <td colspan="3" class="texto1">Rellene la matriz:</td>
                </tr>
              
                  <?php if (!empty($resultado)) {
              
                 ?>
                <tr>
                  <td height="28">&nbsp;</td>
                  <td height="28" colspan="2" class="formularios-asterisco" style="font-size: 20px;">El resultado es <?php echo "$resultado"; ?></td>
                  </tr>

               <?php } ?>
                <tr>
                  <td width="2%">&nbsp;</td>
                  <td width="20%" class="texto">&nbsp;</td>
                   
                  <td>&nbsp;</td>
                </tr>
               
                 <tr >
                  <td width="2%" height="20">&nbsp;</td>
                  <td width="20%" height="20" class="texto">&nbsp;</td>
                  <td height="20">&nbsp;</td>
                </tr>
                  <tr>
            <td valign="top" align="center">
              <table width="100%" border="1" align="center" cellpadding="0" cellspacing="2" class="texto">

                 <tr>
                  <td height="25" width="5%"><input name="arreglo[0]" type="text" id="arreglo[0]" size="2" /></td>
                  <td height="25" width="5%"><input name="arreglo[1]" type="text" id="arreglo[1]" size="2" /></td>
                  <td height="25" width="5%"><input name="arreglo[2]" type="text" id="arreglo[2]" size="2" /></td>
                 </tr>
                  <tr>
                  <td height="25" width="5%"><input name="arreglo[3]" type="text" id="arreglo[3]" size="2" /></td>
                  <td height="25" width="5%"><input name="arreglo[4]" type="text" id="arreglo[4]" size="2" /></td>
                  <td height="25" width="5%"><input name="arreglo[5]" type="text" id="arreglo[5]" size="2" /></td>
                 </tr>
                  <tr>
                  <td height="25" width="5%"><input name="arreglo[6]" type="text" id="arreglo[6]" size="2" /></td>
                  <td height="25" width="5%"><input name="arreglo[7]" type="text" id="arreglo[7]" size="2" /></td>
                  <td height="25" width="5%"><input name="arreglo[8]" type="text" id="operando1" size="2" /></td>
                 </tr>

               </table>
             </td>
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
                  <input name="operacion" type="hidden" id="operacion" value="logico" />
                 
                    
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