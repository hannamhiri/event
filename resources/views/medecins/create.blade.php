@extends('master');
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Créer Médecin</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" method="post" action="{{ route('medecin.store') }}" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Spécialité</label>
            <input type="text" name="specialite" class="form-control" id="inputEmail5">
          </div>
         
          <div class="col-12">
            <label for="inputAddress5" class="form-label">Parcours</label>
            <textarea class="form-control" name="parcours" id="floatingTextarea" style="height: 100px;"></textarea>
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Télécharger image</label>
          <input class="form-control" name="image" type="file" id="formFile">
      </div>
        
        <div class="text-center">
          <button type="submit" class="btn btncolor">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>






@endsection