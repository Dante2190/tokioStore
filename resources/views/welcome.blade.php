<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div id="menu">
        <div id="menu-left">
            <i class="fas fa-bars" id="hamburger"></i>
            <div id="dropdown-menu">
                
               <div id="enlaces">
                        <a href="#">Opción 1</a>
                        <a href="#">Opción 2</a>
                        <a href="#">Opción 3</a>
                    </div>

                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div id="iconos-menu-lateral">
                    
                </div>
            </div>
            <input type="text" id="search" placeholder="Buscar...">
        </div>
      
        <div id="menu-center">
        <div id="logo">TOKIO</div>
        </div>
        <div id="menu-right">
        <i class="fas fa-user" id="user-icon"> </i>
        <i class="fas fa-heart" id="like-icon"></i>
        <i class="fas fa-shopping-cart" id="cart-icon"></i>
    </div>
       
    </div>
    {{--  <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif


    </div> --}}
    <div class="carousel">
        <div class="carousel_inner">
            <div class="carousel_item carousel_item__active">
                <img src="img/f4.png" alt="Imagen 1 " class="carousel_img">

                <div class="carousel_caption">
                    <h1 class="carousel_title">Change It As You See Fit</h1>
                    <p class="carousel_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id
                        cupiditate
                        corporis laudantium quae velit quam.</p>
                </div>
            </div>
            <div class="carousel_item">
                <img src="img/f3.jpg" alt="Imagen 1 " class="carousel_img">
            </div>
            <div class="carousel_item">
                <img src="img/f4.png" alt="Imagen 1 " class="carousel_img">
            </div>
        </div>

        <div class="carousel_indicator">
            <button class="carousel_dot carousel_dot__active"></button>
            <button class="carousel_dot"></button>
            <button class="carousel_dot"></button>
        </div>

        <div class="carousel_control">
            <button class="carousel_button carousel_button__prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel_button carousel_button__next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div class="w-4/5 p-3">
            <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 m-3 mt-3">
                <div class="col-span-2 px-3 py-3">
                    <p>Más populares</p>
                </div>
                <div class="col-span-1 sm:text-end md:text-end px-3 py-3">
                    <p>Filtros</p>
                </div>
                <div class="col-span-1 text-start sm:text-end md:text-end px-3 py-3">
                    <p>ordenar</p>
                </div>
            </div>
        </div>
    </div>


    <div class="card-container">
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 1">
            <div class="card-content">

                <p class="sm:text-sm">Descripción del producto 1.</p>
                <p class="price">$49.99</p>
            </div>
        </div>
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 2">
            <div class="card-content">

                <p>Descripción del producto 2.</p>
                <p class="price">$29.99</p>
            </div>
        </div>
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 1">
            <div class="card-content">

                <p>Descripción del producto 1.</p>
                <p class="price">$49.99</p>
            </div>
        </div>
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 2">
            <div class="card-content">

                <p>Descripción del producto 2.</p>
                <p class="price">$29.99</p>
            </div>
        </div>
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 1">
            <div class="card-content">

                <p>Descripción del producto 1.</p>
                <p class="price">$49.99</p>
            </div>
        </div>
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 2">
            <div class="card-content">

                <p>Descripción del producto 2.</p>
                <p class="price">$29.99</p>
            </div>
        </div>
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 1">
            <div class="card-content">

                <p>Descripción del producto 1.</p>
                <p class="price">$49.99</p>
            </div>
        </div>
        <div class="card">
            <div class="like-button">
                <div class="like-icon"><i class="fas fa-heart"></i></div>
            </div>
            <img src="img/r2.webp" alt="Imagen 2">
            <div class="card-content">

                <p>Descripción del producto 2.</p>
                <p class="price">$29.99</p>
            </div>
        </div>
        <!-- Agrega más tarjetas aquí si es necesario -->
    </div>

    <div class="flex items-center justify-center h-72 mt-12">
        <div class="w-4/5 p-3">
            <div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-4 m-3  mt-3 divide-x-2 divide-gray-400">
                <div class="px-3 py-3 col-span-2 ">
                    <p class="text-sm">Compañía</p>
                    <p class="text-2xl">TOKIO</p>
                    <br>
                    <p class="text-xs"> TOKYO es una tienda la cuál se creo en el año 2022, siendo una tienda
                        ¨Salvadoreña¨ enfocada en la venta de prendas de Marcas Altamente
                        reconocidas, con el objetivo de ofrecer a sus clientes una experiencia
                        de compra exclusiva, y totalmente en linea.</p>
                </div>
                <div class="px-9 pt-12 pl-5 sm:pl-5 md:pl-20 col-span-2">
                    <p class="text-sm">¿Como podemos ayudarte?</p>
                    <p class="text-lg">Teléfono: (503) 6973-2117</p>
                    <p class="text-lg">Correo: tokyo.sv983@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-32">
        <div class="w-4/5 p-3">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-3 mt-3">
                <div class="col-span-1 px-3 py-3">
                    <p>© 2023 TOKYO. All rights reserved.</p>
                </div>
                <div class="col-span-1 text-start px-3 py-3 md:text-center">
                    <p>Politica y Privacidad</p>
                </div>
                <div class="col-span-1 text-start sm:text-end md:text-end px-3 py-3">
                    <p>Preguntas Frecuentes</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const likeButtons = document.querySelectorAll(".like-button");

            likeButtons.forEach(button => {
                const likeIcon = button.querySelector(".like-icon");

                button.addEventListener("click", function() {
                    likeIcon.classList.toggle("liked");
                });
            });
        });
    </script>

    <script>
        const hamburgerIcon = document.getElementById('hamburger');
        const dropdownMenu = document.getElementById('dropdown-menu');

        hamburgerIcon.addEventListener('mouseover', () => {
            dropdownMenu.style.display = 'block';
        });

        dropdownMenu.addEventListener('mouseleave', () => {
            dropdownMenu.style.display = 'none';
        });
        
    </script>



    <script>
        let onSlide = false;

        window.addEventListener("load", () => {
            autoSlide();

            const dots = document.querySelectorAll(".carousel_dot");
            for (let i = 0; i < dots.length; i++) {
                dots[i].addEventListener("click", () => slide(i));
            }

            const buttonPrev = document.querySelector(".carousel_button__prev");
            const buttonNext = document.querySelector(".carousel_button__next");
            buttonPrev.addEventListener("click", () => slide(getItemActiveIndex() - 1));
            buttonNext.addEventListener("click", () => slide(getItemActiveIndex() + 1));
        })

        function autoSlide() {
            setInterval(() => {
                slide(getItemActiveIndex() + 1);
            }, 3000); // slide speed = 3s
        }

        function slide(toIndex) {
            if (onSlide)
                return;
            onSlide = true;

            const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
            const itemActive = document.querySelector(".carousel_item__active");
            const itemActiveIndex = itemsArray.indexOf(itemActive);
            let newItemActive = null;

            if (toIndex > itemActiveIndex) {
                // check if toIndex exceeds the number of carousel items
                if (toIndex >= itemsArray.length) {
                    toIndex = 0;
                }

                newItemActive = itemsArray[toIndex];

                // start transition
                newItemActive.classList.add("carousel_item__pos_next");
                setTimeout(() => {
                    newItemActive.classList.add("carousel_item__next");
                    itemActive.classList.add("carousel_item__next");
                }, 20);
            } else {
                // check if toIndex exceeds the number of carousel items
                if (toIndex < 0) {
                    toIndex = itemsArray.length - 1;
                }

                newItemActive = itemsArray[toIndex];

                // start transition
                newItemActive.classList.add("carousel_item__pos_prev");
                setTimeout(() => {
                    newItemActive.classList.add("carousel_item__prev");
                    itemActive.classList.add("carousel_item__prev");
                }, 20);
            }

            // remove all transition class and switch active class
            newItemActive.addEventListener("transitionend", () => {
                itemActive.className = "carousel_item";
                newItemActive.className = "carousel_item carousel_item__active";
                onSlide = false;
            }, {
                once: true
            });

            slideIndicator(toIndex);
        }

        function getItemActiveIndex() {
            const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
            const itemActive = document.querySelector(".carousel_item__active");
            const itemActiveIndex = itemsArray.indexOf(itemActive);
            return itemActiveIndex;
        }

        function slideIndicator(toIndex) {
            const dots = document.querySelectorAll(".carousel_dot");
            const dotActive = document.querySelector(".carousel_dot__active");
            const newDotActive = dots[toIndex];

            dotActive.classList.remove("carousel_dot__active");
            newDotActive.classList.add("carousel_dot__active");
        }
    </script>

    <script>
    let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        const menuRight = document.getElementById('menu-right');
        const iconosMenuLateral = document.getElementById('iconos-menu-lateral');

        // Verifica si los íconos están ocultos
        if (window.getComputedStyle(menuRight).display === 'none') {
            // Si los íconos están ocultos y el menú lateral no tiene íconos, los mueve al menú lateral
            if (iconosMenuLateral.children.length === 0) {
                const iconos = menuRight.children;
                for (let i = 0; i < iconos.length; i++) {
                    iconosMenuLateral.appendChild(iconos[i].cloneNode(true));
                }
            }
        } else {
            // Si los íconos no están ocultos, los elimina del menú lateral
            while (iconosMenuLateral.firstChild) {
                iconosMenuLateral.removeChild(iconosMenuLateral.firstChild);
            }
        }
    }, 250); // Retrasa la ejecución del código 250ms después de que se complete el redimensionamiento
});
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
