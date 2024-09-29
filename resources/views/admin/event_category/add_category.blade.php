@extends('master');
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create Category</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3">
        <div class="col-md-12">
            <label for="inputEmail5" class="form-label">Event Category</label>
            <input type="text" class="form-control" id="inputEmail5">
        </div>
          
        
        
        
        <div class="text-center">
          <button type="submit" class="btn btncolor">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>

@endsection