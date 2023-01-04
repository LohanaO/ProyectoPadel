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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/css/app.css','resources/scss/app.scss','resources/js/app.js'])
   
</head>
<body>
  @include('partials.menu')
    <div class="contenedor-galeria ">
        <div class="">
            <h2 class="titulo"> Galeria de fotos</h2>
            <div class="regresar">
                <a  href="{{url('galeria/create')}}">Cargar Foto</a>
                </div>
                @if (Session::has('mensaje'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">

                    
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <p>{{ Session::get('mensaje') }}</p>
                </div>
               @endif
            <section class="fotos">
                <div class="contenedor1">
               
                @foreach ($galerias as $galeria)
                <div class="thumb">
                    <img src="{{ asset('storage') . '/' . $galeria->imagen }}" alt="Imagen">
                    <div class="inline">
                        <button><a   href="{{url('/galeria/'.$galeria->id.'/edit')}}"><i class="fa-solid fa-file-pen"></i> Editar</a></button>
                        <form action="{{url('galeria/'.$galeria->id)}}" method="POST" >
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit"><i class="fa-sharp fa-solid fa-trash"></i> Eliminar</button>
                        </form>
                    </div>
                   
                </div>
                
                    
               
                    
                @endforeach   
                
                  
                   
                </div>
            </section>

           
        </div>
      
       
    </div>
    <div class="pag" >
        {!!$galerias->links()!!}
    </div>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="./js/slider.js"></script>
<script src="./js/menu.js"></script>




</body>
</html>