<!DOCTYPE html>
<html>

<head>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        type = "test/javascript"
        src = "funciones.js"

    </script>
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Perfil</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



    <title>Registrarse</title>

    <style>
        body {
            font-family: "Lato", sans-serif;
            /* background-image: url("fondo.jpg"); */
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #2f2f2f;
            border-bottom: 2px solid #fbb040;
            color: #fff;
        }
        .main-head {
            height: 150px;
            background: #FFF;
        }
        .sidenav {
            height: 100%;
            overflow-x: hidden;
            padding-top: 20px;
        }
        .main {
            position: relative;
            top: -200px;
            padding: 0px 10px;
            padding-right: 200px;
        }
        #volver_atras{
            position: relative;
            left: 616px;
            margin-top: -397px;
        }
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
        }
        @media screen and (max-width: 450px) {
            .login-form {
                margin-top: 10%;
            }
            .register-form {
                margin-top: 10%;
            }
        }
        @media screen and (min-width: 768px) {
            .main {
                margin-left: 40%;
            }
            .login-form {
                margin-top: 80%;
            }
        }
        .login-main-text {
            margin-top: 20%;
            padding: 20px;
            color: #fff;
        }
        .login-main-text h2 {
            font-weight: 300;
        }
        .btn-black {
            background-color: rgb(255, 202, 0) !important;
            color: rgb(0, 0, 0);
        }
        a {
            color:  #015ab9;;
        }
        h2,
        p {
            color: rgb(193, 32, 38);
            font-size: 28px;
        }
        .pokemon-input input {
            font-size: 18px;
            padding: 10px;
            width: 100%;
            border: none;
            border-bottom: 2px solid #fbb040;
            outline: none;
            background-color: transparent;
            color: #fff;
        }
        .pokemon-input label {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 18px;
            padding: 14px;
            color: #fbb040;
            pointer-events: none;
            transition: 0.2s ease all;
        }
        .password-input .toggle-password {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            color: #fbb040;
            cursor: pointer;
            user-select: none;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <div class="output_message" id="form-messages"></div>
                    <form id="frm_usuario">
                        <div class="container-perfil">
                            <h2 style="color: rgb(255, 202, 0)" id="gestion" class="gestion"></h2>
                            <div class="fotoPerfil">
                                <img id="imagenPerfil" src="ruta-a-la-imagen-actual.jpg" style="width: 200px; height: 200px;"alt="Foto de perfil">
                                <input type="file" id="nuevaFotoPerfil" accept="image/*">
                                <button id="btn_guardar" class="btn btn-black" type="button" onclick="cambiarFotoPerfil()">Guardar</button>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                <div class="pokemon-input">
                                    <input class="nombre" id="nombre" readonly>
                                    <button id="btn_guardar" class="btn btn-black" type="button" onclick="habilitarEdicion('nombre')">Editar</button><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="form-label">Correo</label>
                                <div class="pokemon-input">
                                    <input class="correo" id="correo" readonly>
                                    <button id="btn_guardar" class="btn btn-black" type="button" onclick="habilitarEdicion('correo')">Editar</button><br>
                                </div>
                                <div id="correo_help_block" class="form-text" style=""></div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" class="form-label">Contraseña</label>
                                <div class="pokemon-input">
                                    <input type="password" class="contrasena" id="contrasena" readonly>
                                    <button id="btn_guardar" class="btn btn-black" type="button" onclick="habilitarEdicion('contrasena')">Editar</button><br>
                                </div>
                                <div id="contraseña_help_block" class="form-text" style=""></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <a href="/pantalla_principal"><button class="btn btn-black" id="volver_atras">Volver</button></a>
        </div>
</body>
<script>
//formula para cambiar la foto de perfil 
function cambiarFotoPerfil() {
    var fileInput = document.getElementById('nuevaFotoPerfil');
    var file = fileInput.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
      var imageElement = document.getElementById('imagenPerfil');
      imageElement.src = e.target.result;
    };

    reader.readAsDataURL(file);
}
function habilitarEdicion(campo) {
    
    var input = document.getElementById(campo);
    var button = input.nextElementSibling;

    if (input.readOnly) {
        input.readOnly = false;
        button.textContent = 'Guardar';
        button.addEventListener('click', function() {
          guardarCambios(campo);
        });
    } else {
        input.readOnly = true;
        button.textContent = 'Editar';
        button.removeEventListener('click', function() {
          guardarCambios(campo);
        });
    }
}
let url = 'http://pokemon.test/api/Usuario'
    fetch(url)
        .then(response => response.json())
        .then(data => {
            // let index= data[0];
            $('#nombre').attr('placeholder',data[0].nombre);
            $('#nombre').attr('readonly', false);
            $('#correo').attr('placeholder',data[0].correo);
            $('#contrasena').attr('placeholder',data[0].contrasena);
            $('#gestion').text('Usuario: '+data[0].nombre);
            

            console.log(data[0].contrasena);

            
        })
        .catch(error => console.log(error))
</script>
</html>