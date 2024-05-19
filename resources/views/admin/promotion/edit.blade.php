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
                <h1 class="text-muted">Modifier la promotion #{{ $promotion->id }}</h1>
                <form method="POST" action="{{ route('admin.promotion.update', $promotion->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="category_id">Catégorie*:</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $promotion->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->nom }}
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('category_id'))
                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="parfum_id">Parfum*:</label>
                        <select name="parfum_id" id="parfum_id" class="form-control">
                            @foreach($parfums as $parfum)
                                <option value="{{ $parfum->id }}" {{ old('parfum_id', $promotion->parfum_id) == $parfum->id ? 'selected' : '' }}>
                                    {{ $parfum->nom }}
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('parfum_id'))
                        <span class="text-danger">{{ $errors->first('parfum_id') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nom_promotion">Nom*:</label>
                        <input type="text" class="form-control" id="nom_promotion" name="nom_promotio" value="{{ old('nom_promotio', $promotion->nom_promotio) }}" />
                        @if($errors->has('nom_promotio'))
                        <span class="text-danger">{{ $errors->first('nom_promotio') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">Description*:</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $promotion->description) }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="date_debut">Date début*:</label>
                        <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ old('date_debut', $promotion->date_debut) }}" />
                        @if($errors->has('date_debut'))
                        <span class="text-danger">{{ $errors->first('date_debut') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="date_fin">Date fin*:</label>
                        <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ old('date_fin', $promotion->date_fin) }}" />
                        @if($errors->has('date_fin'))
                        <span class="text-danger">{{ $errors->first('date_fin') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="pourcentage">Pourcentage*:</label>
                        <input type="number" class="form-control" id="pourcentage" name="pourcentage" value="{{ old('pourcentage', $promotion->pourcentage) }}" />
                        @if($errors->has('pourcentage'))
                        <span class="text-danger">{{ $errors->first('pourcentage') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
