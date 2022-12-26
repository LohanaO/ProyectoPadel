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
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
   
</head>
<body>
  @include('partials.menu')
    <div class="contenedor fondo">
        <div class="contenedor1 margin">
            <h2 class="titulo"> Galeria de fotos</h2>
            <div class="regresar">
                <a  href="{{url('galeria/create')}}">cargar Foto</a>
                </div>
            <section class="fotos">
                <div class="contenedor1">
               
                @foreach ($galerias as $galeria)
                <div class="thumb">
                    <img src="{{ asset('storage') . '/' . $galeria->imagen }}" alt="Imagen">
                    <div class="inline">
                        <a  href="{{url('/galeria/'.$galeria->id.'/edit')}}"><i class="fa-solid fa-file-pen"></i> Editar</a>
                        <a  href=""><i class="fa-sharp fa-solid fa-trash"></i> Eliminar</a>
                    </div>
                </div>
                
                    
               
                    
                @endforeach   
                
                  
                   
                </div>
            </section>
           
        </div>
       
    </div>

    @include('partials.footer')
<script src="./js/slider.js"></script>
<script src="./js/menu.js"></script>
</body>
</html>