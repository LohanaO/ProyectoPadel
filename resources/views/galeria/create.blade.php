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

</head>
<body>
     @include('partials.menu')
    <div class="contenedor">
        <div class="cont-formulario">
            <form action="{{url('/galeria')}} "method="POST" enctype="multipart/form-data" >
                @csrf
                <h2 class="titulo">Subir una Foto</h2>
                 <div class="card">
                    <div class="subir-foto">
                    <label for="imagen">Elije una foto</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*">
                   
                    </div>
                    @error('imagen')
                    <br>
                    <small>{{$message}}</small>
                    <br>
                        
                    @enderror
              
                </div>
           
            <input class="submit" type="submit" value="Subir foto">
            </form>

        </div>
       
       
</div>

    
@include('partials.footer')

</body>
</html>