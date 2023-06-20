<!DOCTYPE html>
<html>

<head>
    <title>Pantalla principal</title>
    <style>
    body {
        background-image: url("https://wallpapers.com/images/high/cute-pokemon-pikachu-ash-hug-cmwxktzil294lzxd.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }

    #reloj-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 20px;
        padding-right: 37pc;
    }

    #reloj {
        position: relative;
        width: 200px;
        height: 200px;
        border: 10px solid black;
        border-radius: 50%;
        background-color: yellow;
        overflow: hidden;
        cursor: pointer;
        margin-bottom: 20px;
    }

    

    #flecha {
        position: absolute;
        top: calc(50% - 10px);
        left: calc(50% - 2px);
        width: 4px;
        height: 100px;
        background-color: black;
        transform-origin: bottom center;
    }

    #incognito {
        position: absolute;
        top: calc(50% - 32px);
        left: calc(50% - 32px);
        width: 64px;
        height: 64px;
        background-image: url("incognito.png");
        background-size: cover;
        display: none;
    }

    #botones-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 20px;
        padding-right: 38pc;
    }

    .boton {
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #ae1515;
        color: white;
        border: none;
        border-radius: 4px;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .boton:hover {
        background-color: #efca1a;
    }

    #boton4 {
        position: fixed;
        bottom: 10px;
        right: 10px;
        background-color: red;
    }

    #texto-reloj {
        font-size: 18px;
        font-weight: bold;
        color: #555;
        margin-top: 40px;
    }

    #premio-modal {
        position: fixed;
        top: calc(50% - 100px);
        left: calc(50% - 150px);
        width: 300px;
        height: 200px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 4px;
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #premio-modal.show-modal {
        display: flex;
    }

    #premio-texto {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }

    #cerrar-modal {
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #cerrar-modal:hover {
        background-color: #45a049;
    }

    #historial-modal {
        position: fixed;
        top: calc(50% - 150px);
        left: calc(50% - 150px);
        width: 300px;
        height: 300px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 4px;
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #historial-modal.show-modal {
        display: flex;
    }

    #historial-titulo {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    #historial-premios {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .premio {
        margin-bottom: 10px;
    }

    #historial-cerrar-modal {
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #historial-cerrar-modal:hover {
        background-color: #45a049;
    }
    </style>
    <link href="/index.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="/index.css" rel="stylesheet">
</head>


<body>
    <div style="text-align: center;">
    <h1 style="font-size: 80px; font-weight: bold; color: #FF0000; padding-right: 33pc;">¡BIENVENIDOS!</h1>
    </div>
    <div id="botones-container">
        <button id="boton1" class="boton">JUGAR</button>
        <button id="boton-historial" class="boton">HISTORIAL DE PREMIOS</button>
        <button id="boton2" class="boton">INFORMACIÓN DE JUGADOR</button>
    </div>
    <div id="reloj-container">
        <div id="reloj">
            <div id="flecha"></div>
            <div id="incognito"></div>
            <div id="premio"></div>
        </div>
        <button id="boton-girar" class="boton" style="background-color: #00BFFF;">GIRAR</button>
        <p id="temporizador" style="text-align: center; font-size: 24px;">Presione para girar</p>
    </div>
    <button id="boton4" class="boton">SALIR</button>

    <!-- Ventana modal de premio -->
    <div id="premio-modal">
        <div id="premio-texto"></div>
        <button id="cerrar-modal">Cerrar</button>
    </div>

    <!-- Ventana modal de historial -->
    <div id="historial-modal">
        <div id="historial-titulo">Historial de Premios</div>
        <div id="historial-premios"></div>
        <button id="historial-cerrar-modal">Cerrar</button>
    </div>

    <script>
        $(document).ready(function() {
            var girarPermitido = true;
            var tiempoRestante = 60;
            var premios = ["Premio 1", "Premio 2", "Premio 3", "Premio 4", "Premio 5"];
            var historialPremios = [];

            function iniciarTemporizador() {
                var minutos = Math.floor(tiempoRestante / 60);
                var segundos = tiempoRestante % 60;
                $("#temporizador").text("Próximo giro en: " + minutos + "m " + segundos + "s");

                var timeout = setTimeout(function() {
                    tiempoRestante--;
                    if (tiempoRestante <= 0) {
                        clearTimeout(timeout);
                        girarPermitido = true;
                        $("#temporizador").text("Presione para girar");
                    } else {
                        iniciarTemporizador();
                    }
                }, 1000);
            }

            function girarReloj() {
                if (girarPermitido) {
                    girarPermitido = false;
                    tiempoRestante = 60;

                    var premioGanado = premios[Math.floor(Math.random() * premios.length)];
                    historialPremios.push(premioGanado); // Agregar premio al historial
                    $("#premio-texto").text(premioGanado);
                    $("#premio-modal").addClass("show-modal");

                    // Reiniciar la ruleta y mostrar el premio ganado
                    $("#reloj").css("background-color", "orange");
                    $("#reloj").css("cursor", "default");
                    $("#reloj").unbind("click");
                    $("#reloj").append('<div id="flecha"></div>');
                    $("#flecha").css("transform", "rotate(0deg)");
                    $("#flecha").css("animation", "girarFlecha 5s linear");

                    $("#incognito").hide();

                    iniciarTemporizador();
                } else {
                    alert("Debes esperar al próximo giro");
                }
            }

            $("#boton1").click(function() {
                window.location.href = "http://pokemon.test/pokedex";
            });
            $("#boton2").click(function() {
                window.location.href = "http://pokemon.test/perfil";
            });
            $("#boton-historial").click(function() {
                var historialHTML = "";
                if (historialPremios.length > 0) {
                    historialHTML = historialPremios.join("<br>");
                } else {
                    historialHTML = "No hay premios en el historial";
                }
                $("#historial-premios").html(historialHTML);
                $("#historial-modal").addClass("show-modal");
            });
            $("#boton-girar").click(function() {
                $(this).addClass("spin-animation");
                setTimeout(function() {
                    $("#boton-girar").removeClass("spin-animation");
                }, 2000);
                girarReloj();
            });

            // Cambiar el color del botón de girar al pasar el cursor sobre él
            $("#boton-girar").hover(function() {
                $(this).css("background-color", "#009ACD");
            }, function() {
                $(this).css("background-color", "#00BFFF");
            });

            // Cambiar el color del botón de salir al pasar el cursor sobre él
            $("#boton4").hover(function() {
                $(this).css("background-color", "darkred");
            }, function() {
                $(this).css("background-color", "red");
            });

            // Cerrar ventana modal de premio
            $("#cerrar-modal").click(function() {
                $("#premio-modal").removeClass("show-modal");
            });

            // Cerrar ventana modal de historial
            $("#historial-cerrar-modal").click(function() {
                $("#historial-modal").removeClass("show-modal");
            });
        });
    </script>
</body>

</html>