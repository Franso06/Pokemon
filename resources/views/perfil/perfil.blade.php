<html>
    
    
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <link rel="stylesheet" href="C:\laragon\www\Pokemon\resources\views\perfil\style.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
  <style>
    .container-perfil {
    
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 300px;
    margin-left: 500px;
     
    }
    body {
      background-image: url("fondo.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin:auto;
      width:auto;
      height:auto;
    }

    .profile-form label {
      display: block;
      margin-bottom: 10px;
    }
    
    .profile-form input[type="text"],
    .profile-form input[type="email"],
    .profile-form input[type="password"],
    .profile-form input[type="number"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }
    
    .profile-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      
    }
    .foto{
        text-align: left;
      }
  </style>


  <body>
    <div class="general">
          <div class="container-perfil">
            <div class="card" style="width: 18rem;">
                <img id="imagenPerfil" src="ruta-a-la-imagen-actual.jpg" style="width: 200px; height: 200px;" alt="Foto de perfil">
                <input type="file" id="nuevaFotoPerfil" accept="image/*">
                <div class="card-body">
                <div class>
                  <label for="formGroupExampleInput" class="form-label">Nombre</label>
                  <input type="text" id="nombre" name="nombre" readonly>
                  <button type="button" class="btn btn-primary" onclick="habilitarEdicion('nombre')">Editar</button><br>
                </div>
                  
                <div class>
                    <label for="formGroupExampleInput" class="form-label">Correo</label>
                    <input type="correo" id="correo" name="correo" readonly>
                    <button type="button" class="btn btn-primary" onclick="habilitarEdicion('correo')">Editar</button><br>
                </div>

              <div class>
                    <label for="formGroupExampleInput" class="form-label">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" readonly>
                    <button type="button"class=" btn btn-primary" onclick="habilitarEdicion('contraseña')">Editar</button><br>
                </div>

                  <button input type="button" class="btn btn-success" onclick="combinarBotones()">Cambiar</button><br>
                </div>
              </div>
          </div>
    </div>  
  <body>


  <script>
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
    
    function guardarCambios(campo) {
      var input = document.getElementById(campo);
      
      
      
      // se modifica los campos 
      console.log('Campo:', campo);
      console.log('Valor:', input.value);
    }



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