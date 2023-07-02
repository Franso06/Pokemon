<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
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

        .password-input .toggle-password {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            color: #fbb040;
            cursor: pointer;
            user-select: none;
        }

        .password-input .toggle-password i {
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
                            <input type="text" placeholder=" ">
                            <label>Nombre Usuario</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="pokemon-input password-input">
                                <input type="password" placeholder=" " id="password-input">
                                <label>Contraseña</label>
                                <span class="toggle-password" onclick="togglePasswordVisibility()"><i
                                        class="fas fa-eye"></i></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btn_ingresar" class="btn btn-black">Ingresar</button>
                    <a class="btn btn-secondary" href="{{ route('registrarse.create') }}">Registrarse</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#Ver_Contraseña').click(function(event) {
                event.preventDefault();

                function togglePasswordVisibility() {
                    var passwordInput = $("#password-input");
                    var toggleIcon = $(".toggle-password i");

                    if (passwordInput.attr("type") === "password") {
                        passwordInput.attr("type", "text");
                        toggleIcon.removeClass("fa-eye");
                        toggleIcon.addClass("fa-eye-slash");
                    } else {
                        passwordInput.attr("type", "password");
                        toggleIcon.removeClass("fa-eye-slash");
                        toggleIcon.addClass("fa-eye");
                    }
                }
            });

            $('#btn_ingresar').click(function(event) {
                event.preventDefault();

                var nombre_usuario = $("#inp_nombre_usuario");
                var contraseña = $("#inp_contraseña");

                if (nombre_usuario.val() == "") {
                    alert("Ingrese su usuario");
                    nombre_usuario.focus();
                } else if (contraseña.val() == "") {
                    alert("Ingrese su contraseña");
                    contraseña.focus();
                } else {

                    var frm_login = $("#frm_login").serialize();
                    console.log(frm_login);
                }



            });
        });
    </script>
</body>
