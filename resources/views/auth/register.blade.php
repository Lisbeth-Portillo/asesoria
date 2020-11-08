<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/app.css">
    <title>CEDEC</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        background: url("uploads/registro.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    * {
        box-sizing: border-box;
    }

    .contenedor {
        width: 100%;
        padding: 15px;
    }

    .formulario {
        background: rgb(247, 241, 240,0.4);
        margin-top: 150px;
        padding: 3px;
        text-align: center;
        border-right-width: thick black;
        border-left-width: thick black;
    }

    .coosajo {
        text-align: center;
        margin-bottom: 50px;
    }

    h3,
    h6 {
        text-align: center;
        color: #1a2537;
        font-size: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        font-size: 15px;
        width: 80%;
        padding: 10px;
        border: none;
    }

    .input-contenedor {
        margin-bottom: 15px;
        border: 1px solid black;
        background: white;
    }

    .icon {
        min-width: 50px;
        text-align: center;
        color: black;
        border: none;
    }

    .button {
        border: none;
        width: 50%;
        color: white;
        font-size: 20px;
        background: #1E3A74;
        padding: 15px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    #co {
        font-size: 150px;
        text-align: center;
        color: #1E3A74;
    }

    @media(min-width:768px) {
        .formulario {
            margin: auto;
            width: 500px;
            margin-top: 30px;
            border-radius: 1px;
        }
    }

    .form-control-lg:focus {
        outline: none;
    }

</style>

<body>
    <div class="div">
        <form method="POST" class="formulario" action="{{ route('register') }}">
            @csrf
             <i class="fas fa-user-plus fa-8x fa-lg" style="color:darkblue"></i>
            <br><br>
            <h2>CEDEC</h2>
            <h6>Centro de Emprendimiento y Desarrollo</h6>
            <h6>Empresarial Coperativo</h6>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user-check icon"></i>
                    <input id="name" class="form-control-lg  @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" type="text" placeholder="Nombre de usuario" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-envelope  icon"></i>
                    <input id="email" class="form-control-lg  @error('email') is-invalid @enderror" type="email"
                        placeholder="Correo" name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-unlock-alt icon"></i>
                    <input id="password" type="password"
                        class="form-control-lg  @error('password') is-invalid @enderror" value="{{ old('password') }}"
                        name="password" placeholder="Contraseña">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <p>Al registrarse acepta nuestros términos y condiciones de uso y políticas de privacidad <a href="">Leer términos y condiciones</a></p>

                <input type="submit" value="Registrarse" class="button">
            </div>
        </form><br>
        <div class="coosajo">
            <img src="uploads/logo.png" width="350px" height="50px" alt="">
        </div>
    </div>
</body>

</html>
