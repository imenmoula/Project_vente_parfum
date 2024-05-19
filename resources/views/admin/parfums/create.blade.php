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
   <h4>Add new Parfum</h4>
   <div class="container">
    <form action="{{ route('admin.parfums.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="category_id">Category*:</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                @endforeach
            </select>
            @if($errors->has('category_id'))
            <span class="text-danger">{{ $errors->first('category_id') }}</span>
            @endif
        </div>

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
            <label for="description">Marque*:</label>
            <input type="text" name="marque" class="form-control" value="{{ old('marque') }}">
            @if($errors->has('marque'))
            <span class="text-danger">{{ $errors->first('marque') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="prix">Prix*:</label>
            <input type="number" name="prix" class="form-control" value="{{ old('prix') }}">
            @if($errors->has('prix'))
            <span class="text-danger">{{ $errors->first('prix') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="qte_stock">Quantité en stock*:</label>
            <input type="number" name="qte_stock" class="form-control" value="{{ old('qte_stock') }}">
            @if($errors->has('qte_stock'))
            <span class="text-danger">{{ $errors->first('qte_stock') }}</span>
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
            <label for="volume">Volume*:</label>
            <input type="number" name="volume" class="form-control" value="{{ old('volume') }}">
            @if($errors->has('volume'))
            <span class="text-danger">{{ $errors->first('volume') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Sexe*:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genre" id="male" value="male" {{ old('genre') == 'male' ? 'checked' : '' }}>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genre" id="female" value="female" {{ old('genre') == 'female' ? 'checked' : '' }}>
                <label class="form-check-label" for="female">Female</label>
            </div>
            @if($errors->has('genre'))
            <span class="text-danger">{{ $errors->first('genre') }}</span>
            @endif
        </div>
        
        
        
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

        
       
