@extends('master');
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Créer Artilce</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label">Categorie</label>
            <select id="inputState" class="form-select" name="id_categorie">
                <option selected disabled>Choisir...</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                @endforeach
            </select>
        </div>

      
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Télécharger image</label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>
        <div class="col-12">
            <label for="inputAddress5" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="floatingTextarea" style="height: 100px;"></textarea>
        </div>
        
        
        <div class="text-center">
          <button type="submit" class="btn btncolor">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>






@endsection