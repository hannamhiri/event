@extends('master');
@section('content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Categories</h5>
            <p>Add lightweight datatables to your project with using the </p>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="110" height="50">
                        </td>
                        <td>
                            <form action="{{ route('category.destroy', $category->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit" onclick="return confirm('voulez vous vraiment supprimer ?')">
                                    <i class="ri-delete-bin-6-line" style="color:red;"></i>
                                </button>
                               
                                <a href="{{ route('category.edit', $category) }}" class="btn">
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