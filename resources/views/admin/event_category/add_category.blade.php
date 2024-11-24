@extends('master');
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create Category</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Event Category</label>
            <input type="text" name="name" class="form-control" id="inputEmail5">
        </div>
          
        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Image</label>
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