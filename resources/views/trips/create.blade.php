<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="p-3 mb-2 bg-secondary text-white">
    <header>
        <h1 class=" text-center">@yield('title', 'Enregistrer votre Réservation')</h1>
    </header>

    <div class="text-center mt-5 mx-auto" style="width: 100rem;">
        <form class="container-sm p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3" action="{{route('resa.store')}}" method="post">

            @if($command =='create')
            <form action="{{route ('resa.store')}}" method="post">
                @csrf
                @endif
                @if($command =='update')
                <form action="{{route ('resa.update',$reservation['id'])}}" method="post">
                    @csrf
                    <!-- @method('put') -->
                    @endif
                    @if($command =='show')
                    <form>
                        @csrf
                        @endif

                        @csrf
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-default">Votre Nom</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" @if( $command=='create' ) value="{{ old('name') }}" @endif @if( $command=='update' ) value="{{ old('name', $reservation['name']) }}" @endif @if( $command=='show' ) value="{{$reservation['name'] }}" readonly disabled @endif>
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-lg">Votre Age</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="age" @if( $command=='create' ) value="{{ old('age') }}" @endif @if( $command=='update' ) value="{{ old('age', $reservation['age']) }}" @endif @if( $command=='show' ) value="{{ $reservation['age'] }}" readonly disabled @endif>>
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-default">Pays de Destination</span>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="pays">
                                <option value="">Choisissez la destination</option>
                                <option value="France">France</option>
                                <option value="Espagne">Espagne</option>
                                <option value="portugal">Portugal</option>
                                <option value="italie">Italie</option>
                                <option value="roumanie">Roumanie</option>
                                <option value="tunisie">Tunisie</option>
                            </select>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="submit" class="btn btn-primary"><a class="nav-link" href="{{ route('resa.index')}}">Supprimer</a></button>
                    </form>
    </div>
    <div class="text-left panel-primary">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
        @endif
    </div>

    <footer class="fixed-bottom bg-black text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; Atelier Laravel - Bocal Academy 2023
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>