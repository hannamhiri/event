@extends('master')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Event</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" method="post" action="{{ route('categorie.update', $categorie->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') 

        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="inputEmail5" value="{{ $categorie->nom }}">
        </div>

        


        <div class="text-center">
            <button type="submit" class="btn btncolor">Update</button>
            <a href="{{ route('categorie.index') }}" class="btn btn-secondary">Cancel</a>
        </div>

      </form><!-- End Multi Columns Form -->

    </div>
</div>

@endsection
