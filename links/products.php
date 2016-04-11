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
    if ($_REQUEST['barcode']) {
      $query .= " barcode='" . $_REQUEST['barcode'] . "',";
    }
    if ($_REQUEST['name']) {
      $query .= " name='" . $_REQUEST['name'] . "',";
    }
    if ($_REQUEST['description']) {
      $query .= " description='" . $_REQUEST['description'] . "',";
    }
    if ($_REQUEST['key_']) {
      $query .= " key_='" . $_REQUEST['key_'] . "',";
    }
    if ($_REQUEST['brand']) {
      $query .= " brand='" . $_REQUEST['brand'] . "',";
    }
    if ($_REQUEST['model']) {
      $query .= " model='" . $_REQUEST['model'] . "',";
    }
    if ($_REQUEST['measure']) {
      $query .= " measure='" . $_REQUEST['measure'] . "',";
    }
    if ($_REQUEST['treadware']) {
      $query .= " treadware='" . $_REQUEST['treadware'] . "',";
    }
    if ($_REQUEST['load_index']) {
      $query .= " load_index='" . $_REQUEST['load_index'] . "',";
    }
    if ($_REQUEST['load_speed']) {
      $query .= " load_speed='" . $_REQUEST['load_speed'] . "',";
    }
    if ($_REQUEST['retail_price']) {
      $query .= " retail_price='" . $_REQUEST['retail_price'] . "',";
    }
    if ($_REQUEST['wholesale_price']) {
      $query .= " wholesale_price='" . $_REQUEST['wholesale_price'] . "',";
    }
    if ($_REQUEST['special_price']) {
      $query .= " special_price='" . $_REQUEST['special_price'] . "',";
    }
    $query .= " last_date=now() WHERE id=" . $_REQUEST['id'] . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    echo 'Actualizado correctamente.';

  } else if ($operation === 'delete') {
    $query .= "DELETE FROM products WHERE id=" . $_REQUEST['id'] . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    echo 'Eliminado correctamente.';
  }  else if ($operation === 'browserName') {
    $query = "SELECT * FROM products WHERE name LIKE '%" . $_REQUEST['content'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $print = '<table class="table table-striped tablet-tools">
      <thead>
        <tr>
          <th>Código de Barras</th>
          <th>Clave</th>
          <th>Nombre</th>
          <th></th>
        </tr>
      </thead>
      <tbody>';
    while ($row = mysql_fetch_assoc($result)) {
      $print .= '<tr>
            <td>' . $row['barcode'] . '</td>
            <td>' . $row['key_'] . '</td>
            <td>' . $row['name'] . '</td>
            <td><button onClick="onClickSelect(' . $row['id'] . ')" type="button" class="btn btn-primary btn-square">Modificar</button></td>
          </tr>';
    }
    $print .= '</tbody></table>';
    echo $print;
  } else if ($operation === 'browserBarcode') {
    $query = "SELECT * FROM products WHERE barcode LIKE '%" . $_REQUEST['content'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $print = '<table class="table table-striped tablet-tools">
      <thead>
        <tr>
          <th>Código de Barras</th>
          <th>Clave</th>
          <th>Nombre</th>
          <th></th>
        </tr>
      </thead>
      <tbody>';
    while ($row = mysql_fetch_assoc($result)) {
      $print .= '<tr>
            <td>' . $row['barcode'] . '</td>
            <td>' . $row['key_'] . '</td>
            <td>' . $row['name'] . '</td>
            <td><button onClick="onClickSelect(' . $row['id'] . ')" type="button" class="btn btn-primary btn-square">Modificar</button></td>
          </tr>';
    }
    $print .= '</tbody></table>';
    echo $print;
  } else if ($operation === 'selectProduct') {
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM products where id=" . $id . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $row = mysql_fetch_assoc($result);
    echo $row['barcode'] . ',' . $row['name'] . ',' . $row['description'] . ',' . $row['key_'] . ',' . $row['brand'] . ',' . $row['model'] . ',' . $row['measure'] . ',' . $row['treadware'] . ',' . $row['load_index'] . ',' . $row['load_speed'] . ',' . $row['retail_price'] . ',' . $row['wholesale_price'] . ',' . $row['special_price'];
  }
  mysql_close($link);
 ?>
