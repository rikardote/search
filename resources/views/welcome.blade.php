<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LiveWire tutorial</title>
    <link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style type="text/css">
        .table-hover tbody tr:hover td {
            background-color: Blue;
            color: White;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Livewire Music</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Musics</a>
                    </li>


                </ul>
                @livewire('search-bar')
            </div>
        </div>
    </nav>

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Search bar</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Livewire 3 tutorial</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
