@extends('Master_page')

@section('title','Produits')

@section('content')

<h2>Catégorie : {{ $categorie }}</h2>

<table border="1" width="60%">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Image</th>
    </tr>

    @foreach ($products as $item)
    <tr>
        <td>{{ $item['nom'] }}</td>
        <td>{{ $item['prix'] }} DH</td>
        <td>
            <img src="{{ asset('imgs/'.$item['image']) }}" width="100">
        </td>
    </tr>
    @endforeach
</table>

@endsection
