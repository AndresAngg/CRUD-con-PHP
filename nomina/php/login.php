<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../img/nomina-de-sueldos.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Nomina</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</head>

<body>
    <script src="../js/header.js"></script>
    <div class="cont">
        <div class="fm">
            <h1>Iniciar Sesión</h1>
            <form action="verification.php" method="POST" class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Identificación:</label>
                        <input type="text" class="form-control" name="iden" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Perfecto!
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom03">Contraseña:</label>
                        <input type="password" class="form-control" name="contra" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Invalida
                        </div>
                    </div>


                </div>

                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Acceder</button>
            </form>
        </div>
    </div>

<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
           
            var forms = document.getElementsByClassName('needs-validation');
        
            
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>

</html>