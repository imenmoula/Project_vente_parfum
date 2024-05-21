 @extends('master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste de des Commande:</h4>
                    </div>

                     <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-responsive-md">
                                <thead>

                                    <tr>
                                        <th><strong>ID#</strong></th>
                                        <th><strong> Details Client</strong></th>
                                        <th><strong>Message</strong></th>
                                        <th><strong>Net_paye</strong></th>
                                        <th><strong>Date</strong></th>

                                        <th><strong>Delivred</strong></th>
                                        <th><strong>Statut</strong></th>
                                        <th><strong>payed</strong></th>
                                        <th><strong>Action</strong></th>
                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td><strong>{{ $loop->index+1 }}</strong></td>
                                            <td>
                                          <p> Nom & Prenom: {{ $order->fname }} {{ $order->lname }}<br/>
                                            
                                            Email:{{ $order->email }}<br/>
                                            Tel:{{ $order->phone }}<br/>
                                            Adresse:{{ $order->address }},{{ $order->rue }}</p>
                                            </td>

                                            <td><strong>{{ $order->message }}</strong></td>
                                            <td><strong>{{ $order->netpaye }}</strong></td>
                                            

                                        
                                            <td><strong>{{ $order->date }}</strong></td>

                                            @if($order->delivred == 1)
                                            <td style="color: green"><strong>livré</strong></td>
                                            @elseif($order->delivred == 0)
                                            <td style="color: red"><strong> Non livre</strong></td>
                                            @endif


                                            @if($order->status == 0)
                                            <td style="color: red"><strong>En cours</strong></td>

                                            @elseif($order->status == 1)
                                            
                                            <td style="color: green"><strong>Pret</strong></td>
                                            @endif
                                            
                                            @if($order->payed == 0)
                                            <td style="color: red"><strong> Non Paye</strong></td>
                                            @else
                                            <td style="color: green"><strong>Paye</strong></td>
                                            @endif


                                           
                                            <td>
                                                <div class="d-flex">
                                                     <a href={{ route('admin.order.show', $order->id) }} class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-eye"></i></a> 
                                                </div>

                                            </td>
                                        </tr>
                             @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


@endsection 


