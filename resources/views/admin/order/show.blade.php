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
        <div class="col-sm-6 mt-4">
            <h1>Commande en ligne items#:{{$orderLine->id  }}</h1>
            <div class="card p-4">
                <table>
                    <tr>
                        <td>
                            <p>Commande _id: <b>{{ $orderLine->order_id }}</b></p>
                            <p>Parfum _id: <b>{{ $orderLine->parfum->nom}}</b></p>
                            <p>Quantite: <b>{{ $orderLine->qty }}</b></p>
                            <p>Prix Unitaire: <b>{{ $orderLine->prixunitaire }}</b></p>
                            <p>Total: <b>{{ $orderLine->total }}</b></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="col-sm-6 mt-4">
            <h1>Details Client</h1>
            <div class="card p-4">
                <table>
                    <tr>
                        <td>
                            <p>Nom & Prenom: <b>{{ $orderLine->order->fname }} {{ $orderLine->order->lname }}</b></p>
                            <p>Email: <b>{{ $orderLine->order->email }}</b></p>
                            <p>Tel: <b>{{ $orderLine->order->phone }}</b></p>
                            <p>Adresse: <b>{{ $orderLine->order->address }}, {{ $orderLine->order->rue }}</b></p>
                            <p>Message: <b>{{ $orderLine->order->message }}</b></p>
                            <p>Net_paye: <b>{{ $orderLine->order->netpaye }}</b></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
   
</body>
</html>
@endsection
