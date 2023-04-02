
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- CSS Files Links -->
    <link rel="stylesheet" href="./styles.css">

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
        <h3>Ranking</h3>

        </header>

        <table class="table  table-bordered   h-50 mx-auto" >
            <thead class="table-primary">
                <tr>
                    <th scope="col">name</th>
                </tr>
            </thead>
              <tbody>
                    @foreach($users as $user)
                 <tr>
                    <th>{{$user->name}}</th>
                    @csrf
                </tr>
                @endforeach
                </tbody>
        </table>


</body>
    </html>
