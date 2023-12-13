<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dracula">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       @vite('resources/css/app.css')
    </head>
    <body>
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        <li><a>Learn</a></li>
                        <li>
                            <a>Sangha</a>
                            <ul class="p-2">
                            <li><a>Bhikkhu</a></li>
                            <li><a>Bhikkhuni</a></li>
                            </ul>
                        </li>
                        <li><a>News</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl hover:rounded-none"><img src="{{asset('assets/img/logo.png')}}" class="h-12 w-auto" alt=""/></a>
            </div>
            <div class="navbar-end hidden lg:flex">
                <ul class="menu menu-horizontal px-4">
                    <li><a class="hover:rounded-none">Home</a></li>
                    <li><a class="hover:rounded-none">News</a></li>
                    <li><a class="hover:rounded-none">Learn</a></li>
                    <li>
                    <details>
                        <summary class="hover:rounded-none">Sangha</summary>
                        <ul class="p-2">
                            <li><a class="hover:rounded-none">Bhikkhu</a></li>
                            <li><a class="hover:rounded-none">Bhikkhuni</a></li>
                        </ul>
                    </details>
                    </li>
                </ul>
            </div>
        </div>
        <div class="carousel w-full h-fit">
            <div id="slide1" class="carousel-item relative w-full ">
                <img src="{{ asset('assets/img/bg-1.jpg')}}" alt="" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide4" class="btn btn-circle">❮</a>
                    <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide2" class="carousel-item relative w-full">
                <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" alt="" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" alt="" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide4" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide4" class="carousel-item relative w-full">
                <img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" alt="" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide3" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
            </div>
        </div>
    </body>
</html>
