<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../resources/css/style_registrarse.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Registrarse</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    padding-right: 200px;
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
a{
    color: black;   
}
    </style>
    
</head>
    <body>
    <div class="sidenav">
         <div class="login-main-text">
            <h2>Bienvenido<br>Pagina de registro</h2>
            <p>Registrese para ingresar.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>Ingrese su nombre de usuario</label>
                     <input type="text" class="form-control" placeholder="Nombre de usuario">
                  </div>
                  <div class="form-group">
                     <label>Ingrese su direccion de correo electronico</label>
                     <input type="text" class="form-control" placeholder="Correo electronico">
                  </div>
                  <div class="form-group">
                     <label>Contraseña</label>
                     <input type="password" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                     <label>Repita contraseña</label>
                     <input type="password" class="form-control" placeholder="Repita contraseña">
                  </div>
                  <button type="submit" class="btn btn-black">Registrarse</button>
                  <div><a href="url">Ya esta registrado?</a></div>
                  
               </form>
            </div>
         </div>
      </div>

    </body>
</html>