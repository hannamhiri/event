@extends('master')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Event</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3" method="post" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') 

        <div class="col-md-6">
            <label for="inputEmail5" class="form-label">Event title</label>
            <input type="text" name="title" class="form-control" id="inputEmail5" value="{{ $event->title }}">
        </div>

        <div class="col-md-6">
            <label for="inputState" class="form-label">Category</label>
            <select id="inputState" class="form-select" name="id_categorie">
                <option selected disabled>Choose...</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($event->id_categorie == $category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label for="inputEmail5" class="form-label">Begin</label>
            <input type="date" name="date_begin" class="form-control" id="inputEmail5" value="{{ $event->date_begin }}">
        </div>

        <div class="col-md-4">
            <label for="inputEmail5" class="form-label">Time</label>
            <input type="time" name="time" class="form-control" value="{{ $event->time }}">
        </div>

        <div class="col-md-4">
            <label for="inputPassword5" class="form-label">Ends</label>
            <input type="date" name="date_end" class="form-control" id="inputPassword5" value="{{ $event->date_end }}">
        </div>

        <div class="col-12">
            <label for="inputAddress5" class="form-label">Event location</label>
            <input type="text" name="location" class="form-control" id="inputAddres5s" value="{{ $event->location }}">
        </div>

        <div class="col-6">
            <label for="inputAddress2" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="inputAddress2" value="{{ $event->price }}">
        </div>

        <div class="col-6">
            <label for="inputAddress2" class="form-label">Upload new image (optional)</label>
            <input class="form-control" name="image" type="file" id="formFile">
            @if ($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" alt="Current Image" width="100" height="100">
            @endif
        </div>

        <div class="col-12">
            <label for="inputAddress5" class="form-label">Event description</label>
            <textarea class="form-control" name="description" id="floatingTextarea" style="height: 100px;">{{ $event->description }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btncolor">Update</button>
            <a href="{{ route('event.index') }}" class="btn btn-secondary">Cancel</a>
        </div>

      </form><!-- End Multi Columns Form -->

    </div>
</div>

@endsection
