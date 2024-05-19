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
   <h4>Add new Promotion</h4>
   <div class="container">
    <form action="{{ route('admin.promotion.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="parfum_id">Parfum*:</label>
            <select name="parfum_id" class="form-control">
                @foreach($parfums as $parfum)
                    <option value="{{ $parfum->id }}">{{ $parfum->nom }}</option>
                @endforeach
            </select>
            @if($errors->has('parfum_id'))
            <span class="text-danger">{{ $errors->first('parfum_id') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="nom_promotion">Nom*:</label>
            <input type="text" name="nom_promotio" class="form-control" value="{{ old('nom_promotio') }}">
            @if($errors->has('nom_promotio'))
            <span class="text-danger">{{ $errors->first('nom_promotio') }}</span>
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
            <label for="date_debut">Date début*:</label>
            <input type="date" name="date_debut" class="form-control" value="{{ old('date_debut') }}">
            @if($errors->has('date_debut'))
            <span class="text-danger">{{ $errors->first('date_debut') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="date_fin">Date fin*:</label>
            <input type="date" name="date_fin" class="form-control" value="{{ old('date_fin') }}">
            @if($errors->has('date_fin'))
            <span class="text-danger">{{ $errors->first('date_fin') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="pourcentage">Pourcentage*:</label>
            <input type="number" name="pourcentage" class="form-control" value="{{ old('pourcentage') }}">
            @if($errors->has('pourcentage'))
            <span class="text-danger">{{ $errors->first('pourcentage') }}</span>
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
@endsection
