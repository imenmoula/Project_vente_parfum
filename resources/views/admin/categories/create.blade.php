
@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Votre Formulaire</title>
</head>
<body>
  
  @if($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <strong>{{$message}}</strong>
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

  <div class="container mt-5">
   <h4>ADD new Category</h4>
   <div class="container">
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="nom">Nom*:</label>
            <input type="text" name="nom" class="form-control" value="{{ old('nom') }}">
            @if($errors->has('nom'))
            <span class="text-danger">{{ $errors->first('nom') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="description">Description*:</label>
            <input type="text" name="description" class="form-control" value="{{ old('description') }}">
            @if($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="image">Image*:</label>
            <input type="file" name="image" class="form-control">
            @if($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="date_creation">Date Creation*:</label>
            <input type="date" name="date_creation" class="form-control" value="{{ old('date_creation') }}">
            @if($errors->has('date_creation'))
            <span class="text-danger">{{ $errors->first('date_creation') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="status">Status*:</label>
            <select name="status" class="form-control">
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @if($errors->has('status'))
            <span class="text-danger">{{ $errors->first('status') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label>Sexe*:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="male" value="male" {{ old('sexe') == 'male' ? 'checked' : '' }}>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="female" value="female" {{ old('sexe') == 'female' ? 'checked' : '' }}>
                <label class="form-check-label" for="female">Female</label>
            </div>
            @if($errors->has('sexe'))
            <span class="text-danger">{{ $errors->first('sexe') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
@endsection