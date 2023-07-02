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
    <title>Registrarse</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



    <title>Registrarse</title>

    <style>
        body {
            font-family: "Lato", sans-serif;
            background-image: url("fondo.jpg");
            background-repeat: no-repeat;
            background-size: cover;
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
            padding: 0px 10px;
            padding-right: 200px;
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
            .sidenav {
                width: 40%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
            }
            .login-form {
                margin-top: 80%;
            }
            .register-form {
                margin-top: 20%;
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
        .logo_pokemon {
            width: 60%;
            /* Reduce el ancho a la mitad */
            height: auto;
            /* Mantiene la proporción original de la imagen */
        }
        .custom-image {
            position: absolute;
            top: 67%;
            left: 60%;
            width: 20%;
            hi transform: translate(-50%, -50%);
        }
        /*Estilo pokemon*/
        .pokemon-input {
            position: relative;
            margin-bottom: 20px;
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
        .pokemon-input span {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #fbb040;
            transform: scaleX(0);
            transition: 0.2s ease all;
        }
        .pokemon-input input:focus+span,
        .pokemon-input input:not(:placeholder-shown)+span {
            transform: scaleX(1);
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
                        <h2>Gestion de perfil</h2>
                        <div class="fotoPerfil">
                          <img id="imagenPerfil" src="ruta-a-la-imagen-actual.jpg" style="width: 200px; height: 200px;"alt="Foto de perfil">
                          <input type="file" id="nuevaFotoPerfil" accept="image/*">
                       </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <div class="pokemon-input">
                                <input id="nombre" name="nombre" value="" type="text" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <div class="pokemon-input">
                                <input id="correo" name="correo" value="" type="email" placeholder=" ">
                            </div>
                            <div id="correo_help_block" class="form-text" style=""></div>
                        </div>
                        <div class="form-group">
                            <div class="pokemon-input">
                                <input id="contraseña" name="contraseña" type="password" placeholder=" ">
                                <label>Contraseña</label>
                            </div>
                            <div id="contraseña_help_block" class="form-text" style=""></div>
                        </div>
                          <button id="btn_guardar" type="submit" value="Guardar" class="btn btn-black" onclick="cambiarFotoPerfil()">Guardar</button>
                          <button id="btn_menu" type="submit" value="Enviar" class="btn btn-black">Volver al menu</button>
                    </form>
                </div>
            </div>
        </div>
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
</script>
</html>