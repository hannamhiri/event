@extends('master')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Category</h5>

      <form class="row g-3" method="post" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') 

        <div class="col-md-6">
            <label for="inputName" class="form-label">Event Category</label>
            <input type="text" name="name" class="form-control" id="inputName" value="{{ $category->name }}">
        </div>
          
        <div class="col-md-6">
          <label for="inputImage" class="form-label">Image</label>
          <input class="form-control" name="image" type="file" id="formFile">
            <div class="mt-2">
              <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="100" height="100">
            </div>
        </div>
        
        <div class="text-center">
          <button type="submit" class="btn btncolor">Update</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>

    </div>
</div>

@endsection
