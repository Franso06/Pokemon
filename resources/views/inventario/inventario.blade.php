<head>
    <title>Inventario</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display:flex swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    body {
        background: rgb(85, 144, 189);
        background: linear-gradient(90deg,
                rgba(85, 144, 189, 1) 0%,
                rgba(108, 183, 240, 1) 54%,
                rgba(182, 216, 242, 1) 82%);
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-family: "Oswald", sans-serif;

    }

    h1 {
        color: white;
    }

    button {
        border-radius: 10px;
    }

    #coin-counter {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 24px;
        font-weight: bold;
        color: black;
        background-color: gold;
        border-radius: 10px;
    }

    #volver_atras {
        margin-right: 76%;
        width: 60px;

    }

    .title {
        padding-bottom: 60px;
    }

    .item-container {
        position: absolute;
        margin-left: 10%;  
        display: grid;
        grid-template-columns: 200px 200px;
        grid-row: auto auto;
        grid-column-gap: 20px;
        grid-row-gap: 20px;
        gap: 30px;
        width: 500px;
        height: 500px;
        */
        padding-top: 10px;

    }

    .pokemon-block,
    .pokemon-block-back {
        border-radius: 10px;
        padding: 10px;
        background-color: white;
        box-shadow: 0 3px 15px rgba(100, 100, 100, 0.5);
        width: 200px;
        height: 260px;
    }.pokemon-container {
        position: absolute;
        margin-left: 60%;  
        display: grid;
        grid-template-columns: 200px 200px;
        grid-row: auto auto;
        grid-column-gap: 20px;
        grid-row-gap: 20px;
        gap: 30px;
        width: 500px;
        height: 500px;
        */
        padding-top: 10px;
    }

    .item-block,
    .item-block-back {
        border-radius: 10px;
        padding: 10px;
        padding-top: 40px;
        background-color: white;
        box-shadow: 0 3px 15px rgba(100, 100, 100, 0.5);
        width: 200px;
        height: 260px;
    }

    .img-container {
        background-image: url("./blob.svg");
        background-repeat: no-repeat;
        background-position: center;
        
    }

    .item-block p {
        margin: 5px;
    }

    .name {
        text-transform: capitalize;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .pagination {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 50px;
    }

    .card-container {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }
</style>

<body>

    <h1 class="title">Inventario</h1>
    <a href="/pantalla_principal"><button class="boton" id="volver_atras">Volver</button></a>
    <div id="coin-counter">Monedas: <span id="coin-count">0</span></div>

    <div class="item-container">

    </div>
    <div class="pokemon-container">

    </div>
    {{-- <table class="table table-striped table-sm" id="tbl-data">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table> --}}
    <div>


    </div>
</body>

<script>
    let url = 'http://pokemon.test/api/items'
    fetch(url)
        .then(response => response.json())
        .then(data => {
                console.log(data[0].nombre);
        })
        .catch(error => console.log(error))
    
</script>

<script>
    class Item {

        constructor(id, nombre, efecto) {
            this.id = id;
            this.nombre = nombre;
            this.efecto = efecto;
        }
    }
    const armadura = new Item(
        "1",
        "Armadura",
        "Defensa +10"
    )

    const casco = new Item(
        "2",
        "Casco",
        "Defensa +20"
    )

    const cerveza = new Item(
        "3",
        "Cerveza",
        "Daño +10"
    )

    const whisky = new Item(
        "4",
        "Whisky",
        "Daño +20"
    )
    var ArrayOfImages = ['https://art.pixilart.com/60abd73a766f51d.png',
        'https://th.bing.com/th/id/R.0998e758c393569ee201a2118d4fc187?rik=eYWEYmVslC89%2bA&pid=ImgRaw&r=0',
        'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/antidote.png',
        'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/potion.png'
    ]; //your assumed array
    var monedas = 1000;
    var cont = 1;
    $("#coin-count").text(monedas);


    const items = [armadura, casco, cerveza, whisky];
    // Actualizar el saldo en la esquina

    const itemContainer = document.querySelector(".item-container");

    for (var i = 0; i < 4; i++) {
        console.log(items[i]);
        const spriteContainer = document.createElement('div');
        spriteContainer.classList.add('img-container');

        const sprite = document.createElement('img');
        sprite.height = "50";
        sprite.width = "50";
        sprite.src = ArrayOfImages[i];
        spriteContainer.appendChild(sprite);

        var card = document.createElement('div', []);
        card.classList.add('item-block');

        var contador = document.createElement('p');
        contador.classList.add('count');
        contador.setAttribute('id', `${items[i].nombre}`);
        contador.textContent=cont;

        const comprar = document.createElement('button');
        comprar.classList.add('btn-light');
        comprar.setAttribute('id', `${items[i].nombre}`);
        comprar.textContent = "Comprar";

        comprar.addEventListener("click", (event) => {
            cont=cont+1;
            console.log(`Compraste: ${comprar.id}`);
            // contador.getElementById(comprar.id).textContent=cont;
            $("#coin-count").text(monedas);
            if (monedas <= 0) {
                alert("No se puede seguir comprando");
            } else {
                monedas = monedas - 200;
            }
        });

        const name = document.createElement('p');
        name.classList.add('name');
        name.textContent = JSON.stringify(items[i].nombre).replace(/['"]+/g, '');

        const efecto = document.createElement('p');
        efecto.classList.add('efecto');
        efecto.textContent = JSON.stringify(items[i].efecto).replace(/['"]+/g, '');

        card.appendChild(sprite);
        card.appendChild(name);
        card.appendChild(efecto);
        card.appendChild(comprar);
        card.appendChild(contador);
        itemContainer.appendChild(card);
    }
</script>
<script>
    const pokemonContainer = document.querySelector(".pokemon-container");

    function fetchPokemon(id) {
        fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
            .then((res) => res.json())
            .then((data) => {
                createPokemon(data);
                console.log(data);
            }); //createItem(data) para ingresar todos los items      
    }

        fetchPokemon(1);
        fetchPokemon(4);
        fetchPokemon(7);
        fetchPokemon(25);
    function createPokemon(pokemon) {
        const card = document.createElement('div');
        card.classList.add('pokemon-block');

        const spriteContainer = document.createElement('div');
        spriteContainer.classList.add('img-container');

        const sprite = document.createElement('img');
        sprite.src = pokemon.sprites.front_default;

        spriteContainer.appendChild(sprite);

        const name = document.createElement('p');
        name.classList.add('name');
        name.textContent = pokemon.name;

        const vida = document.createElement('p');
        vida.classList.add('vida');
        vida.textContent = "Vida: 1000";

        const daño = document.createElement('p');
        daño.classList.add('daño');
        daño.textContent = "Daño: 50";

        const armor = document.createElement('p');
        armor.classList.add('armor');
        armor.textContent = "Armadura: 100";

        card.appendChild(spriteContainer);
        card.appendChild(name);
        card.appendChild(vida);
        card.appendChild(daño);
        card.appendChild(armor);
        pokemonContainer.appendChild(card);
    }

</script>
