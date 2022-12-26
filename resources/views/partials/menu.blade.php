<header>
    <span class="nav-bar" id="btnMenu"><i class="fa-solid fa-bars"></i> Menu</span>

<nav class="menu-nav">
    <ul class="Menu" id="menu">
        <li class="menu__item"><a href="{{url('/')}}"class="menu__link">Inicio</a></li>
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
        <li class="menu__item"><a href="{{url('contacto.mostrarC')}}" class="menu__link">Contacto</a></li>
            
    </ul>
</nav>
</header>