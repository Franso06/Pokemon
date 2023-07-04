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

    #volver_atras {
        margin-right: 76%;
        width: 60px;

    }

    .title {
        padding-bottom: 60px;
    }

    .item-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 30px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
        margin-top: auto;
        padding-top: 10px;
    }

    .item-block,
    .item-block-back {
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
    <div class="item-container">

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
       
        {{-- @foreach ($Items as $item)
            <tr>
                <td scope="row">{{ $item->id }}</td>
                <td>{{ $item->Nombre }}</td>
                <td>{{ $item->Efecto }}</td>
            </tr>
            
        @endforeach --}}
    </div>
</body>

<script>
    let url = 'http://pokemon.test/api/items'
    fetch(url)
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.log(error))
    const mostrarData = (data) => {
        console.log(data)
        let body= ''
        for(let i =0; i<data.lenght; i++)
        {
            body += `<tr><td>${data[i].id}</td></tr>`
        }
    }
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

    const items = [armadura, casco, cerveza, whisky];

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

        const comprar = document.createElement('button');
        comprar.classList.add('btn-light');
        comprar.setAttribute('id', `${items[i].nombre}`);
        comprar.addEventListener("click", (event) => {
            console.log(`Compraste: ${comprar.id}`);
        });
        comprar.textContent = "Comprar";

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
        itemContainer.appendChild(card);
    }
</script>
