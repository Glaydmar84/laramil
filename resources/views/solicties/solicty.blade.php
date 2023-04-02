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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Title -->
    <title>Simple Page</title>
    <head>
    <style>
    h3{
        text-align: center;
        color: blueviolet;
    }
    </style>
</head>

<body>
    <header>
        <h3>alunos disponíveis</h3>

        </header>

        <table class="table  table-bordered   h-50 mx-auto" >
            <thead class="table-primary">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
              <tbody>
                    @foreach($assistentes as $assistente)
                 <tr>
                    <th>{{$assistente->id}}</th>
                    <th>{{$assistente->nome}}</th>
                    <th>{{$assistente->email}}</th>
                    <th> <form action="{{route('solicty-destroy',['id'=>$assistente->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">deletar</button>
                    </form>
                </th>
                </tr>
                @endforeach
                </tbody>
        </table>

    <noscript>Your browser don't support JavaScript!</noscript>
    <script src="./scripts.js"></script>


</body>
    </html>


