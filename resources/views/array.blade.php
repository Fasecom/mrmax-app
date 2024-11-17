<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <img src={{ $array[path][0] }}  class="card-img-top" alt="Товар">
        <div class="card-body">
            <h5 class="card-title"> {{ $array[title][0] }} </h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> {{ $array[price][0] }} </li>
        </ul>
    </div>
</body>
</html>