<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plantilla Café</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/hover.css')}}">
    
    @yield('styles')
</head>

<body>

    <header class="animated fadeIn overflow-hidden header">
        <div class="row align-items-center col-12 col-xl-11 mx-auto">
            <div class="col-auto text-center">
                <a class="" href="{{url('home')}}">
                    <img class="img-fluid img-logo" src="{{asset('img/inicio/logo-2.jpg')}}" alt="">
                </a>
            </div>
            <div class="col">
                <ul class="nav nav-fill justify-content-end nav-menu">
                    {{-- <a class="borde-menu-header">|</a> --}}

                    <a class="nav-link {{ (request()->is('home')) ? 'nav-link-activo' : '' }}" href="{{url('home')}}">Inicio</a>
                    
                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Nosotros</a>
                    
                    <a class="nav-link {{ (request()->is('catalogo') || Request::route()->getName() == 'client.productDetail')  ? 'nav-link-activo' :'' }}" href="{{url('catalogo')}}">Catálogo</a>
                    

                    {{-- <a class="borde-menu-header">|</a> --}}
                </ul>
                <button class="btn btn-light btn-abrir-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>          
    </header>

    <div class="offcanvas offcanvas-start header-offcanvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Menú</h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto nav-main">
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                
                            text-center 
                            offcanvas-enlace                                   
                            {{ (request()->is('home')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('home')}}"
                        >Inicio</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                    
                            text-center
                            offcanvas-enlace
                            {{ (request()->is('nosotros')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('nosotros')}}"
                        >Nosotros</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                    
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('catalogo') || Request::route()->getName() == 'client.productDetail') ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('catalogo')}}"
                        >Catálogo</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('procesos')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('procesos')}}"
                        >Procesos</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('galeria')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('galeria')}}"
                        >Galería</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('contactenos')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('contactenos')}}"
                        >Contacto</a
                    >
                </li>
                <div class="off-canvas-contenedor-rs d-flex justify-content-center mt-4">
                    {{-- <a href="#" class="nav-icono-rp me-3">
                        <img src="{{asset('img/inicio/facebook.svg')}}" alt="">
                    </a>
                    <a href="#" class="nav-icono-rp">
                        <img src="{{asset('img/inicio/instagram.svg')}}" alt="">
                    </a> --}}
                </div>
            </ul>
        </div>
    </div>

    <main class="overflow-x-hidden pt-2 main-web">
        @yield('content')
    </main>

    <footer>
        <div class="col-12 col-md-10 mx-auto">
            <p>
                <span>Telf: (511) 758 9635</span> <br class="d-md-none">
                <span>Calle Los Laureles 698 - Los Olivos - Lima</span> <br class="d-md-none">
                <span>atención@miempresa.com</span> <br class="d-md-none">
            </p>
            <p>
                <a class="hvr-grow-shadow" target="_blank" href="https://agenciahdc.com"><small>Diseñado por Agencia HDC</small></a>
            </p>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.scrollflow.min.js')}}"></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
