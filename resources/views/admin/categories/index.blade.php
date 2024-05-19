@extends('master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste de Categories :</h4>
                    </div>

                    
                    
                    
                  
                    <div class="text-right">
                        <div class="text-right">
                            <a href="{{ url('admin/categories/create') }}" class="btn btn-primary mt-2">
                                Ajout new categories
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
                                        <th><strong>Description</strong></th>
                                        <th><strong>Image</strong></th>
                                        <th><strong>Date Creation</strong></th>
                                        <th><strong>Date Modification</strong></th>
                                        <th><strong>Sexe</strong></strong></th>
                                        <th><strong>Statut</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->nom }}</td>
                                        
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('/uploads/parfum/' . $category->image) }}" class="rounded-lg mr-2" width="50" height="50" />
                                                
                                            </div>
                                        </td>
                                        <td>{{ $category->date_creation }}</td>
                                        <td>{{ $category->date_update }}</td>
                                        <td>{{ $category->status }}</td>
                                        <td>{{ $category->sexe }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('admin.categories.edit',$category->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                
                                                 <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                
                                                    <button type='submit' class="btn btn-danger shadow btn-xs sharp"  onclick="return confirm('Tu veux supprimer cette categoires{{ $category->nom }}')" data-toggle="tooltip">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                                
                                                <a href={{route('admin.categories.show',$category->id)}} class="btn btn-primary shadow btn-xs sharp mr-2"><i class="fa fa-eye"></i></a>

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
