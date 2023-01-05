<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padel Site</title>
    <script src="https://kit.fontawesome.com/17a430a055.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/scss/app.scss','resources/js/app.js'])
<body>

     @include('partials/menu')

     <div class="contenedor">
         <h2 class="titulo">Formulario de contacto</h2>
                <div class="card">
                    <form class="formulario" action="">
                   <div>
                    <form action="">
                    <label for="nombre"> Nombre
                        <input type="text" name="nombre">
                    </label>
                   </div>
                   <div>
                    <label class="label" for="apellido"> Apellido
                        <input type="text" name="apellido">
                    </label>
                   </div>
                   <div>
                    <label class="label" for="mail"> Correo Electronico
                        <input type="email" name="mail">
                    </label>
                   </div>
                   <div>
                    <label class="label" for="telefono"> Télefono
                        <input type="number" name="telefono">
                    </label>
                   </div>
                   <div>
                    <label class="label" for="mensaje"> Mensaje
                        <textarea name="mensaje" placeholder="Escriba aqui su mensaje..."></textarea>
                    </label>
                   </div>
                   <div class="botones">
                    <input class="submit boton" type="submit" value="Enviar">

                <div class="submit boton">
                <a  href="{{url('./')}}">Volver</a>
                </div>
                   </div>
                </form>
                </div>
            </div>
      
    
     
     @include('partials.footer')


</body>
</body>
</html>