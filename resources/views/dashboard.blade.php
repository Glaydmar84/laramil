<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Fonts Pre Connect -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts Links (Roboto 400, 500 and 700 included) -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

    <!-- CSS Files Links -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Title -->
    <title>painel principal</title>
</head>

<body>
    <header class=" header">
        <p class="slogan">
            Cola aí ou tamo Junto</p>

        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('') }}
        </x-responsive-nav-link>
        </div>
        
        <x-responsive-nav-link :href="route('profile.edit')">
                    <button type="submit" class="config">{{ __('Atualizar dados') }}</button>
                </x-responsive-nav-link>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="namelog">{{ Auth::user()->name }}</div>
                <div class="emaillog">{{ Auth::user()->email }}</div>
                  <div class="mt-3 space-y-1">



                <!-- Authentication -->
            </div>
            </div>
    </header>



    <div class="fundo">
        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')">

            </x-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    <button type="" class="bnt">{{ __('sair') }}</button>
                </x-responsive-nav-link>
            </form>
        </div>



        <img src="./img/download (6).png" alt="mascote" class="mascote">

        <img src="./img/foto2.png" class="denv" alt="denv">
    </div>

    <div>
        <p class="pf">Clique em perfil <br> e escolha como deseja <br>
            participar</p>

        <p class="pr">Aqui você pode visualizar <br>
            os melhores colocados <br> em nosso ranking</p>

        <p class="pfo">Deixe aqui sua dúvida <br>ou observação <br>e pontue em nosso ranking</p>

    </div>
    <!--MODAL PERFIL-->
    <div>
        <label for="modalExemplo" class="abrirCadastro">
            <p>Perfil</p>
        </label>
        <input type="checkbox" class="checkboxModal" id="modalExemplo">
        <div class="modal">
            <label for="modalExemplo" class="close">X</label>
            <div class="conteudomodal">
                <p class="pfornec">
                    Digite seu nome no formulário abaixo
                    e aguarde ser solicitado,enquanto aguarda visite nosso fórum
                    responda dúvidas ou deixe orientações e pontue em nosso ranking.
                </p>
                <p class="psolicit">Selecione um nome para auxilia-lo
                    no formulário abaixo, se não houver um nome ,
                    aguarde alguém se cadastrar,você também pode
                    ir em nosso fórum e deixar sua dúvida podendendo
                    até pontuar em nosso ranking
                    se alguém curtir sua pergunta.
                </p>
                <script>
                function fornecedor() {
                    var listasolicty = window.open("/solicties/create", "tab");
                }
                </script>
                <button onclick=" solicitante()" class="solicit">solicitar assistencia</button>
                <button onclick=" fornecedor()" class="fornec">fornecer assistencia</button>


            </div>
        </div>
        <script>
        function solicitante() {
            var listasolicty = window.open("/solicties/solicty", "tab");
        }
        </script>
        <iframe name="tab" class="frame"></iframe>
        <!--MODAL RANKING-->
        <label for="modalExemplo1" class="abrirCadastro1">
            <p>Ranking</p>
        </label>
        <input type="checkbox" class="checkboxModal1" id="modalExemplo1">
        <div class="modal1">
            <label for="modalExemplo1" class="close1">X</label>
            <div class="conteudomodal1">
                <p class="prank"> Regras e pontuação geral <a href="ranking">Ranking</a></p>
                <table class="table">
                    <thead>
                        <tr class="table-danger">
                            <th scope="col">name</th>
                            <th scope="col">Pontuação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="table-primary">{{$user->name}}</td>
                            <td class="table-primary">0</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                </div>




        <!--MODAL  FORUM-->
        <label for="modalExemplo2" class="abrirCadastro2">
            <p>Fórum</p>
        </label>
        <input type="checkbox" class="checkboxModal2" id="modalExemplo2">
        <div class="modal2">
            <label for="modalExemplo2" class="close2">X</label>
            <div class="conteudomodal2">

                <p class="pm1">Digite o conteúdo desejado</p>
                <textarea class="inptmod2"></textarea>
                <button type="" class="btnenviar">enviar</button>
                <p class="pinpt2">clique aqui e visualize todo conteudo do forum </p>
                <button class="contmodal2"> <a href="/forum"> forum</a></button>
            </div>
        </div>
        <p class="cont">Conteúdos das últimas aulas</p>
        <a href="/conteudoaula" class="acess">Acessar</a>







        <script src="./scripts.js"></script>

</body>

</html>
