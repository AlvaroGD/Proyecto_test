<?php
  $mysqli = new mysqli('localhost', 'root', '', 'hospital');
?>
<html>
<head>
  <title>SISTEMA DE PAGO DE TV</title>
  <meta charset=utf-8" />
</head>
<body>
<FORM action="guardar_datos.php" method="post" name="formulario">
Habitacion:	 <select name="habitacion">
        <option>Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM habitaciones");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option>'.$valores[id].'</option>';
          }
        ?>
      </select>
<br />
Tiempo: <input type="text" name="tiempo" id="tiempo">
<br />
<input type="submit" value="Enviar">
<input type="reset">
				   
</FORM>
</body>
 
</html>