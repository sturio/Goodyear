<?php
  session_start();
  require '../connection/index.php';
  $totalAll;
  $operation = $_REQUEST['operation'];
  if ($operation === 'add') {
    $provider = $_REQUEST['provider'];
    $amount = $_REQUEST['amount'];
    $unit_cost = $_REQUEST['unit_cost'];
    $id = $_REQUEST['id'];

    $query = "INSERT INTO merchandise_entry (id_product, provider, amount, unit_cost, last_date) VALUES ('" . $id . "','" . $provider . "','" . $amount . "','" . $unit_cost . "',now());";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

    $query = "SELECT * FROM stocks where id_product ='" . $id ."';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

    $total = $amount;
    while($row = mysql_fetch_assoc($result)){
      $total += $row['amount'];
    }

    $query = "UPDATE stocks SET amount=" . $total . " WHERE id_product=" . $id;
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());


    echo 'Agregados Satisfactoriamente.';
  } else if ($operation === 'browserClient') {
    $name = $_REQUEST['name'];

    $query = "SELECT * FROM clients WHERE name LIKE '%" . $_REQUEST['name'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

    $print = '<table class="table table-striped tablet-tools">
      <thead>
        <tr>
          <th>Nombre Comercial / Razon Social</th>
          <th>Nombre de Contacto</th>
          <th>Telefono</th>
          <th></th>
        </tr>
      </thead>
      <tbody>';
    while ($row = mysql_fetch_assoc($result)) {
      $name = "'" . $row['name'] . "'";
      $type_cost = "'" . $row['type_cost'] . "'";
      $print .= '<tr>
            <td>' . $row['name'] . '</td>
            <td>' . $row['contact_name'] . '</td>
            <td>' . $row['phone'] . '</td>
            <td><button onClick="onClickSelectName(' . $row['id'] . ',' . $name . ',' . $row['credit'] . ',' . $row['limit_credit'] . ',' . $type_cost . ')" type="button" class="btn btn-primary btn-square">Seleccionar</button></td>
          </tr>';
    }
    $print .= '</tbody></table>';
    echo $print;
  } else if ($operation === 'browserProduct') {
    $exist = 0;
    $query = "SELECT * FROM products AS P INNER JOIN stocks AS s ON p.id = s.id_product WHERE ";
    if ($_REQUEST['product_name'] !== "") {
      $query .= "p.name LIKE '%" . $_REQUEST['product_name'] . "%'";
      $exist = 1;
    }

    if ($_REQUEST['barcode'] !== "") {
      if ($exist === 1) {
        $query .= " AND ";
      }
      $query .= "p.barcode LIKE '%" . $_REQUEST['barcode'] . "%'";
      $exist = 1;
    }

    if ($_REQUEST['key'] !== "") {
      if ($exist === 1) {
        $query .= " AND ";
      }
      $query .= "p.key_ LIKE '%" . $_REQUEST['key'] . "%'";
    }
    $query .= " AND s.amount > 1;";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

    while ($row = mysql_fetch_assoc($result)) {
      echo '
          <tr>
            <td>' . $row['amount'] . '</td>
            <td><input id="a' . $row['id_product'] . '" type="number" value="1" size="1" /></td>
            <td>' . $row['type_product'] . '</td>
            <td>' . $row['barcode'] . '</td>
            <td>' . $row['key_'] . '</td>
            <td>' . $row['brand'] . '</td>
            <td>' . $row['model'] . '</td>
            <td>' . $row['name'] . '</td>';
            if ($_REQUEST['type_cost'] === 'public') {
                echo '<td><button onClick="onClickAdd(' . $row['id_product'] . ',docuemnt.getElementById("a' . $row['id_product'] . ',' . $row['retail_price'] . '"))" type="button" class="btn btn-primary btn-square">$' . $row['retail_price'] . '</button></td>
                <td><button type="button" class="btn btn-primary btn-square"></button></td>
                <td><button type="button" class="btn btn-primary btn-square"></button></td>
              </tr>';
            }

            if ($_REQUEST['type_cost'] === 'wholesale') {
                echo '<td><button onClick="onClickAdd(' . $row['id_product'] . ',docuemnt.getElementById("a' . $row['id_product'] . ',' . $row['retail_price'] . '"))" type="button" class="btn btn-primary btn-square">$' . $row['retail_price'] . '</button></td>
                <td><button onClick="onClickAdd(' . $row['id_product'] . ',docuemnt.getElementById("a' . $row['id_product'] . ',' . $row['wholesale_price'] . '"))" type="button" class="btn btn-primary btn-square">$' . $row['wholesale_price'] . '</button></td>
                <td><button type="button" class="btn btn-primary btn-square"></button></td>
              </tr>';
            }
            $id_complement = "'a" . $row['id_product'] . "'";
            if ($_REQUEST['type_cost'] === "special") {
                echo '<td><button onClick="onClickAdd(' . $row['id_product'] . ',' . $id_complement . ',' . $row['retail_price'] . ');" type="button" class="btn btn-primary btn-square">$' . $row['retail_price'] . '</button></td>
                <td><button onClick="onClickAdd(' . $row['id_product'] . ',' . $id_complement . ',' . $row['wholesale_price'] . ');" type="button" class="btn btn-primary btn-square">$' . $row['wholesale_price'] . '</button></td>
                <td><button onClick="onClickAdd(' . $row['id_product'] . ',' . $id_complement . ',' . $row['special_price'] . ');" type="button" class="btn btn-primary btn-square">$' . $row['special_price'] . '</button></td>
              </tr>';
            }


    }
  } else if ($operation === 'addProduct') {
    $query = "SELECT * FROM temp_quoter where id_product LIKE '%" . $_REQUEST['id'] ."%' AND id_client LIKE '%" . $_REQUEST['idClient'] . "%' AND id_user LIKE '%" . $_SESSION['id'] . "%' AND unit_cost LIKE '%" . $_REQUEST['price'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $exist = false;
    $amount = $_REQUEST['amount'];
    $id = null;
    while ($row = mysql_fetch_assoc($result)) {
      $id = $row['id'];
      $exist = true;
      $amount += $row['amount'];
    }

    if ($exist && $id) {
      $query = "UPDATE temp_quoter SET amount=" . $amount . " WHERE id=" . $id;
      $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    } else {
      $query = "INSERT INTO temp_quoter (id_product, id_client, id_user, amount, unit_cost, last_date) VALUES ('" . $_REQUEST['id'] . "','" . $_REQUEST['idClient'] . "','" . $_SESSION['id'] . "','" . $_REQUEST['amount'] . "','" . $_REQUEST['price'] . "',now());";
      $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    }

    $query = "SELECT T.id, T.amount, T.unit_cost, P.type_product, P.brand, P.model, P.name FROM temp_quoter as T INNER JOIN products AS P ON T.id_product = P.id where T.id_client =" . $_REQUEST['idClient'] . " AND T.id_user =" . $_SESSION['id'] . ";";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $totalAll = 0;
    while ($row = mysql_fetch_assoc($result)) {
      $total = $row['unit_cost'] * $row['amount'];
      $totalAll += $total;
      echo '<tr id="' . $row['id'] . '">
        <td><button onClick="onClickCancel(' . $row['id'] . ',' . $_REQUEST['id'] .','. $_REQUEST['idClient'] .')" type="button" class="btn btn-danger btn-square">X</button></td>
        <td>' . $row['type_product'] . '</td>
        <td>' . $row['brand'] . '</td>
        <td>' . $row['model'] . '</td>
        <td>' . $row['name'] . '</td>
        <td>' . $row['amount'] . '</td>
        <td>' . $row['unit_cost'] . '</td>
        <td>' . $total . '</td>
      </tr>';
    }
    echo '<div id="totalQuoter"><h3>Total:</h3><h2>$' . $totalAll . '</h2></div>';
  } else if ($operation === 'cancelProduct') {
    $query = "DELETE FROM temp_quoter WHERE id=" . $_REQUEST['id'];
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

    $query = "SELECT T.id, T.amount, T.unit_cost, P.type_product, P.brand, P.model, P.name FROM temp_quoter as T INNER JOIN products AS P ON T.id_product = P.id where T.id_client LIKE '%" . $_REQUEST['idClient'] . "%' AND T.id_user LIKE '%" . $_SESSION['id'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

    $totalAll = 0;
    while ($row = mysql_fetch_assoc($result)) {
      $total = $row['unit_cost'] * $row['amount'];
      $totalAll += $total;
    }

    echo '<h3>Total:</h3><h2>$' . $totalAll . '</h2>';

  } else if ($operation === 'cancelAll') {
    $query = "DELETE FROM temp_quoter WHERE id_client = " . $_REQUEST['id_client'];
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    echo 'Eliminado Correcatmente';
  } else if ($operation === 'remission') {
    $query = "SELECT T.unit_cost, T.id_product AS product, T.amount AS temp_amount, S.amount AS exist_amount FROM temp_quoter as T INNER JOIN stocks AS S ON T.id_product = S.id where T.id_client LIKE '%" . $_REQUEST['id_client'] . "%' AND T.id_user LIKE '%" . $_SESSION['id'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $pass = true;
    while ($row = mysql_fetch_assoc($result)) {
      if ($row['temp_amount'] > $row['exist_amount']) {
        $pass = false;
      }
      array_push($products, $row['product']);
    }

    if ($pass) {
      $queryInvoice = "select * from documents where type = 'remission' order by id_invoice desc limit 1";
      $resultInvoice = mysql_query($queryInvoice) or die ('Consulta fallida: ' . mysql_error());
      $rowInvoice = mysql_fetch_assoc($resultInvoice);

      if ($rowInvoice['id_invoice']) {
        $numInvoice = $rowInvoice['id_invoice'] + 1;
        $count = strlen($numInvoice);
        switch ($count) {
          case 1:
            $invoice = 'R0000' . $numInvoice . 'E';
            break;
          case 2:
          $invoice = 'R000' . $numInvoice . 'E';
            break;
          case 3:
          $invoice = 'R00' . $numInvoice . 'E';
            break;
          case 4:
          $invoice = 'R0' . $numInvoice . 'E';
            break;
          case 5:
          $invoice = 'R' . $numInvoice . 'E';
            break;
        }
      } else {
        $numInvoice = 1;
        $invoice = 'R00001E';
      }

      $queryInsert = "INSERT INTO documents (id_user, id_client, id_invoice, invoice, guide_number, payment_method, last_digits, comments, type, status, last_date, total) VALUES ('" . $_SESSION['id'] . "','" . $_REQUEST['id_client'] . "','" . $numInvoice . "','" . $invoice . "','" . $_REQUEST['guide_number'] . "','" . $_REQUEST['payment_method'] . "','" . $_REQUEST['last_date'] . "','" . $_REQUEST['comments'] . "','remission','activo',now(),0);";
      $resultInsert = mysql_query($queryInsert) or die ('Consulta fallida: ' . mysql_error());
      $id_document = mysql_insert_id();
      $total_credit = 0;
      $query2 = "SELECT * FROM temp_quoter where id_client =" . $_REQUEST['id_client'] . " AND id_user=" . $_SESSION['id'] . ";";
      $result2 = mysql_query($query2) or die ('Consulta fallida: ' . mysql_error());

      while ($row2 = mysql_fetch_assoc($result2)) {
        $total_invoice += ($row2['amount'] * $row2['unit_cost']);
        $queryStock = "SELECT * FROM stocks where id_product=" . $row2['id_product'] . " limit 1;";
        $resultStock = mysql_query($queryStock) or die ('Consulta fallida: ' . mysql_error());

        $AllStock = mysql_fetch_assoc($resultStock);

        $amount = $AllStock['amount'] - $row2['amount'];
        $queryTemp = "UPDATE stocks SET amount=" . $amount . " WHERE id_product=" . $row2['id_product'];
        $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());

        $queryInsertQuoters = "INSERT INTO quoter (id_product, amount, unit_cost, invoice, last_date) VALUES ('" . $row2['id_product'] . "','" . $row2['amount'] . "','" . $row2['unit_cost'] . "','" . $invoice . "',now());";
        $result = mysql_query($queryInsertQuoters) or die ('Consulta fallida: ' . mysql_error());

        $queryTemp = "DELETE FROM temp_quoter WHERE id =" . $row2['id'];
        $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
      }
      $queryTemp = "UPDATE documents SET total=" . $total_invoice . " WHERE id=" . $id_document;
      $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
      echo $id_document;
    } else {
      echo 'Las existencias han cambiado. Favor de verificar los productos.';
    }
  } else if ($operation === 'invoice') {
    $query = "SELECT T.unit_cost, T.id_product AS product, T.amount AS temp_amount, S.amount AS exist_amount FROM temp_quoter as T INNER JOIN stocks AS S ON T.id_product = S.id where T.id_client LIKE '%" . $_REQUEST['id_client'] . "%' AND T.id_user LIKE '%" . $_SESSION['id'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $pass = true;
    while ($row = mysql_fetch_assoc($result)) {
      if ($row['temp_amount'] > $row['exist_amount']) {
        $pass = false;
      }
      array_push($products, $row['product']);
    }

    if ($pass) {
      $queryInvoice = "select * from documents where type = 'invoice' order by id_invoice desc limit 1";
      $resultInvoice = mysql_query($queryInvoice) or die ('Consulta fallida: ' . mysql_error());
      $rowInvoice = mysql_fetch_assoc($resultInvoice);

      if ($rowInvoice['id_invoice']) {
        $numInvoice = $rowInvoice['id_invoice'] + 1;
        $count = strlen($numInvoice);
        switch ($count) {
          case 1:
            $invoice = 'FA0000' . $numInvoice;
            break;
          case 2:
          $invoice = 'FA000' . $numInvoice;
            break;
          case 3:
          $invoice = 'FA00' . $numInvoice;
            break;
          case 4:
          $invoice = 'FA0' . $numInvoice;
            break;
          case 5:
          $invoice = 'FA' . $numInvoice;
            break;
        }
      } else {
        $numInvoice = 1;
        $invoice = 'FA00001';
      }

      $queryInsert = "INSERT INTO documents (id_user, id_client, id_invoice, invoice, guide_number, payment_method, last_digits, comments, type, status, last_date, total) VALUES ('" . $_SESSION['id'] . "','" . $_REQUEST['id_client'] . "','" . $numInvoice . "','" . $invoice . "','" . $_REQUEST['guide_number'] . "','" . $_REQUEST['payment_method'] . "','" . $_REQUEST['last_date'] . "','" . $_REQUEST['comments'] . "','invoice','activo',now(),0);";
      $resultInsert = mysql_query($queryInsert) or die ('Consulta fallida: ' . mysql_error());
      $id_document = mysql_insert_id();
      $total_invoice = 0;

      $query2 = "SELECT * FROM temp_quoter where id_client =" . $_REQUEST['id_client'] . " AND id_user=" . $_SESSION['id'] . ";";
      $result2 = mysql_query($query2) or die ('Consulta fallida: ' . mysql_error());

      while ($row2 = mysql_fetch_assoc($result2)) {
        $total_invoice += ($row2['amount'] * $row2['unit_cost']);
        $queryStock = "SELECT * FROM stocks where id_product=" . $row2['id_product'] . " limit 1;";
        $resultStock = mysql_query($queryStock) or die ('Consulta fallida: ' . mysql_error());

        $AllStock = mysql_fetch_assoc($resultStock);

        $amount = $AllStock['amount'] - $row2['amount'];
        $queryTemp = "UPDATE stocks SET amount=" . $amount . " WHERE id_product=" . $row2['id_product'];
        $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());

        $queryInsertQuoters = "INSERT INTO quoter (id_product, amount, unit_cost, invoice, last_date) VALUES ('" . $row2['id_product'] . "','" . $row2['amount'] . "','" . $row2['unit_cost'] . "','" . $invoice . "',now());";
        $result = mysql_query($queryInsertQuoters) or die ('Consulta fallida: ' . mysql_error());

        $queryTemp = "DELETE FROM temp_quoter WHERE id =" . $row2['id'];
        $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
      }
      $queryTemp = "UPDATE documents SET total=" . $total_invoice . " WHERE id=" . $id_document;
      $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
      echo $id_document;
    } else {
      echo 'Las existencias han cambiado. Favor de verificar los productos.';
    }
  } else if ($operation === 'credit') {
    $query = "SELECT T.unit_cost, T.id_product AS product, T.amount AS temp_amount, S.amount AS exist_amount FROM temp_quoter as T INNER JOIN stocks AS S ON T.id_product = S.id where T.id_client LIKE '%" . $_REQUEST['id_client'] . "%' AND T.id_user LIKE '%" . $_SESSION['id'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
    $pass = true;
    while ($row = mysql_fetch_assoc($result)) {
      if ($row['temp_amount'] > $row['exist_amount']) {
        $pass = false;
      }
      array_push($products, $row['product']);
    }

    if ($pass) {
      $queryInvoice = "select * from documents where type = 'credit' order by id_invoice desc limit 1";
      $resultInvoice = mysql_query($queryInvoice) or die ('Consulta fallida: ' . mysql_error());
      $rowInvoice = mysql_fetch_assoc($resultInvoice);

      if ($rowInvoice['id_invoice']) {
        $numInvoice = $rowInvoice['id_invoice'] + 1;
        $count = strlen($numInvoice);
        switch ($count) {
          case 1:
            $invoice = 'CR0000' . $numInvoice;
            break;
          case 2:
          $invoice = 'CR000' . $numInvoice;
            break;
          case 3:
          $invoice = 'CR00' . $numInvoice;
            break;
          case 4:
          $invoice = 'CR0' . $numInvoice;
            break;
          case 5:
          $invoice = 'CR' . $numInvoice;
            break;
        }
      } else {
        $numInvoice = 1;
        $invoice = 'CR00001';
      }
      $queryInsert = "INSERT INTO documents (id_user, id_client, id_invoice, invoice, guide_number, payment_method, last_digits, comments, type, status, last_date, total) VALUES ('" . $_SESSION['id'] . "','" . $_REQUEST['id_client'] . "','" . $numInvoice . "','" . $invoice . "','" . $_REQUEST['guide_number'] . "','" . $_REQUEST['payment_method'] . "','" . $_REQUEST['last_date'] . "','" . $_REQUEST['comments'] . "','credit','activo',now(),0);";
      $resultInsert = mysql_query($queryInsert) or die ('Consulta fallida: ' . mysql_error());

      $id_document = mysql_insert_id();
      $total_credit = 0;
      $query2 = "SELECT * FROM temp_quoter where id_client =" . $_REQUEST['id_client'] . " AND id_user=" . $_SESSION['id'] . ";";
      $result2 = mysql_query($query2) or die ('Consulta fallida: ' . mysql_error());

      while ($row2 = mysql_fetch_assoc($result2)) {
        $total_credit += ($row2['amount'] * $row2['unit_cost']);
        $queryStock = "SELECT * FROM stocks where id_product=" . $row2['id_product'] . " limit 1;";
        $resultStock = mysql_query($queryStock) or die ('Consulta fallida: ' . mysql_error());

        $AllStock = mysql_fetch_assoc($resultStock);

        $amount = $AllStock['amount'] - $row2['amount'];
        $queryTemp = "UPDATE stocks SET amount=" . $amount . " WHERE id_product=" . $row2['id_product'];
        $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());

        $queryInsertQuoters = "INSERT INTO quoter (id_product, amount, unit_cost, invoice, last_date) VALUES ('" . $row2['id_product'] . "','" . $row2['amount'] . "','" . $row2['unit_cost'] . "','" . $invoice . "',now());";
        $result = mysql_query($queryInsertQuoters) or die ('Consulta fallida: ' . mysql_error());

        $queryTemp = "DELETE FROM temp_quoter WHERE id =" . $row2['id'];
        $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());
      }

      $queryCredit = "INSERT INTO credit (id_document, total_credit, total_paid_out, status, last_date) VALUES ('" . $id_document . "','" . $total_credit . "','0','payable',now());";
      $result = mysql_query($queryCredit) or die ('Consulta fallida: ' . mysql_error());

      $queryTemp = "UPDATE documents SET total=" . $total_credit . " WHERE id=" . $id_document;
      $result = mysql_query($queryTemp) or die ('Consulta fallida: ' . mysql_error());

      echo $id_document;

    } else {
      echo 'Las existencias han cambiado. Favor de verificar los productos.';
    }
  }
  mysql_close($link);
 ?>
