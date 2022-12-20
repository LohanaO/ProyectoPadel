<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/17a430a055.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
            <li class="menu__item"><a href="{{url('galeria/mostrar')}}" class="menu__link">Galeria</a></li>
            <li class="menu__item"><a href="contacto.html" class="menu__link">Contacto</a></li>
                
        </ul>
    </nav>
    </header>
    <div class="contenedor fondo">
        <main class="contenedor-section">
            <div class="contenedor--imagen">
                <img src="img/torneo.png" alt="">
            </div>
            <div class="titulo--nosotros">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem a alias ut recusandae ipsa debitis praesentium illo velit et officia eaque nulla ea necessitatibus, iure aperiam est quod vel hic sequi. Quas veniam, tempora aspernatur eveniet earum odit dignissimos alias itaque vitae magni est ad aliquid magnam ullam ipsam quos!</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A incidunt nulla porro fuga asperiores inventore quibusdam eos molestias, architecto odit nobis modi, aperiam autem blanditiis culpa officia maxime enim facilis qui vel molestiae? Eaque voluptates unde ad optio excepturi aspernatur? Necessitatibus, totam? Deserunt consequuntur qui saepe quasi, quisquam ipsum eaque.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum praesentium amet ipsam numquam temporibus harum officia quaerat dolorum facilis recusandae. Molestiae, reprehenderit doloribus non accusamus doloremque nihil est tempora, ipsa omnis rem aut veritatis corporis sapiente consectetur alias delectus voluptas eveniet optio in praesentium error et. Illum exercitationem sit libero.</p>
            </div>

            
        </main>
       
        
    
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