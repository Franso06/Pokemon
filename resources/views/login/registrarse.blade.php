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
            background-image: url('{{ asset('imagenes/imagen_pokemon.jpg') }}');
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
            background-color: #000 !important;
            color: #fff;
        }

        a {
            color: black;
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
    </style>

    <script>

        $(document).ready(function(){
            
             $("#btn_registrarse").click(function() {
                event.preventDefault();

                var nombre = $("#nombre");
                var correo = $("#correo");
                var contraseña = $("#contraseña");
                var contraseña2 = $("#contraseña2");

                if (nombre.val() == "") {
                    alert("Error en el nombre de usuario.");
                    nombre.focus();
                }else if (correo.val() == "") {
                    alert("Error en el correo electrónico.");
                    correo.focus();
                }else if (validarCorreo(correo.val()) == false) {
                    alert("Correo no válido.");
                    correo.focus();
                }else if (contraseña.val() == "") {
                    alert("Error en la contraseña.");
                    contraseña.focus();
                }else if (contraseña2.val() == "") {
                    alert("No ha ingresado nuevamente su contraseña.");
                    contraseña2.focus();
                } else if (contraseña.val() != contraseña2.val()) {
                    alert("Las contraseñas deben ser iguales");
                    contraseña2.focus();
                } else {
                    console.log(frm_usuario);
                }

                
        });



            
        });



        function validarCorreo(valor) {
            if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) {
                return true;
            } else {
                return false;
            }
        }








       
    </script>







</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <img class="logo_pokemon"src="{{ asset('imagenes/imagen_logo_pokemon.png') }}">


            <div class="container">
                <img src="/imagenes/imagen_charmander.png" alt="Imagen" class="custom-image">
            </div>



        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <div class="output_message" id="form-messages"></div>
                <form id="frm_usuario">
                    <div class="form-group">
                        <label>Nombre usuario</label>
                        <input id="nombre" name="nombre "type="text" class="form-control"
                            placeholder="Nombre de usuario">

                    </div>
            </div>
            <div class="form-group">
                <label>Correo electrónico</label>
                <input id="correo" name="correo" type="text" class="form-control"
                    placeholder="Correo electrónico">
                <div id="correo_help_block" class="form-text" style="">

                </div>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input id="contraseña" name="contraseña" type="password" class="form-control" placeholder="Contraseña">
                <div id="contraseña_help_block" class="form-text" style="">

                </div>
            </div>
            <div class="form-group">
                <label>Reingrese su contraseña</label>
                <input id="contraseña2" name="contraseña2" type="password" class="form-control"
                    placeholder="Reingrese su contraseña">
                <div id="contraseña2_help_block" class="form-text" style="">
                </div>
            </div>
            <button id="btn_registrarse" type="submit" class="btn btn-black">Registrarse</button>
            <div><a href="http://pokemon.test/login">¿Ya está registrado?</a></div>

            </form>
        </div>
    </div>
    </div>



</body>

</html>
