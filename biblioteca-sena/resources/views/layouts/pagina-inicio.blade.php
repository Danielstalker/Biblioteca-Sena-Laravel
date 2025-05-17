<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset(path:'./assets/css/pagina_inicio.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2WaikSF32jvPPvpFvG35YmVEOcBctTW5I5x1GcEDNmBPxwavgL5G7kTpIsS/bjvkyDLxS3FdwyZtQx0LP5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>BIBLIOTECA SENA</header>
    <div class="navbar">
        <div class="menu">
            <a href="#">Home</a>
            <div class="dropdown" id="categoriesDropdown">
                <a href="#" class="dropdown-toggle">Categorías <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <a href="#">Investigación Científica</a>
                    <a href="#">Informática</a>
                    <a href="#">Lenguaje de Programación</a>
                    <a href="#">Seguridad en el Trabajo</a>
                    <a href="#">Agricultura</a>
                    <a href="#">Agropecuario</a>
                    <a href="#">Atención al Cliente</a>
                    <a href="#">Mercadeo</a>
                    
                </div>

            </div>
            <a href="../../Registro_sobre_los_libros/html/registro.html" class="admin-only">Libros Reservados</a>
            <a href="../../registro-aprendiz/html/aprendiz.html" class="admin-only active">Reservas Aprendices</a>
        </div>
</div>
 

     @yield('contenido')
<div class="search-bar-wrapper">
        <livewire:product-search />
    </div>
    
    </div>
    <script src="{{asset(path:'./assets/js/pagina_inicio.js')}}"></script>
    <script src="{{asset(path:'./assets/js/dropdown.js')}}"></script>
    </body>
</html>