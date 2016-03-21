<div class="page-content">


  <div class="header">
    <h2><strong>Inventarios</strong></h2>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-header">
          <h3><i class="icon-bulb"></i> Modificar | Entrada y Salida por Devolución <strong>Inventarios</strong></h3>
        </div>
        <div class="panel-content p-t-0">
          <p> Selecciona tipo de Producto. Para filtrar, escribe el código de barras y/o marca y/o clave, y/o modelo y/o nombre. Selecciona un producto de la lista y elige el tipo de operacion a realizar.</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group col-md-6">
                <label for="permisos">Tipo de Producto</label>
                <select class="form-control" name="favoriteNumber">
                  <option value="Llantas">Llantas</option>
                  <option value="Rines">Rines</option>
                  <option value="Productos">Productos y Accesorios</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Código de Barras</label>
                <input type="text" class="form-control" placeholder="Filtrar por Código de barras">
              </div>
              <div class="form-group">
                <label class="form-label">Clave</label>
                <input type="text" class="form-control" placeholder="Filtrar por clave">
              </div>
              <div class="form-group">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Filtrar por Nombre">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Marca</label>
                <input type="text" class="form-control" placeholder="Filtrar por Marca">
              </div>
              <div class="form-group">
                <label class="form-label">Modelo</label>
                <input type="text" class="form-control" placeholder="Filtrar por Modelo">
              </div>
            </div>
            <div class="col-md-12">
              <button type="button" class="btn btn-primary btn-square">Buscar</button>
            </div>
            <div class="col-md-12 border-top" style="border-top:1px;">
              <div class="panel-content">
                <table class="table table-striped tablet-tools">
                  <thead>
                    <tr>
                      <th>Código de Barras</th>
                      <th>Clave</th>
                      <th>Nombre</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1987623487651234</td>
                      <td>175-70-14-contin-evar-12-ital</td>
                      <td>Evardy 12 italiana</td>
                      <td>Continental</td>
                      <td>Evardy 12</td>
                      <td><button type="button" class="btn btn-primary btn-square">Editar</button></td>
                    </tr>
                    <tr>
                      <td>1987623487651234</td>
                      <td>175-70-14-contin-evar-12-ital</td>
                      <td>Evardy 12 italiana</td>
                      <td>Continental</td>
                      <td>Evardy 12</td>
                      <td><button type="button" class="btn btn-primary btn-square">Editar</button></td>
                    </tr>
                    <tr>
                      <td>1987623487651234</td>
                      <td>175-70-14-contin-evar-12-ital</td>
                      <td>Evardy 12 italiana</td>
                      <td>Continental</td>
                      <td>Evardy 12</td>
                      <td><button type="button" class="btn btn-primary btn-square">Editar</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-12 border-top" style="border-top:1px;">
                <h3>Existencia de <b>Nombre Producto</b></h3>
                <p>
                  Existencia en Almacen: 123
                </p>
                <div class="col-md-12">
                  <button type="button" class="btn btn-success btn-square">Modificar</button>
                  <button type="button" class="btn btn-primary btn-square">Entrada por Devolucion</button>
                  <button type="button" class="btn btn-danger btn-square">Salida por Devolucion</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
