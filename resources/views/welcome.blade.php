<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Soft Delete</title>
</head>

<body>
    
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New Blog</a>
                <a href="{{ route('blogs.index') }}" class="btn btn-primary">Blog</a>
                <a href="{{ route('blogs.trashData') }}" class="btn btn-primary">Trashed Blog</a>
            </div>
            <div class="card-text w-75">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
