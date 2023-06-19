<!DOCTYPE html>
<html>
<head>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script> type="test/javascript" src="funciones.js"</script>
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
            background-image: url('{{ asset("imagenes/imagen_pokemon.jpg") }}');
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
        h2,p{
            color: rgb(193, 32, 38);

        }
    </style>
</head>
<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Pokemon<br>Ingresa para disfrutar.</h2>
            <p>Ingresa o registrate para probar la aventura.</p>
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
                        <label>Correo electronico</label>
                        <input id="correo" name="correo" type="text" class="form-control"
                            placeholder="Correo electronico">
                        <div id="correo_help_block" class="form-text" style="">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input id="contraseña" name="contraseña" type="password" class="form-control"
                            placeholder="Contraseña">
                        <div id="contraseña_help_block" class="form-text" style="">
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Repita contraseña</label>
                        <input id="contraseña2" name="contraseña2" type="password" class="form-control"
                            placeholder="Repita contraseña">
                        <div id="contraseña2_help_block" class="form-text" style="">
                        </div>
                    </div>
                    <button id="btn_registrarse" type="submit" class="btn btn-black">Registrarse</button>
                    <div><a href="http://pokemon.test/login">Ya esta registrado?</a></div>

                </form>
            </div>
        </div>
    </div>



</body>
</html>