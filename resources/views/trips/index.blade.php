@extends('layouts.app')
@section('title', 'Liste des réservations')
@section('content')

<section>
    <table Class="table table-hover">
        <thead class="table-dark">
            <tr class="table-secondary">
                <td>Nom</td>
                <td>Age</td>
                <td>Pays</td>
                <td></td>
            </tr>
            @foreach ($posts as $post)
            <tr class="table-secondary">
                <td class="align-top">{{$posts ['title']}}</td>
                <td class="align-top">{{$posts ['image']}}</td>
                <td class="align-top">{{$posts ['content']}}</td>
                <td class="align-top">
                    <form action="{{route ('resa.show', $reservation['id']) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-primary">Voir</button>
                    </form>
                    <form action="{{route ('resa.edit', $reservation['id']) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                    <form action="{{route ('resa.destroy', $reservation['id']) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
</section>

@endsection