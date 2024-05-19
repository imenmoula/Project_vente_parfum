@extends('master')
@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-block">
    <strong>Une erreur s'est produite :</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">

    <div class="row justify-content-center">

        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <h1 class="text-muted">Category Modifier #{{ $category->id }}</h1>
                <form method="POST" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nom*:</label>
                        <input type="text" class="form-control" value="{{ old('name', $category->nom) }}" name="nom" />
                        @if($errors->has('nom'))
                        <span class="text-danger">{{ $errors->first('nom') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Description*:</label>
                        <textarea class="form-control" rows="4" name="description">{{ old('description', $category->description) }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Image*:</label>
                        <input type="file" name="image" class="form-control" />
                        @if($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="date_update">Date Modification*:</label>
                        <input type="date" name="date_update" class="form-control" value="{{ old('date_update', date('Y-m-d', strtotime($category->date_update))) }}">
                        @if($errors->has('date_update'))
                        <span class="text-danger">{{ $errors->first('date_update') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="status">Status*:</label>
                        <select name="status" class="form-control">
                            <option value="active" {{ old('status', $category->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $category->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @if($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
