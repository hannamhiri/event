@extends('master');
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Create Event</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Event title</label>
            <input type="email" class="form-control" id="inputEmail5">
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label">Cateogry</label>
            <select id="inputState" class="form-select">
              <option selected="">Choose...</option>
              <option>...</option>
            </select>
          </div>
        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Begin</label>
          <input type="date" class="form-control" id="inputEmail5">
        </div>
        <div class="col-md-6">
          <label for="inputPassword5" class="form-label">Ends</label>
          <input type="date" class="form-control" id="inputPassword5">
        </div>
        <div class="col-12">
          <label for="inputAddress5" class="form-label">Event location</label>
          <input type="text" class="form-control" id="inputAddres5s">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Price</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Upload image</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-12">
            <label for="inputAddress5" class="form-label">Event description</label>
            <textarea class="form-control" id="floatingTextarea" style="height: 100px;"></textarea>
        </div>
        
        
        <div class="text-center">
          <button type="submit" class="btn btncolor">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>






@endsection