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
                                        <th><strong>role</strong></th>
                                        <th><strong>Adresse</strong></th>
                                        <th><strong>Telephone</strong></th>
                                        <th><strong>Actions</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                        <tr>
                                            <td><strong>{{$u->index+1}}</strong></td>
                                            <td><strong>{{$u->name}}</strong></td>
                                            <td><strong>{{$u->email}}</strong></td>
                                            <td><strong>{{$u->role}}</strong></td>
                                            <td>
                                            
                                        
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
