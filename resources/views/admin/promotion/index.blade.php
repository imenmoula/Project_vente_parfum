@extends('master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste de Promotions :</h4>
                    </div>

                    
                    
                    
                  
                    <div class="text-right">
                        <div class="text-right">
                            <a href="{{ url('admin/promotion/create') }}" class="btn btn-primary mt-2">
                               
                             Ajout new Promotions
                                
                            </a>
                        </div>                    
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        
                                        <th><strong>ID#</strong></th>
                                        <th><strong>Nom_Promotion</strong></th>
                                        <th><strong>Description</strong></th>
                                        <th><strong>Parfum</strong></th>
                                        <th><strong>Famille des parfums</strong></th>
                                        <th><strong>Date debut </strong></th>
                                        <th><strong>Date fin</strong></th>
                                        <th><strong>Pourcentage</strong></th>
                                        <th><strong>Date Creation</strong></th>
                                        <th><strong>Date Modification</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($promotions as $p)
                                   
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $p->nom_promotio }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td>{{ $p->parfum->nom }}</td>
                                        <td>{{ $p->parfum->category->nom }}</td>
                                        <td>{{ $p->date_debut }}</td>
                                        <td>{{ $p->date_fin }}</td>
                                        <td>{{ $p->pourcentage }}</td>
                                        <td>{{ $p->created_at }}</td>
                                        <td>{{ $p->updated_at }}</td>
                                        

                                        <td></td>
                                        <td>
                                             <div class="d-flex">
                                                <a href="{{route('admin.promotion.edit',$p->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                
                                                 <form method="POST" action="{{ route('admin.promotion.destroy', $p->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                
                                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Tu veux supprimer cette Promotion: {{ $p->nom_promotio }} ?');" data-toggle="tooltip">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form> 
                                                
                                                <a href={{route('admin.promotion.show',$p->id)}} class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-eye"></i></a>

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
