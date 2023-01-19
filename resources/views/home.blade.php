

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">



</head>
<body>
    
    <h1> Hello world!</h1>
    <ul>
        @foreach($hello as $element)
            
        <li>
        {{ $element}}
        </li>
        @endforeach
    </ul>


</body>
</html>
