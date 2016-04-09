<?php
  require '../connection/index.php';

  $operation = $_REQUEST['operation'];
  if ($operation === 'new') {
    $type_product = $_REQUEST['type_product'];
    $barcode = $_REQUEST['barcode'];
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    $key = $_REQUEST['key'];
    $brand = $_REQUEST['brand'];
    $model = $_REQUEST['model'];
    $measure = $_REQUEST['measure'];
    $treadware = $_REQUEST['treadware'];
    $load_index = $_REQUEST['load_index'];
    $load_speed = $_REQUEST['load_speed'];
    $retail_price = $_REQUEST['retail_price'];
    $wholesale_price = $_REQUEST['wholesale_price'];
    $special_price = $_REQUEST['special_price'];

    $query = "SELECT * FROM products where name ='" . $name ."';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    if (mysql_fetch_assoc($result)) {
      echo 'El Nombre de Producto ya existe.';
    } else {
      $query = "SELECT * FROM products where barcode ='" . $barcode ."';";
      $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
      if (mysql_fetch_assoc($result)) {
        echo 'El Codigo de Barras ya existe.';
      } else {
        $query = "INSERT INTO products (type_product, barcode, name, description, key_, brand, model, measure, treadware, load_index, load_speed, retail_price, wholesale_price, special_price, last_date) VALUES ('" . $type_product . "','" . $barcode . "','" . $name . "','" . $description . "','" . $key . "','" . $brand . "','" . $model . "','" . $measure . "','" . $treadware . "','" . $load_index . "','" . $load_speed . "','" . $retail_price . "','" . $wholesale_price . "','" . $special_price . "',now());";
        $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
        echo 'Producto agregado.';
      }
    }
  } else if ($operation === 'modify') {
    $query = "UPDATE products SET";
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
    $query .= "DELETE FROM products WHERE id=" . $_REQUEST['id'] . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    echo 'Eliminado correctamente.';
  } else if ($operation === 'products') {
    $query = "SELECT id, name, barcode FROM products;";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    while ($row = mysql_fetch_assoc($result)) {
      echo $row['id'] . ',' . $row['name'] . ',' . $row['barcode'];
    }
  } else if ($operation === 'selectClient') {
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM products where id=" . $id . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $row = mysql_fetch_assoc($result);
    echo $row['name'] . ',' . $row['address'] . ',' . $row['colony'] . ',' . $row['state'] . ',' . $row['phone'] . ',' . $row['contact_name'] . ',' . $row['rfc'] . ',' . $row['pc'] . ',' . $row['city'] . ',' . $row['cell_phone'];
  }
  mysql_close($link);
 ?>
