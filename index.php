<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 border border-info border-2 rounded-3 p-3">
                <h2>Registro</h2>
                <form action="validar.php" method="post">
                    <div class="form-group mb-3">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class = "form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="apellido">Apellido</label>
                        <input class = "form-control" type="text" name="apellido">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class = "form-control" type="email" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="edad">Edad</label>
                        <input class = "form-control" type="text" name="edad">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="Telefono">Telefono</label>
                        <input class = "form-control" type="text" name="Telefono">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Genero</label>
                        <select class="form-select" id="inputGroupSelect01" name="genero">
                           <option value="" selected>Selecione</option>
                          <option value="masculino">MASCULINO</option>
                          <option value="femenino">FEMENINO</option>
                          <option value="otro">OTRO</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label class="form-label" for="password">Pasword</label>
                        <input class = "form-control" type="password" name="password">
                    </div> 
                    <div class="form-group mb-3">
                        <label class="form-label" for="repetir_password">Repetir pasword</label>
                        <input class = "form-control" type="password" name="repetir_password">
                    </div> 

                    <button  class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4 mt-3">
            <?php
            if(isset($_GET['var'])){
              echo $_GET['var'];

            }
            ?>

          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>