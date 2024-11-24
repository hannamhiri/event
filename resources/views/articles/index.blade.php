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
            <h5 class="card-title">Les Articles</h5>
            <p>Add lightweight datatables to your project with using the </p>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>Titre</th>
                  <th>Categorie</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->titre }}</td>
                        <td>{{ $article->categorie->nom}}</td>
                
                        <td>{{ $article->description }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->titre }}" width="110" height="50">
                        </td>

                        <td>
                            <form action="{{ route('article.destroy', $article->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit" onclick="return confirm('voulez vous vraiment supprimer ?')">
                                    <i class="ri-delete-bin-6-line" style="color:red;"></i>
                                </button>
                               
                                <a href="{{ route('article.edit', $article) }}" class="btn">
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