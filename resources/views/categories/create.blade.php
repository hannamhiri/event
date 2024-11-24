@extends('master');
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Créer Categorie</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" method="post" action="{{ route('categorie.store') }}" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="inputEmail5">
          </div>
         
        
        
        <div class="text-center">
          <button type="submit" class="btn btncolor">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>






@endsection