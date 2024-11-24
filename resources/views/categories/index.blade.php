@extends('master');
@section('content')


@if (session('success1'))
<div class="alert alert-success">
    {{ session('success1') }}
</div>
@endif
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des catégories </h5>
            <p>Add lightweight datatables to your project with using the </p>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>Nom</th>

                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->nom }}</td>
                       

                        <td>
                            <form action="{{ route('categorie.destroy', $categorie->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit" onclick="return confirm('voulez vous vraiment supprimer ?')">
                                    <i class="ri-delete-bin-6-line" style="color:red;"></i>
                                </button>
                               
                                <a href="{{ route('categorie.edit', $categorie->id) }}" class="btn">
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