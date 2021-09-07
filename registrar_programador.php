


<!DOCTYPE html>
<html>
<head>
	<title>Registrar Programador</title>
</head>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/gen_validatorv4.js" language="JavaScript" xml:space="preserve"></script>
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="js/jquerymask.js" charset="utf-8"></script>
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
            <td valign="top"><form target="_blank" id="forma1" name="forma1" method="post" action="Controllers/prueba.controller.php" enctype="multipart/form-data">
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
                  <td colspan="3" class="texto1">Datos del Programador:</td>
                </tr>
                <tr>
                  <td height="28">&nbsp;</td>
                  <td height="28" colspan="2" class="formularios-asterisco">* Campos obligatorios</td>
                  </tr>

                 
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25" class="texto">Nombres <span class="mensajes">*</span></td>
                  <td height="25"><input name="nombre" type="text" id="nombre" size="50" /></td>
                </tr>
                
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25" class="texto">Apellidos <span class="mensajes">*</span></td>
                  <td height="25"><input name="apellido" type="text" id="apellido" size="50" /></td>
                </tr>
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25" class="texto">Cedula <span class="mensajes">*</span></td>
                  <td height="25"><input name="cedula" type="text" id="cedula" size="50" /></td>
                </tr>
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25" class="texto">Correo</td>
                  <td height="25"><input alt="Ced" name="correo" type="text" id="correo" /></td>
                </tr>
              
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25" class="texto">Lenguajes</td>
                  <td height="25"><input name="lenguajes" type="text" id="lenguajes" size="50" /></td>
                </tr>
               
                <tr>
                  <td width="2%">&nbsp;</td>
                  <td width="20%" class="texto">&nbsp;</td>
                   
                  <td>&nbsp;</td>
                </tr>
                <tr>
                 <td width="2%">&nbsp;</td>
                  <td colspan="2">
                  <input name="crear_programador" type="submit" class="boton" id="crear_programador" value="  Crear Programador  " />
                  <input name="operacion" type="hidden" id="operacion" value="registrar_programador" />
                 
                    
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
<script type="text/javascript">
  var frmvalidator = new Validator("forma1");
  frmvalidator.EnableMsgsTogether();
  frmvalidator.addValidation("nombre","req","¡Por favor, debe ingresar el nombre del programador!");
  frmvalidator.addValidation("apellido","req","¡Debe ingresar el apellido del programador!");
  frmvalidator.addValidation("cedula","req","¡Debe completar la cedula del programador!");
 
 
  frmvalidator.addValidation("correo","req","¡Debe ingresar el correo del programador!");
  frmvalidator.addValidation("lenguajes","req","¡Debe ingresar los lenguajes que conoce el programador!");
  frmvalidator.addValidation("correo","email","¡Debe ingresar un correo valido!");
 
 
</script>
</html>