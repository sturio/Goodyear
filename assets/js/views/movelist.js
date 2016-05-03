setTimeout('loadInfo()', 250);

function loadInfo() {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState === 1) {
      document.getElementById('response').innerHTML = 'Procesando...';
    } else if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
      document.getElementById('response').innerHTML = '';
      document.getElementById('table').innerHTML = xmlhttp.responseText;
    }
  };

  xmlhttp.open("GET", "links/movelist.php?operation=loadInfo");
  xmlhttp.send();
}

function onClickXML(id, op) {
  if (op === 0) {
    if (confirm("¿Desea timbrar el Documento?") === true) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 1) {
          document.getElementById('response').innerHTML = 'Procesando...';
        } else if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
          window.location.href ="links/movelist.php?operation=xml&id=" + id;
          alert('Proceso realizado. Se le redireccionara.');
          document.location.reload();
        }
      }
      xmlhttp.open("GET", "links/create/xml.php?id=" + id);
      xmlhttp.send();
      }
  } else if (op === 1) {
    window.location.href ="links/movelist.php?operation=xml&id=" + id;
  }
}

function onClickXMLCredit(id, op) {
  if (op === 0) {
    if (confirm("¿Desea timbrar el Documento?") === true) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 1) {
          document.getElementById('response').innerHTML = 'Procesando...';
        } else if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
          window.location.href ="links/movelist.php?operation=xml&id=" + id;
          alert('Proceso realizado. Se le redireccionara.');
          document.location.reload();
        }
      }
      xmlhttp.open("GET", "links/create/xml_credit.php?id=" + id);
      xmlhttp.send();
      }
  } else if (op === 1) {
    window.location.href ="links/movelist.php?operation=xml&id=" + id;
  }
}

function onClickPDF(id, op) {
  window.open('invoice/index.php?id=' + id + '&op=' + op, "Imprecion Doc", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
}

function onClickCancel(id) {
  if (confirm("¿Desea Cancelar el Documento?") === true) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState === 1) {
        document.getElementById('response').innerHTML = 'Procesando...';
      } else if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
        alert(xmlhttp.response + ' sera redireccionado.');
        document.location.reload();
      }
    }
    xmlhttp.open("GET", "links/create/cancel_xml.php?id=" + id);
    xmlhttp.send();
    }

}
