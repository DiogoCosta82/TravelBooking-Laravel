<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-3 mb-2 bg-secondary text-white">
    <header>
        <h1 class=" text-center">@yield('title', 'La police du Web')</h1>
        <nav>
            <ul class="nav">
                <button type="button" class="btn btn-dark"><a class="nav-link" href="{{ route('resa.index')}}">Home</a></button>
                <button type="button" class="btn btn-dark"><a class="nav-link" href="{{ route('resa.create')}}">Create</a></button>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="fixed-bottom bg-black text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; Atelier Laravel - Bocal Academy 2023
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>