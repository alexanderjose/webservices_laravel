<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vista de Seriales consumiendo Webservices</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/seriales.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-10 col-md-10 offset-1">
          <br><br>
          <div class="card">
            <div class="card-header">Tabla de Seriales</div>
            <div class="card-body">
              <div class="row">
                <div id="container_tipo_solicitud" class="col-3">
  								<div class="form-group">
  									<label for="tipo_solicitud">Tipo de Solicitud:</label>
  									<select class="form-control tipo_solicitud" id="tipo_solicitud">
  										<option value="">Todos</option>
  									</select>
  								</div>
  			        </div>
                <div id="container_estatus_solicitud" class="col-3">
  								<div class="form-group">
  									<label for="estatus_solicitud">Estatus de Solicitud:</label>
  									<select class="form-control estatus_solicitud" id="estatus_solicitud">
  										<option value="">Todos</option>
  									</select>
  								</div>
  			        </div>
                <div id="container_serie_decimal" class="col-3">
  								<div class="form-group">
  									<label for="serie_decimal">Serie Decimal:</label>
  									<input class="form-control" type="text" placeholder="Escriba una serie" id="serie_decimal">
  								</div>
  			        </div>
                <div id="container_serie_hexadecimal" class="col-3">
  								<div class="form-group">
  									<label for="serie_hexadecimal">Serie Hexadecimal:</label>
                    <input class="form-control" type="text" placeholder="Escriba una serie" id="serie_hexadecimal">
  								</div>
  			        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12">
          <br>
          <table id="seriales" class="table table-striped table-bordered dt-responsive nowrap display">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Serie Decimal</th>
                <th class="text-center">Serie Hexadecimal</th>
                <th class="text-center">Tipo de Solicitud</th>
                <th class="text-center">Estatus de Solicitud</th>
                <th class="text-center">Fecha</th>
                <th class="col-sm-1 text-center">&nbsp;</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="../js/seriales.js" charset="utf-8"></script>
  </body>
</html>
