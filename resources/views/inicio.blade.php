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
    <header>
        <span class="nav-bar" id="btnMenu"><i class="fa-solid fa-bars"></i> Menu</span>
    
    <nav class="menu-nav">
        <ul class="Menu" id="menu">
            <li class="menu__item"><a href="{{url('/')}}" class="menu__link">Inicio</a></li>
            <li class="menu__item"><a href="{{url('nosotros')}}" class="menu__link">Nosotros</a></li>
            <li class="menu__item container-submenu ">
                <a href="#" class="menu__link submenu-btn ">Torneos
                    <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="submenu">
                    
                    <li class="menu__item"><a href="inscripcion.html" class="menu__link">Inscripcion</a>
                    </li>
                    <li class="menu__item"><a href="fixture.html" class="menu__link">Fixture</a>
                    </li>
                    <li class="menu__item"><a href="ranking.html" class="menu__link">Ranking</a>
                    </li>
                    
                </ul>
            </li>
            <li class="menu__item"><a href="{{url('galeria')}}" class="menu__link">Galeria</a></li>
            <li class="menu__item"><a href="{{url('contacto/mostrarC')}}" class="menu__link">Contacto</a></li>
                
        </ul>
    </nav>
    </header>
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

    
</footer>
    <div class=" footer-content">
        <div class="contact-us">
            <h2 class="brand"> Todos los derechos reservados Lohana Orellano</h2>
        
        </div>
        <div class="social-media">
            <a href="./" class="social-media-icon">
                <i class='bx bxl-facebook'></i>
            </a>
            <a href="./" class="social-media-icon">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="./" class="social-media-icon">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>

</footer>
<script src="./js/slider.js"></script>
<script src="./js/menu.js"></script>
</body>
</html>