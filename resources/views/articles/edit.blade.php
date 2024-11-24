@extends('master')
@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Mettre à jour l'article</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3" method="post" action="{{ route('article.update', $article->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Indiquer que c'est une mise à jour -->

            <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" id="inputEmail5" value="{{ old('titre', $article->titre) }}">
            </div>

            <div class="col-md-6">
                <label for="inputState" class="form-label">Catégorie</label>
                <select id="inputState" class="form-select" name="id_categorie">
                    <option selected disabled>Choisir...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $article->id_categorie == $category->id ? 'selected' : '' }}>
                            {{ $category->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-6">
                <label for="inputAddress2" class="form-label">Télécharger image</label>
                <input class="form-control" name="image" type="file" id="formFile">
                <!-- Afficher l'image actuelle si elle existe -->
                @if($article->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->titre }}" width="110" height="50">
                    </div>
                @endif
            </div>

            <div class="col-12">
                <label for="inputAddress5" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="floatingTextarea" style="height: 100px;">{{ old('description', $article->description) }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btncolor">Mettre à jour</button>
                <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
        </form>
        <!-- End Multi Columns Form -->
    </div>
</div>

@endsection
