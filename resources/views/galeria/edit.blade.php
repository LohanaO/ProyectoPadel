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
    <link rel="stylesheet"  href="{{asset ('css/style.css')}}">
</head>
<body>
    @include('partials.menu')
    <div class="fondo">
        <div class="cont-formulario">
            <form action="{{url('/galeria/'.$galeria->id)}} "method="POST" enctype="multipart/form-data" >
                @csrf
               {{method_field('PATCH')}}
            <fieldset>
                <legend class="subir-foto"> actualiazar Foto</legend>
                <img src="{{ asset('storage') . '/' . $galeria->imagen }}" alt="Imagen" width="350px">
                    <div class="subir-foto">
                       
                    <label for="imagen">Elije una foto</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*">
                   
                    </div>
                    
                    @error('imagen')
                    <br>
                    <small>{{$message}}</small>
                    <br>
                        
                    @enderror
              
              
            </fieldset>
           
            <input class="submit" type="submit" value="Actualizar foto">

            <div class="submit">
                <a  href="{{url('galeria')}}">Volver</a>
            </div>
            </form>

        </div>
       
       
</div>

    
@include('partials.footer')
<script src="./js/slider.js"></script>
<script src="./js/menu.js"></script>
</body>
</html>