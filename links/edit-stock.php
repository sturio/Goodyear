<?php
  require '../connection/index.php';

  $operation = $_REQUEST['operation'];
  if ($operation === 'browser') {
    $name = $_REQUEST['name'];
    $key = $_REQUEST['key'];
    $barcode = $_REQUEST['barcode'];
    $ident = 0;

    $query = "SELECT P.id, P.barcode, P.name, P.key_, P.brand, P.model, S.amount FROM products AS P INNER JOIN stocks AS S ON P.id = S.id_product where";
    if ($name) {
      $query .= " P.name LIKE '%" . $name . "%'";
      $ident = 1;
    }
    if ($key) {
      if ($ident === 0) {
        $query .= " P.key_ LIKE '%" . $key . "%'";
        $ident = 1;
      } else {
        $query .= " AND P.key_ LIKE '%" . $key . "%'";
      }
    }
    if ($barcode) {
      if ($ident === 0) {
        $query .= " P.barcode LIKE '%" . $barcode . "%'";
      } else {
        $query .= " AND P.barcode LIKE '%" . $barcode . "%'";
      }
    }
    $query .= ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    while ($row = mysql_fetch_assoc($result)) {
      $namePrint = "'" . $row['name'] . "'";
      echo '<tr>
              <td>' . $row['amount'] . '</td>
              <td>' . $row['barcode'] . '</td>
              <td>' . $row['key_'] . '</td>
              <td>' . $row['name'] . '</td>
              <td>' . $row['brand'] . '</td>
              <td>' . $row['model'] . '</td>
              <td><button onClick="onClickSelect(' . $row['id'] . ',' . $namePrint . ',' . $row['amount'] . ')" type="button" class="btn btn-primary btn-square">Seleccionar</button></td>
            </tr>';
    }
  } else if ($operation === 'modify') {
    $id_product = $_REQUEST['id'];
    $alter_stock = $_REQUEST['alterStock'];

    $queryTemp = "UPDATE stocks SET amount=" . $alter_stock . " WHERE id_product=" . $id_product;
    $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
    echo 'Cantidad cambiada.';
  } else if ($operation === 'in') {
    $id_product = $_REQUEST['id'];
    $alter_stock = $_REQUEST['alterStock'];

    $queryTemp = "SELECT amount FROM stocks WHERE id_product=" . $id_product;
    $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());

    $row = mysql_fetch_assoc($result);
    $total = $alter_stock + $row['amount'];

    $queryTemp = "UPDATE stocks SET amount=" . $total . " WHERE id_product=" . $id_product;
    $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
    echo 'Cantidad cambiada.';
  } else if ($operation === 'out') {
    $id_product = $_REQUEST['id'];
    $alter_stock = $_REQUEST['alterStock'];

    $queryTemp = "SELECT amount FROM stocks WHERE id_product=" . $id_product;
    $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());

    $row = mysql_fetch_assoc($result);
    $total = $row['amount'] - $alter_stock;

    $queryTemp = "UPDATE stocks SET amount=" . $total . " WHERE id_product=" . $id_product;
    $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
    echo 'Cantidad cambiada.';
  }
  mysql_close($link);
 ?>
