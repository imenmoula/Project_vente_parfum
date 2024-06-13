@extends('master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste de client :</h4>
                    </div>

                    
                    
                    
                  
                    <div class="text-right">
                        <div class="text-right">
                           
                        </div>                    
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                      
                                        <th><strong>ID#</strong></th>
                                        <th><strong>Nom & Prenom</strong></th>
                                        <th><strong>Email</strong></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td><strong>{{$d->index+1}}</strong></td>
                                            <td><strong>{{$d->name}}</strong></td>
                                            <td><strong>{{$d->email}}</strong></td>
                                            
                                        
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
