<?php
require '../connection/index.php';
require "convert.php";
$id = $_REQUEST['id'];
$op = $_REQUEST['op'];
if ($op === '1') {
  $query = "SELECT * FROM documents AS D INNER JOIN clients AS C ON D.id_client = C.id WHERE D.id =" . $id ." LIMIT 1;";
  $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
  $row = mysql_fetch_assoc($result);

  $html = '<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Factura</title>
      <link rel="stylesheet" href="style.css" media="all" />
      <link href="https://npmcdn.com/basscss@8.0.1/css/basscss.min.css" rel="stylesheet">
    </head>
    <body>
      <header class="clearfix">
        <div id="logo">
          <img src="logo.png">
        </div>
        <h1>Factura ' . $row['invoice'] . '</h1>
        <div class="clearfix">
          <div  class="col-4 left">
            <div><b>Emisor</b></div>
            <div>Amanda Valenciano Avila</div>
            <div>Medina Ascencio 649<br /> 47180</div>
            <div>VAAA671004LY0</div>
            <div>01 34 8784 7733</div>
            <div>sotogoodyear@hotmail.com</div>
          </div>
          <div class="col-4 left">
            <div><b>Receptor</b></div>
            <div>' . $row['name'] . '</div>
            <div>' . $row['address'] . " " . $row['noExt'] . " " . $row['noInt'] . '<br /> ' . $row['pc'] . '</div>
            <div>' . $row['rfc'] . '</div>
            <div>' . $row['phone'] . '</div>
            <div>' . $row['email'] . '</div>
          </div>
          <div  class="col-4 right">
            <div><b>Fiscales</b></div>
            <div><b>Fecha: </b>' . $row['last_date'] . '</div>
            <div><b>Factura: </b>' . $row['invoice'] . '</div>
            <div><b>Tipo Comprobante: </b>Factura Electrónica</div>
            <div><b>Método de Pago: </b>' . $row['payment_method'] . '</div>
            <div><b>Expedido en: </b>Arandas, Jal.</div>
            <div><b>Cuenta Pago: </b>' . $row['last_digits'] . '</div>
          </div>
        </div>
      </header>
      <main>
        <table>
          <thead>
            <tr>
              <th class="service">Código</th>
              <th class="desc">Descripción</th>
              <th>Unidad</th>
              <th>Precio Unidad</th>
              <th>Cantidad</th>
              <th>TOTAL</th>
            </tr>
          </thead>
          <tbody>';
            $queryPro = "SELECT * FROM quoter AS Q INNER JOIN products AS P ON Q.id_product = P.id WHERE Q.invoice ='" . $row['invoice'] . "'";
            $resultPro = mysql_query($queryPro) or die ('Consulta fallida: ' . mysql_error());
            $totalGral = 0;
            while ($rowPro = mysql_fetch_assoc($resultPro)) {
              $unitCost = ($rowPro['unit_cost']/116) * 100;
              $totalUnitCost = $rowPro['amount'] * $unitCost;
              $unitCost = round($unitCost, 2);
              $totalUnitCost = round($totalUnitCost, 2);

              $totalGral += $totalUnitCost;
              $html .= '<tr>
                      <td class="service">' . $rowPro['key_'] . '</td>
                      <td class="service">' . $rowPro['name'] . '</td>
                      <td class="desc">Pieza</td>
                      <td class="unit">$' . $unitCost . '</td>
                      <td class="qty">' . $rowPro['amount'] . '</td>
                      <td class="total">$' . $totalUnitCost . '</td>
                    </tr>';
            }
            $totalGral = round($totalGral, 2);

            $totalF = $totalGral * 1.16;
            $totalF = round($totalF, 2);
            $ivaTotalF = $totalGral * .16;
            $ivaTotalF = round($ivaTotalF, 2);

            $totalLetra = num2letras($totalF);

            $html .= '<tr>
              <td colspan="5">SUBTOTAL</td>
              <td class="total">$' . $totalGral . '</td>
            </tr>
            <tr>
              <td colspan="5">IVA 16%</td>
              <td class="total">$' . $ivaTotalF . '</td>
            </tr>
            <tr>
              <td colspan="4">' . $totalLetra . '</td>
              <td class="grand total">TOTAL</td>
              <td class="grand total">$' . $totalF . '</td>
            </tr>
          </tbody>
        </table>
        <div class="clearfix">
          <div  class="col-3 left">
            <img src="../links/create/cbb/' . $row['uuid'] . '.png">
          </div>
          <div  class="col-9 left" style="word-wrap: break-word;">
            * Pago en una sola exhibición * Esta es una representación impresa de un CFDI.
            <p>
              <b>Cadena Original del Timbre</b>

              ||1.0|' . $row['uuid'] . '|' . $row['fechaTimbrado'] . '|' . $row['sello'] . '|' . $row['noCertificadoSat'] . '||
            </p>
            <p>
              <b>Sello Digital del Emisor</b>
              ' . $row['sello'] . '
            </p>
            <p>
              <b>Sello Digital del SAT</b>
              ' . $row['selloSat'] . '
            </p>
          </div>
          <div class="col-12 left">
            <div class="col-3 left">
              <b>UUID</b><br />
              ' . $row['uuid'] . '
            </div>
            <div class="col-3 left">
              <b>Certificado SAT</b><br />
              ' . $row['noCertificadoSat'] . '
            </div>
            <div class="col-3 left">
              <b>Fecha y Hora Certificación</b><br />
              ' . $row['fechaTimbrado'] . '
            </div>
            <div class="col-3 left">
              <b>Certificado</b><br />
                ' . $row['noCertificado'] . '
            </div>
          </div>
        </div>
      </main>
    </body>
  </html>';
  echo $html;
} else if ($op === '2') {
  $query = "SELECT * FROM documents AS D INNER JOIN clients AS C ON D.id_client = C.id WHERE D.id =" . $id ." LIMIT 1;";
  $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
  $row = mysql_fetch_assoc($result);

  $html = '<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Remision</title>
      <link rel="stylesheet" href="style.css" media="all" />
      <link href="https://npmcdn.com/basscss@8.0.1/css/basscss.min.css" rel="stylesheet">
    </head>
    <body>
      <header class="clearfix">
        <div id="logo">
          <img src="logo.png">
        </div>
        <h1>Remision ' . $row['invoice'] . '</h1>
        <div class="clearfix">
          <div  class="col-4 left">
            <div><b>Emisor</b></div>
            <div>Amanda Valenciano Avila</div>
            <div>Medina Ascencio 649<br /> 47180</div>
            <div>VAAA671004LY0</div>
            <div>01 34 8784 7733</div>
            <div>sotogoodyear@hotmail.com</div>
          </div>
          <div class="col-4 left">
            <div><b>Receptor</b></div>
            <div>' . $row['name'] . '</div>
            <div>' . $row['address'] . " " . $row['noExt'] . " " . $row['noInt'] . '<br /> ' . $row['pc'] . '</div>
            <div>' . $row['rfc'] . '</div>
            <div>' . $row['phone'] . '</div>
            <div>' . $row['email'] . '</div>
          </div>
          <div  class="col-4 right">
            <div><b>Fecha: </b>' . $row['last_date'] . '</div>
            <div><b>Remision: </b>' . $row['invoice'] . '</div>
            <div><b>Tipo: </b>Remision</div>
            <div><b>Método de Pago: </b>' . $row['payment_method'] . '</div>
            <div><b>Expedido en: </b>Arandas, Jal.</div>
            <div><b>Cuenta Pago: </b>' . $row['last_digits'] . '</div>
          </div>
        </div>
      </header>
      <main>
        <table>
          <thead>
            <tr>
              <th class="service">Código</th>
              <th class="desc">Descripción</th>
              <th>Unidad</th>
              <th>Precio Unidad</th>
              <th>Cantidad</th>
              <th>TOTAL</th>
            </tr>
          </thead>
          <tbody>';
            $queryPro = "SELECT * FROM quoter AS Q INNER JOIN products AS P ON Q.id_product = P.id WHERE Q.invoice ='" . $row['invoice'] . "'";
            $resultPro = mysql_query($queryPro) or die ('Consulta fallida: ' . mysql_error());
            $totalGral = 0;
            while ($rowPro = mysql_fetch_assoc($resultPro)) {
              $unitCost = ($rowPro['unit_cost']/116) * 100;
              $totalUnitCost = $rowPro['amount'] * $unitCost;
              $unitCost = round($unitCost, 2);
              $totalUnitCost = round($totalUnitCost, 2);

              $totalGral += $totalUnitCost;
              $html .= '<tr>
                      <td class="service">' . $rowPro['key_'] . '</td>
                      <td class="service">' . $rowPro['name'] . '</td>
                      <td class="desc">Pieza</td>
                      <td class="unit">$' . $unitCost . '</td>
                      <td class="qty">' . $rowPro['amount'] . '</td>
                      <td class="total">$' . $totalUnitCost . '</td>
                    </tr>';
            }
            $totalGral = round($totalGral, 2);

            $totalF = $totalGral * 1.16;
            $totalF = round($totalF, 2);
            $ivaTotalF = $totalGral * .16;
            $ivaTotalF = round($ivaTotalF, 2);

            $totalLetra = num2letras($totalF);

            $html .= '<tr>
              <td colspan="5">SUBTOTAL</td>
              <td class="total">$' . $totalGral . '</td>
            </tr>
            <tr>
              <td colspan="5">IVA 16%</td>
              <td class="total">$' . $ivaTotalF . '</td>
            </tr>
            <tr>
              <td colspan="4">' . $totalLetra . '</td>
              <td class="grand total">TOTAL</td>
              <td class="grand total">$' . $totalF . '</td>
            </tr>
          </tbody>
        </table>

      </main>
    </body>
  </html>';
  echo $html;
} else if ($op === '3') {
  $query = "SELECT * FROM documents AS D INNER JOIN clients AS C ON D.id_client = C.id WHERE D.id =" . $id ." LIMIT 1;";
  $result = mysql_query($query) or die ('Consulta fallida: ' . mysql_error());
  $row = mysql_fetch_assoc($result);

  $html = '<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Credito</title>
      <link rel="stylesheet" href="style.css" media="all" />
      <link href="https://npmcdn.com/basscss@8.0.1/css/basscss.min.css" rel="stylesheet">
    </head>
    <body>
      <header class="clearfix">
        <div id="logo">
          <img src="logo.png">
        </div>
        <h1>Credito ' . $row['invoice'] . '</h1>
        <div class="clearfix">
          <div  class="col-4 left">
            <div><b>Emisor</b></div>
            <div>Amanda Valenciano Avila</div>
            <div>Medina Ascencio 649<br /> 47180</div>
            <div>VAAA671004LY0</div>
            <div>01 34 8784 7733</div>
            <div>sotogoodyear@hotmail.com</div>
          </div>
          <div class="col-4 left">
            <div><b>Receptor</b></div>
            <div>' . $row['name'] . '</div>
            <div>' . $row['address'] . " " . $row['noExt'] . " " . $row['noInt'] . '<br /> ' . $row['pc'] . '</div>
            <div>' . $row['rfc'] . '</div>
            <div>' . $row['phone'] . '</div>
            <div>' . $row['email'] . '</div>
          </div>
          <div  class="col-4 right">
            <div><b>Fecha: </b>' . $row['last_date'] . '</div>
            <div><b>Remision: </b>' . $row['invoice'] . '</div>
            <div><b>Tipo: </b>Credito</div>
            <div><b>Método de Pago: </b>' . $row['payment_method'] . '</div>
            <div><b>Expedido en: </b>Arandas, Jal.</div>
            <div><b>Cuenta Pago: </b>' . $row['last_digits'] . '</div>
          </div>
        </div>
      </header>
      <main>
        <table>
          <thead>
            <tr>
              <th class="service">Código</th>
              <th class="desc">Descripción</th>
              <th>Unidad</th>
              <th>Precio Unidad</th>
              <th>Cantidad</th>
              <th>TOTAL</th>
            </tr>
          </thead>
          <tbody>';
            $queryPro = "SELECT * FROM quoter AS Q INNER JOIN products AS P ON Q.id_product = P.id WHERE Q.invoice ='" . $row['invoice'] . "'";
            $resultPro = mysql_query($queryPro) or die ('Consulta fallida: ' . mysql_error());
            $totalGral = 0;
            while ($rowPro = mysql_fetch_assoc($resultPro)) {
              $unitCost = ($rowPro['unit_cost']/116) * 100;
              $totalUnitCost = $rowPro['amount'] * $unitCost;
              $unitCost = round($unitCost, 2);
              $totalUnitCost = round($totalUnitCost, 2);

              $totalGral += $totalUnitCost;
              $html .= '<tr>
                      <td class="service">' . $rowPro['key_'] . '</td>
                      <td class="service">' . $rowPro['name'] . '</td>
                      <td class="desc">Pieza</td>
                      <td class="unit">$' . $unitCost . '</td>
                      <td class="qty">' . $rowPro['amount'] . '</td>
                      <td class="total">$' . $totalUnitCost . '</td>
                    </tr>';
            }
            $totalGral = round($totalGral, 2);

            $totalF = $totalGral * 1.16;
            $totalF = round($totalF, 2);
            $ivaTotalF = $totalGral * .16;
            $ivaTotalF = round($ivaTotalF, 2);

            $totalLetra = num2letras($totalF);

            $html .= '<tr>
              <td colspan="5">SUBTOTAL</td>
              <td class="total">$' . $totalGral . '</td>
            </tr>
            <tr>
              <td colspan="5">IVA 16%</td>
              <td class="total">$' . $ivaTotalF . '</td>
            </tr>
            <tr>
              <td colspan="4">' . $totalLetra . '</td>
              <td class="grand total">TOTAL</td>
              <td class="grand total">$' . $totalF . '</td>
            </tr>
          </tbody>
        </table>

      </main>
    </body>
  </html>';
  echo $html;
}


// $routePDF = '../links/create/pdf/' . $row['uuid'] . '.pdf';
// require_once 'dompdf/autoload.inc.php';
// use Dompdf\Dompdf;
//
// // instantiate and use the dompdf class
// $dompdf = new Dompdf();
// $dompdf->loadHtml($html);
//
// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('letter', 'landscape');
//
// // Render the HTML as PDF
// $dompdf->render();
//
// // Output the generated PDF to Browser
// $dompdf->stream($routePDF);
?>
