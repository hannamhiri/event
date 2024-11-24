@extends('master')
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Events</h5>
            <p>Add lightweight datatables to your project with using the </p>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date begin</th>
                  <th>Time</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->category->name}}</td>
                        <td>{{ $event->date_begin }}</td>
                        <td>{{ $event->time }}</td>
                        <td>{{ $event->location }}</td>

                        <td>
                            <form action="{{ route('event.destroy', $event->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit" onclick="return confirm('voulez vous vraiment supprimer ?')">
                                    <i class="ri-delete-bin-6-line" style="color:red;"></i>
                                </button>
                               
                                <a href="{{ route('event.edit', $event) }}" class="btn">
                                    <i class="ri-edit-2-line" style="color: orange;"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
             

            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection