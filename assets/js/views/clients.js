function onClickNew() {
  var name = document.getElementById('name').value;
  var address = document.getElementById('address').value;
  var colony = document.getElementById('colony').value;
  var state = document.getElementById('state').value;
  var phone = document.getElementById('phone').value;
  var contactName = document.getElementById('contactName').value;
  var rfc = document.getElementById('rfc').value;
  var pc = document.getElementById('pc').value;
  var city = document.getElementById('city').value;
  var noExt = document.getElementById('noExt').value;
  var noInt = document.getElementById('noInt').value;
  var email = document.getElementById('email').value;
  var cellPhone = document.getElementById('cellPhone').value;
  var credit = document.getElementById('credit').value;
  var typeCost = document.getElementById('typeCost').value;

  if (!name) {
    alert('Es obligatorio ingresar Nombre Comercial / Razon Social.');
  } else {
    if (phone === '' || contactName === '') {
      alert('Ingrese Nombre de Contacto y Telefono.');
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 1) {
          document.getElementById('response').innerHTML = 'Procesando...';
        } else if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
          document.getElementById('response').innerHTML = xmlhttp.responseText;
        }
      };

      xmlhttp.open("GET", "links/clients.php?operation=new&name=" + name + "&address=" + address + "&colony=" + colony + "&state=" + state + "&phone=" + phone + "&contact_name=" + contactName + "&rfc=" + rfc + "&pc=" + pc + "&pc=" + pc + "&city=" + city + "&cell_phone=" + cellPhone + "&noInt=" + noInt + "&noExt=" + noExt + "&email=" + email + "&credit=" + credit + "&typeCost=" + typeCost);
      xmlhttp.send();

    }
  }
}

function onClickModify() {
  var id = document.getElementById('all_clients').value;
  if (!id || id === 'NA') {
    document.getElementById('response').innerHTML = "No se ha seleccionado ningun usuario";
  } else {
    var name = document.getElementById('name').value;
    var address = document.getElementById('address').value;
    var colony = document.getElementById('colony').value;
    var state = document.getElementById('state').value;
    var phone = document.getElementById('phone').value;
    var contactName = document.getElementById('contactName').value;
    var rfc = document.getElementById('rfc').value;
    var pc = document.getElementById('pc').value;
    var city = document.getElementById('city').value;
    var cellPhone = document.getElementById('cellPhone').value;
    var noExt = document.getElementById('noExt').value;
    var noInt = document.getElementById('noInt').value;
    var email = document.getElementById('email').value;
    var credit = document.getElementById('credit').value;
    var typeCost = document.getElementById('typeCost').value;
    if (phone === '' || contactName === '' || !name) {
      alert('Ingresa datos obligatorios.');
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 1) {
          document.getElementById('response').innerHTML = 'Procesando...';
        } else if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
          document.getElementById('response').innerHTML = xmlhttp.responseText;
        }
      };

      xmlhttp.open("GET", "links/clients.php?operation=modify&name=" + name + "&address=" + address + "&colony=" + colony + "&state=" + state + "&phone=" + phone + "&contact_name=" + contactName + "&rfc=" + rfc + "&pc=" + pc + "&pc=" + pc + "&city=" + city + "&cell_phone=" + cellPhone + "&id=" + id + "&noExt=" + noExt + "&noInt=" + noInt + "&email=" + email + "&credit=" + credit + "&typeCost=" + typeCost);

      xmlhttp.send();
    }
  }
}

function onClickSelect() {
  var select = document.getElementById('all_clients').value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
      var res = xmlhttp.responseText.split(',');
      document.getElementById('name').value = res[0];
      document.getElementById('address').value = res[1];
      document.getElementById('colony').value = res[2];
      document.getElementById('state').value = res[3];
      document.getElementById('phone').value = res[4];
      document.getElementById('contactName').value = res[5];
      document.getElementById('rfc').value = res[6];
      document.getElementById('pc').value = res[7];
      document.getElementById('city').value = res[8];
      document.getElementById('cellPhone').value = res[9];
      document.getElementById('noInt').value = res[10];
      document.getElementById('noExt').value = res[11];
      document.getElementById('email').value = res[12];
      document.getElementById('credit').value = res[13];
      document.getElementById('typeCost').value = res[14];
    }
  };

  xmlhttp.open("GET", "links/clients.php?operation=selectClient&id=" + select);
  xmlhttp.send();
}

function onClickClients() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
      document.getElementById('all_clients').innerHTML = xmlhttp.responseText;
    }
  };

  xmlhttp.open("GET", "links/clients.php?operation=clients");
  xmlhttp.send();
}

function onClickDelete() {
  var select = document.getElementById('all_clients').value;
  if (!select || select === 'NA') {
    document.getElementById('response').innerHTML = "No se ha seleccionado ningun usuario";
    } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState === 4 && xmlhttp.status == 200) {
        document.getElementById('response').innerHTML = xmlhttp.responseText;
      }
    };

    xmlhttp.open("GET", "links/clients.php?operation=delete&id=" + select);
    xmlhttp.send();
  }
}
