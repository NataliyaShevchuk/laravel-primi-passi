
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>

    <link rel="stylesheet" href="/css/homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


</head>

<body>
    <main class="container mt-14">
        <div class="row justify-content-center text-center align-content-center">
            <div class="col-6">
                <div>
                    <h1 class="text-white">Hello World!</h1>
                    <br>
                    <h3 class="text-white mb-5">In che lingua lo vuoi tradurre?</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="a-container">
                            <a class="my-tag-a" href="{{route('italian')}}">Italiano</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="a-container">
                            <a class="my-tag-a" href="{{route('spain')}}">Spagnolo</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="a-container">
                            <a class="my-tag-a" href="{{route('french')}}">Francese</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="a-container">
                            <a class="my-tag-a" href="{{route('german')}}">Tedesco</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>
</html>