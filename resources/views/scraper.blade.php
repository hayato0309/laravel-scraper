<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Laravel scraper</title>
</head>
<body>
    <div class="col-md-6 offset-md-3 mt-5 wrapper">
        @foreach($data as $key => $value)
            <div class="card text-center mb-3">
                <h5 class="card-header">{{ $key }}</h5>
                <div class="card-body">
                    <p class="card-text">{{ $value }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>