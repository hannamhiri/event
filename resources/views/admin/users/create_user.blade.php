@extends('master');
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create new admin</h5>

      <!-- Vertical Form -->
      <form class="row g-3">
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputNanme4">
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Confirm Password</label>
          <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btncolor">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>

@endsection