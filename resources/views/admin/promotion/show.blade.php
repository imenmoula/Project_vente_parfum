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
                        <p>Nom Promotion: <b>{{ $promotion->nom_promotio }}</b></p>
                        <p>Description: <b>{{ $promotion->description }}</b></p>
                        <p>Nom parfum: <b>{{ $promotion->parfum->nom }}</b></p>
                        <p>famille parfum: <b>{{ $promotion->parfum->category->nom }}</b></p>
                        <p>date debut: <b>{{ $promotion->date_debut }}</b></p>
                        <p>date fin: <b>{{ $promotion->date_fin }}</b></p>
                        <p>Pourcentage: <b>{{ $promotion->pourcentage }}</b></p>
                        <p>Prix ancienne: <b>{{ $promotion->parfum->prix }}</b></p>
                        <p>prix nouveau: <b>{{ $promotion->parfum->prix / $promotion->pourcentage * 100 }}</b></p>

                        <p>Date creation : <b>{{ $promotion->created_at }}</b></p>
                        <p>Date modification : <b>{{ $promotion->updated_at }}</b></p>

                        

                    </div>
                </div>
            </div>
        </div>
   
    
    
</body>
</html>
@endsection