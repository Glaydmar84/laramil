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
  <link rel="stylesheet" href="./styles.css">

  <!-- Title -->
  <title>Simple Page</title>
</head>
<body>
  <header>
    <h2>HTML5 Template</h2>
  </header>
  <style>
.box {
            position: absolute;
            background-color:  white;
            padding: 4px;
            border-radius: 15px;
            width: 99%;
            color: black;
            height: 94%;
            margin-top: -64px;
            margin-left: -10px;
        }
            fieldset {
            border: 3px solid black;
        }

        legend {
            border: 1px solid black;
            padding: 16px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            color: black;
            height: 0px;
        font-size: 15px;

        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: black;
            border-bottom: 1px solid black;
            outline: black;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: black;
        }

        #submit {
            background-color:  #06aaf7;
            width: 100%;
            border: none;
            padding: 5px;
            color: black;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>


  </style>


    <div class="box">
        <form action="{{route('solicty-store')}}" method="POST">
        @csrf
            <fieldset>
                <legend><b>Fornecer assistência</b></legend>

                <div class="inputBox">
                    <input type="text"  name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="text" class="labelInput">digite seu email</label>
                </div>

                <p>Para participar como fornecedor digite seu nome e email corretamente</p>
                <input type="submit" name="submit" id="submit"></input>
            </fieldset>
        </form>

    </div>
</body>

</html>



  <noscript>Your browser don't support JavaScript!</noscript>
  <script src="./scripts.js"></script>
</body>
</html>
