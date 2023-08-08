<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de tablas</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('nav.nav-bar')

    <div id="content" class="mx-auto" style="max-width:800px;">
        @livewire('table-list')
    </div>

</body>

</html>
