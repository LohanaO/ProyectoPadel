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
   @include(partials/menu)
    <div class="fondo">
        <div class="cont-formulario">
            <form action="" enctype="multipart/form-data" method="post">
            <fieldset>
                <legend class="subir-foto"> Subir Foto</legend>
                    <div class="subir-foto">
                    <label for="foto">Elije una foto</label>
                    <input type="file" name="foto" id="foto">
                   
                    </div>
              
            </fieldset>
            <input class="submit" type="submit" value="subir foto">
            
            </form>

        </div>
       
       
</div>
@include('partials/footer')
    

<script src="./js/slider.js"></script>
<script src="./js/menu.js"></script>
</body>
</html>