
<?php

extract($_REQUEST);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
  <link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/gen_validatorv4.js" language="JavaScript" xml:space="preserve"></script>
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="js/jquerymask.js" charset="utf-8"></script>

<script type="text/javascript">
  

</script>
</head>

<body>

	<tr>
            <td valign="top">
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
                  <td colspan="3" class="texto1">Seleccione:</td>
                </tr>
                 <tr>
                    <td>&nbsp;</td>
                    <td colspan="2"><input type="radio" name="nueva" id="nueva2" value="<?php echo $clien->cod_cliente;?>" onclick="window.location.replace('registrar_programador.php')"/>
                       Registrar Programador</td>
                    </tr>
                  <tr>
                    <td width="2%">&nbsp;</td>
                    <td colspan="2"><input type="radio" name="nueva" id="nueva1" onclick="window.location.replace('calculadora.php')"/>
                      Calculadora</td>
                  </tr>
                   <tr>
                    <td width="2%">&nbsp;</td>
                    <td colspan="2"><input type="radio" name="nueva" id="nueva1" onclick="window.location.replace('logico.php')"/>
                      Ejercicio logico</td>
                  </tr>
                
                
               
               
                <tr>
                  <td width="2%">&nbsp;</td>
                  <td width="20%" class="texto">&nbsp;</td>
                   
                  <td>&nbsp;</td>
                </tr>
               
                <tr>
                  <td width="2%" height="20">&nbsp;</td>
                  <td width="20%" height="20" class="texto">&nbsp;</td>
                  <td height="20">&nbsp;</td>
                </tr>
              </table>
           </td>
          </tr>

</body>

</html>