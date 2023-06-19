<html>
    
    
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <link rel="stylesheet" href="C:\laragon\www\Pokemon\resources\views\perfil\style.css">
  </head>
  <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    .container-perfil {
    
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 300px;
    margin-left: 350px;
     
    }
    .general {
      background-image: url("https://www.gratistodo.com/wp-content/uploads/2016/07/pokemon-wallpapers-3.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin:auto;
      width:auto;
      height:auto;
    }
  </style>


  <body>
    

    <div class="general">

          <div class="container-perfil">
                <h2>Gestion de perfil</h2>
                <div class="fotoPerfil">
                  <img id="imagenPerfil" src="ruta-a-la-imagen-actual.jpg" style="width: 200px; height: 200px;" alt="Foto de perfil">
                  <input type="file" id="nuevaFotoPerfil" accept="image/*">
                  
                </div>

              <div class="col-3">
                  <label for="formGroupExampleInput" class="form-label">Nombre</label>
                  <input type="text" id="nombre" name="nombre" readonly>
                  <button type="button" onclick="habilitarEdicion('nombre')">Editar</button><br>
              </div>

              <div class="col-3">
                  <label for="formGroupExampleInput" class="form-label">Correo</label>
                  <input type="correo" id="correo" name="correo" readonly>
                  <button type="button" onclick="habilitarEdicion('correo')">Editar</button><br>
              </div>

             <div class="col-3">
                  <label for="formGroupExampleInput" class="form-label">Contraseña</label>
                  <input type="password" id="contrasena" name="contrasena" readonly>
                  <button type="button" onclick="habilitarEdicion('contrasena')">Editar</button><br>
              </div>

              <button input type="submit" value="Guardar" onclick="cambiarFotoPerfil()" color-style:green;>Cambiar</button>
        
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