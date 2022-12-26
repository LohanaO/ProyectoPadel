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
        <div class="container-slider">
        <div class="slider" id="slider">
        <div class="slider__section">
            <img src="img/padel5.jpg" alt="" class="slider__imagen">
        </div>
        <div class="slider__section">
            <img src="img/padel2.jpg" alt="" class="slider__imagen">
        </div>
        <div class="slider__section">
            <img src="img/padel3.jpg" alt="" class="slider__imagen">
        </div>
        <div class="slider__section">
            <img src="img/padel4.jpg" alt="" class="slider__imagen">
        </div>
        <div class="slider__section">
            <img src="img/padel6.jpg" alt="" class="slider__imagen">
        </div>
        <div class="slider__section">
            <img src="img/padel1.jpg" alt="" class="slider__imagen">
        </div>
        
    </div>
    <div class="slider__btn slider__btn--derecha" id="btn-derecha">&#62;</div>
    <div class="slider__btn slider__btn--izquierda" id="btn-izquierda">&#60;</div>
    
        </div>
</div>
@include('partials.footer')
    

<script src="./js/slider.js"></script>
<script src="./js/menu.js"></script>
</body>
</html>