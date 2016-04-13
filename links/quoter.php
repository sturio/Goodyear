<?php
  require '../connection/index.php';

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
  } else if ($operation === 'browserClient') {
    $query = "SELECT * FROM clients WHERE name LIKE '%" . $_REQUEST['name'] . "%';";
    $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

    while ($row = mysql_fetch_assoc($result)) {
      echo '
          <tr>
            <td>Llanta</td>
            <td>19983127322</td>
            <td>175-70-12-goodyear-CouldYear</td>
            <td>Goodyear</td>
            <td>Coulyear 123</td>
            <td>Goodyear coulyear 123 175 70 12</td>
            <td><button type="button" class="btn btn-primary btn-square">$175</button></td>
            <td><button type="button" class="btn btn-primary btn-square">$165</button></td>
            <td><button type="button" class="btn btn-primary btn-square">$145</button></td>
          </tr>';
    }
  }
  mysql_close($link);
 ?>
