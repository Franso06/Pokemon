<head>
    <title>Pokedex</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
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

    .pokemon-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 30px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
        margin-top: 20px;
    }

    .pokemon-block,
    .pokemon-block-back {
        border-radius: 10px;
        padding: 10px;
        background-color: white;
        box-shadow: 0 3px 15px rgba(100, 100, 100, 0.5);
    }

    .img-container {
        background-image: url("./blob.svg");
        background-repeat: no-repeat;
        background-position: center;
    }

    .pokemon-block p {
        margin: 5px;
    }

    .name {
        text-transform: capitalize;
        font-weight: bold;
        font-size: 1.2rem;
    }

    #spinner {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
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

    .flip-card:hover .card-container {
        transform: rotateY(180deg);
    }

    .pokemon-block,
    .pokemon-block-back {
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

    .pokemon-block-back {
        transform: rotateY(180deg);
        position: absolute;
        top: 0%;
    }

    .stat-container {
        display: grid;
        grid-template-columns: 1fr 2fr;
        text-align: left;
    }
</style>

<body>
    <h1 class="title">Pokedex</h1>
    <div class="pokemon-container">

    </div>
    
</body>
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
