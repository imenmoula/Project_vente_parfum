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
                <h1 class="text-muted">Modifier le parfum #{{ $parfum->id }}</h1>
                <form method="POST" action="{{ route('admin.parfums.update', $parfum->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="category_id">Catégorie*:</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('category_id', $parfum->category_id) == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->nom }}
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('category_id'))
                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom*:</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $parfum->nom) }}" />
                        @if($errors->has('nom'))
                        <span class="text-danger">{{ $errors->first('nom') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">Description*:</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $parfum->description) }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="prix">Prix*:</label>
                        <input type="number" step="0.01" class="form-control" id="prix" name="prix" value="{{ old('prix', $parfum->prix) }}" />
                        @if($errors->has('prix'))
                        <span class="text-danger">{{ $errors->first('prix') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="qte_stock">Quantité en stock*:</label>
                        <input type="number" class="form-control" id="qte_stock" name="qte_stock" value="{{ old('qte_stock', $parfum->qte_stock) }}" />
                        @if($errors->has('qte_stock'))
                        <span class="text-danger">{{ $errors->first('qte_stock') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" />
                        @if($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="volume">Volume*:</label>
                        <input type="number" step="0.01" class="form-control" id="volume" name="volume" value="{{ old('volume', $parfum->volume) }}" />
                        @if($errors->has('volume'))
                        <span class="text-danger">{{ $errors->first('volume') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="marque">Marque*:</label>
                        <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque', $parfum->marque) }}" />
                        @if($errors->has('marque'))
                        <span class="text-danger">{{ $errors->first('marque') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
