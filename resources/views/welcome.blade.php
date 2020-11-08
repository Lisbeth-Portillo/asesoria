<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEDEC</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    body {
        background-image: url("uploads/fondo.jpg");
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
    }

    p {
        font-size: 20px;
        text-align: center;
        color: #252440;
        font-family: "CEDEC", serif;
    }

    .h2 {
        font-size: 50px;
        text-decoration: underline;
        text-align: center;
        color: #252440;
    }

    h1 {
        font-size: 90px;
        text-shadow: 2px 2px 5px darkblue;
        text-align: center;
        color: #32B12E;
font-family: 'Lobster', cursive;
    }

    .button1 {
        background-color: #252440;
        font-size: 20px;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button2 {
        background-color: #0a7a0e;
        font-size: 20px;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
    }

    img {
        width: 33%;
    }
    p{
        font-size:30px;
    }
</style>

<body>
    <div>
        <center>
            <p class="h2"> CEDEC </p>
            <p> Centro de Emprendimiento y
                <br> Desarrollo Empresarial Cooperativo
            </p>
        </center>
        <h1>Bienvenido Asociado </h1>
        <center>
        <a class="button1" href="{{ url('register') }}">Registrarse</a>
        <a class="button2" href="{{ url('login') }}">Iniciar sesión</a>
        </center>
    </div>
    <br><br>
    <br><br>
    <br>
    <footer>
        <center>
            <img src="imagenes/logo.png" alt="">
        </center>
    </footer>
</body>

</html>
