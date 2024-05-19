@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   

        <div class="container">
            
            <div class="row justify-content-center">
               
                <div class="col-sm-8 mt-4">
                    <h1>Parfum detailles</h1>
                    <div class="card p-4">
                        <p>Nom: <b>{{ $parfum->nom }}</b></p>
                        <p>Description: <b>{{ $parfum->description }}</b></p>
                        <p>Sexe: <b>{{ $parfum->genre }}</b></p>
                        <p>Marque: <b>{{ $parfum->marque }}</b></p>
                        <p>Volume: <b>{{ $parfum->volume }}</b></p>
                        <p>Quantite_disponible: <b>{{ $parfum->qte_stock }}</b></p>
                        <p>Prix: <b>{{ $parfum->prix }}</b></p>
                        <p>famille catégorie: <b>{{ $parfum->category->nom }}</b></p>
                        <p>Date creation : <b>{{ $parfum->created_at }}</b></p>
                        <p>Date modification : <b>{{ $parfum->updated_at }}</b></p>

                        @if($parfum)
                            <img src="{{ asset('/uploads/parfum/' . $parfum->image) }}" class="rounded" width="100%" />
                        @else
                            <p>Category not found</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
   
    
    
</body>
</html>
@endsection