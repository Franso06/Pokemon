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
    }



    .main-head{
        height: 150px;
        background: #FFF;

    }

    .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
        .login-form{
            margin-top: 10%;
        }

        .register-form{
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px){
        .main{
            margin-left: 40%;
        }

        .sidenav{
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form{
            margin-top: 80%;
        }

        .register-form{
            margin-top: 20%;
        }
    }


    .login-main-text{
        margin-top: 20%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2{
        font-weight: 300;
    }

    .btn-black{
        background-color: #000 !important;
        color: #fff;
    }

</style>
</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Pokemon<br> Ingresa para disfrutar.</h2>
            <p>Ingresa o registrate para probar la aventura.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form>
                    <div class="form-group">
                        <label>Nombre de Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="inp_contraseña"
                                placeholder="Ingresa tu contraseña">
                            <div class="input-group-append">
                                <span class="input-group-text password-icon" id="Ver_Contraseña"><i
                                        class="fas fa-eye"></i></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-black">Ingresar</button>
                    <button type="submit" class="btn btn-secondary">Registrarse<a
                            href="https://www.google.com/?hl=es"></a></button>
                </form>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function() {
          $('#Ver_Contraseña').click(function() {
            var passwordInput = $('#inp_contraseña');
            var passwordFieldType = passwordInput.attr('type');

            //Este codigo hace funcionar el botón mostrar y ocultar contraseña.
            if (passwordFieldType === 'password') {
              passwordInput.attr('type', 'text');
              $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
              passwordInput.attr('type', 'password');
              $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
            }
          });
        });
    </script>
</body>
