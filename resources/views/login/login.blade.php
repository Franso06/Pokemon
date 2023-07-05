<!DOCTYPE html>
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



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

            /*Formulario*/

            .login-main-text {
                margin-top: 20%;
                padding: 20px;
                color: rgb(0, 0, 0);
            }

            .login-main-text h2 {
                font-weight: 300;
            }

            .btn-black {
                background-color: rgb(255, 202, 0) !important;
                color: rgb(0, 0, 0);
            }

            .btn-secondary {
                background-color: rgb(225, 225, 225) !important;
                color: rgb(0, 0, 0);
            }

            label {
                color: black
            }

            .custom-image {
                position: absolute;
                top: 67%;
                left: 55%;
                width: 25%;
                hi transform: translate(-50%, -50%);
            }



            /*Inputs del formulario*/
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

            .pokemon-input input:focus+label,
            .pokemon-input input:not(:placeholder-shown)+label {
                transform: translateY(-25px);
                font-size: 12px;
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

            .contrasena .toggle-password {
                position: absolute;
                top: 0;
                right: 0;
                padding: 10px;
                color: #fbb040;
                cursor: pointer;
                user-select: none;
            }

            .contrasena .toggle-password i {
                pointer-events: none;
            }

            /*Imagenes*/

            .logo_pokemon {
                width: 60%;
                /* Reduce el ancho a la mitad */
                height: auto;
                /* Mantiene la proporción original de la imagen */
            }
        </style>
    </head>

    <body>
        <div class="sidenav">
            <div class="login-main-text">
                <img class="logo_pokemon" src="{{ asset('imagenes/imagen_logo_pokemon.png') }}">


                <div class="container">
                    <img src="/imagenes/imagen_pikachu.png" alt="Imagen" class="custom-image">
                </div>



            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form id="frm_login">

                        <div class="form-group">
                            <div class="pokemon-input">
                                <input name="nombre" id="nombre" type="text" placeholder=" ">
                                <label>Nombre Usuario</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="pokemon-input contrasena">
                                    <input type="password" placeholder=" " name="contrasena" id="contrasena">
                                    <label>contraseña</label>
                                    <span class="toggle-password" onclick="togglePasswordVisibility()"><i
                                            class="fas fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="btn_ingresar" name="btn_ingresar" class="btn btn-black">Ingresar</button>
                        <a class="btn btn-secondary" href="http://pokemon.test/registrarse">Registrarse</a>
                    </form>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var maxIntentos = 3;
                var intentos = 0;
                $('#btn_ingresar').click(function(event) {
                    event.preventDefault();


                    var nombre = $("#nombre").val();
                    var contrasena = $("#contrasena").val();

                    if (nombre == "") {
                        alert("Ingrese su usuario");
                        nombre.focus();
                    } else if (contrasena == "") {
                        alert("Ingrese su contrasena");
                        contrasena.focus();
                    }else{
                        $.getJSON('http://pokemon.test/api/Usuario', function(json) {
                            for (var i = 0; i < json.length; i++) {
                                if (nombre.toLowerCase() == json[i].nombre.toLowerCase()) {
                                    if (contrasena == json[i].contrasena) {
                                        window.location.href = "http://pokemon.test/registrarse";
                                    } else {
                                        intentos ++;
                                        if (intentos >= maxIntentos) {
                                            // Se han superado los intentos máximos, redirigir a otra página
                                            window.location.href = "http://google.com/";
                                        } else {
                                            alert("Contraseña incorrecta. Intento " + intentos + " de " + maxIntentos);
                                        }
                                    }
                                }
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
