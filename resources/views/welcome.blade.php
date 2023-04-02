<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>cadastro</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css">


    </head>
    <body class="bodylog">
    <main class="main">


    <div  class="e101_11">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-black dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="">
                    @auth
                
                    @else


                        @if (Route::has('register'))

                        @endif
                    @endauth
                </div>
            @endif
        </div>
              <span  class="e101_12">Você não precisa desenvolver sozinho
e você pode aprender ensinando.
</span>
<span  class="e101_13">Cola aí ou <br>&nbsp &nbsp &nbsp  tamo junto &nbsp </span>
<p class="textwel1">Absorva conteúdo <br>&nbsp &nbsp &nbsp Compartilhe conhecimento</p>
<span  class="e101_14">Participe dessa experiência e
     acelere seu aprendizado</span>
     <div class="img1">
        <img src="./img/rectangle_5.png" alt="foto3" class="foto3">
        </div>


     <a href="{{ route('register') }}" class="regist">Cadastrar</a>
     <a href="{{ url('/dashboard') }}" class="login">login</a>

        </div>


          </main>

          </body>
          </html>






