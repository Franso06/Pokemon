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
        #reloj img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        #coin-counter {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
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
        <img src="https://media.tenor.com/neir67NC49wAAAAC/ruleta.gif" alt="Imagen del reloj">
        </div>
        <button id="boton-girar" class="boton" style="background-color: #00BFFF;">GIRAR</button>
        <p id="temporizador" style="text-align: center; font-size: 24px;">Presione para girar</p>
    </div>
    <button id="boton4" class="boton">SALIR</button>
    <div id="coin-counter">Monedas: <span id="coin-count">0</span></div>

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
            var premios = ["Pikachu", "100", "Charmander", "2000", "300", "Squirtle", "10000", "Squirtle", "0", "1203", "0", "43", "3000"];
            var historialPremios = [];
            var monedas = 0;

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

                    monedas += parseInt(premioGanado); // Agregar el premio al saldo
                    $("#coin-count").text(monedas); // Actualizar el saldo en la esquina

                    // Mostrar el premio ganado durante 2 segundos
                    setTimeout(function() {
                        $("#premio-modal").removeClass("show-modal");
                        $("#reloj").css("background-color", "yellow");
                        $("#reloj").css("cursor", "pointer");
                        $("#reloj").click(girarReloj);
                        $("#flecha").remove();
                        iniciarTemporizador();
                    }, 2000);
                }
            }

            function mostrarHistorial() {
                var historialHtml = "";
                for (var i = 0; i < historialPremios.length; i++) {
                    historialHtml += "<div class='premio'>" + historialPremios[i] + "</div>";
                }
                $("#historial-premios").html(historialHtml);
                $("#historial-modal").addClass("show-modal");
            }

            $("#boton1").click(function() {
                window.location.href = "http://pokemon.test/pokedex";
            });
            $("#boton2").click(function() {
                window.location.href = "http://pokemon.test/perfil";
            });
            $("#boton-historial").click(mostrarHistorial);

            $("#boton-girar").click(girarReloj);

            $("#cerrar-modal").click(function() {
                $("#premio-modal").removeClass("show-modal");
            });

            $("#historial-cerrar-modal").click(function() {
                $("#historial-modal").removeClass("show-modal");
            });

            $("#boton4").click(function() {
                alert("¡HASTA LUEGO!");
            });
        });
    </script>
</body>

</html>