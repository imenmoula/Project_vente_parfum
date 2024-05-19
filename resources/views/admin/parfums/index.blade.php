@extends('master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste de Parfums :</h4>
                    </div>

                    
                    
                    
                  
                    <div class="text-right">
                        <div class="text-right">
                            <a href="{{ url('admin/parfums/create') }}" class="btn btn-primary mt-2">
                                Ajout new Parfum
                                
                            </a>
                        </div>                    
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th><strong>ID#</strong></th>
                                        <th><strong>Nom</strong></th>
                                        <th><strong>Marque</strong></th>
                                        <th><strong>Description</strong></th>
                                        <th><strong>Image</strong></th>
                                        <th><strong>Volume</strong></th>
                                        <th><strong>Genre</strong></th>
                                        <th><strong>famille de parfum</strong></th>
                                        <th><strong>Quantite_disponible</strong></th>
                                        <th><strong>Date Creation</strong></th>
                                        <th><strong>Date Modification</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($parfum as $p)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $p->nom }}</td>
                                        <td>{{ $p->marque }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img src="{{ asset('/uploads/parfum/' . $p->image) }}" class="rounded-lg mr-2" width="50" height="50" />
                                            
                                        </div>
                                    </td>
                                        <td>{{ $p->volume }}</td>
                                        <td>{{ $p->genre }}</td>
                                        <td>{{ $p->category->nom }}</td>
                                        <td>{{ $p->qte_stock}}</td>
                                        <td>{{ $p->created_at }}</td>
                                        <td>{{ $p->updated_at }}</td>

                                        <td></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('admin.parfums.edit',$p->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                
                                                 <form method="POST" action="{{ route('admin.parfums.destroy', $p->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                
                                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Tu veux supprimer cette parfum: {{ $p->nom }} ?');" data-toggle="tooltip">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form> 
                                                
                                                <a href={{route('admin.parfums.show',$p->id)}} class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-eye"></i></a>

                                            </div>
                                            
                                        </td>

                                        
                                            
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
