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
                    <h1>Catgories detailles</h1>
                    <div class="card p-4">
                        <p>Nom: <b>{{ $categories->nom }}</b></p>
                        <p>Description: <b>{{ $categories->description }}</b></p>
                       
                        <p>Date creation : <b>{{ $categories->date_creation }}</b></p>
                        <p>Date modification : <b>{{ $categories->date_update }}</b></p>
                        <p>Status: <b>{{ $categories->status }}</b></p>
                        <p>Sexe: <b>{{ $categories->sexe }}</b></p>
                        @if($categories)
                            <img src="{{ asset('/uploads/parfum/' . $categories->image) }}" class="rounded" width="100%" />
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