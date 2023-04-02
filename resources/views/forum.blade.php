                <!-- Responsive Settings Options -->
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
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

                    <!-- CSS Files Links -->
                    <link rel="stylesheet" href="./styles.css">

                    <!-- Title -->
                    <title>Fórum</title>
<style>
*{
    margin: 0;
    padding: 0;
}
.container > h2{
    background-color: #ccc;
    padding: 10px 0;

}
.thread{
    padding: 10px;
    border: 1px dashed #ccc;
}
.respostas{
    margin: 10px;
}
.respostas{
    font-size: 18px;
    color: #333;
}
textarea{
    width: 100%;
    height: 40px;
    border: 1px solid #ccc;
}


</style>
                </head>

                <body>
                    <div class="container">
                        <h2>Fórum </h2>
                        <div class="thread">
                            <h2>..COLA AÌ OU TAMO JUNTO... <button class="mostrar-respostas">mostrar respostas</button></h2>
                            <div style="display:none;" class="respostas">
                                <p>apareça</p>
                                <hr>
                                <p>apareça</p>
                                <hr>
                                <p>apareça</p>
                                <hr>
                                <form>
                                    <textarea></textarea>
                                    <input type="submit" name="acao" value="Enviar">
                                </form>
                            </div>
                        </div> <!-- thread -->
                    </div>
                    <script>
let buttonsResposta = document.querySelectorAll('.thread button');

for(let i = 0; i < buttonResposta.length;ni++ ){
    buttonsResposta[i].addEventListner('click',()=>{
        respostas=document.querySelectorAll('respostas');

respostas[i].style.display='block';
    })
}
                    </script>

                    <script src="./scripts.js"></script>
                </body>

                </html>
