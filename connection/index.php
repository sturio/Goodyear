<?php
  $link = mysql_connect('localhost', 'root', 'SturioSystem')
    or die('No se pudo conectar: ' . mysql_error());
  mysql_select_db('SotoGoodyear', $link) or die ('No se pudo seleccionar la base de datos');
?>
