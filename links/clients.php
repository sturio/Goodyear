<?php
  require '../connection/index.php';

  $operation = $_REQUEST['operation'];
  if ($operation === 'new') {
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $colony = $_REQUEST['colony'];
    $state = $_REQUEST['state'];
    $phone = $_REQUEST['phone'];
    $contact_name = $_REQUEST['contact_name'];
    $rfc = $_REQUEST['rfc'];
    $pc = $_REQUEST['pc'];
    $city = $_REQUEST['city'];
    $cell_phone = $_REQUEST['cell_phone'];

    $query = "SELECT * FROM clients where name='" . $name ."';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    if (mysql_fetch_assoc($result)) {
      echo 'El cliente ya existe. Favor de verificarlo o ingresar uno diferente.';
    } else {
      $query = "INSERT INTO clients (name, address, colony, state, phone, contact_name, rfc, pc, city, cell_phone, last_date) VALUES ('" . $name . "','" . $address . "','" . $colony . "','" . $state . "','" . $phone . "','" . $contact_name . "','" . $rfc . "','" . $pc . "','" . $city . "','" . $cell_phone . "',now());";
      $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
      echo 'Usuario agregado.';
    }
  } else if ($operation === 'modify') {
    $query = "UPDATE clients SET";
    if ($_REQUEST['name']) {
      $query .= " name='" . $_REQUEST['name'] . "',";
    }
    if ($_REQUEST['address']) {
      $query .= " address='" . $_REQUEST['address'] . "',";
    }
    if ($_REQUEST['colony']) {
      $query .= " colony='" . $_REQUEST['colony'] . "',";
    }
    if ($_REQUEST['state']) {
      $query .= " state='" . $_REQUEST['state'] . "',";
    }
    if ($_REQUEST['phone']) {
      $query .= " phone='" . $_REQUEST['phone'] . "',";
    }
    if ($_REQUEST['contact_name']) {
      $query .= " contact_name='" . $_REQUEST['contact_name'] . "',";
    }
    if ($_REQUEST['rfc']) {
      $query .= " rfc='" . $_REQUEST['rfc'] . "',";
    }
    if ($_REQUEST['pc']) {
      $query .= " pc='" . $_REQUEST['pc'] . "',";
    }
    if ($_REQUEST['city']) {
      $query .= " city='" . $_REQUEST['city'] . "',";
    }
    if ($_REQUEST['cell_phone']) {
      $query .= " cell_phone='" . $_REQUEST['cell_phone'] . "',";
    }
    $query .= " last_date=now() WHERE id=" . $_REQUEST['id'] . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    echo 'Actualizado correctamente.';

  } else if ($operation === 'delete') {
    $query .= "DELETE FROM clients WHERE id=" . $_REQUEST['id'] . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    echo 'Eliminado correctamente.';
  } else if ($operation === 'clients') {
    $query = "SELECT id, name FROM clients;";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    while ($row = mysql_fetch_assoc($result)) {
      echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
    }
  } else if ($operation === 'selectClient') {
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM clients where id=" . $id . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $row = mysql_fetch_assoc($result);
    echo $row['name'] . ',' . $row['address'] . ',' . $row['colony'] . ',' . $row['state'] . ',' . $row['phone'] . ',' . $row['contact_name'] . ',' . $row['rfc'] . ',' . $row['pc'] . ',' . $row['city'] . ',' . $row['cell_phone'];
  }
  mysql_close($link);
 ?>
