@include('header_accueil')
<style>
  /* Style for the "Valider" button */
.btn-valider {
    background-color: #4CAF50; /* Green */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
}

.btn-valider:hover {
    background-color: #45a049; /* Darker green on hover */
}

/* Style for the "Lus" button (when the mission is already validated) */
.btn-lus {
    background-color: #f1f1f1; /* Light gray background */
    color: #888; /* Gray text */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    cursor: not-allowed;
}

/* Remove any border around the form */
form {
    border: none;
}

</style>
<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-8">

  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <h1 class="text-center">ACTIVITES PROPOSEES</h1>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<section>
  <div class="container" style="margin-top:-200px;">
    <div class="row">
      @foreach ($missions as $mission)
        <div class="col-sm-6 col-lg-3 mb-2">
          <div class="card h-100 shadow card-span rounded-3">
            <!-- Dynamic Image -->
            <img class="card-img-top rounded-top-3" style="max-width: 150px: width:150px;" src="{{ asset('storage/' . $mission->image) }}" alt="news" />
            <div class="card-body">
              <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{ $mission->nom }}</h5>
              <p>{{ $mission->description }}</p>
              <form action="{{ route('missions.valider', $mission->id) }}" method="POST">
    @csrf
    @method('POST') <!-- Indicate it's a POST request -->
    
    @if($mission->lus == 1)
        <!-- If 'lus' is 1, show "Lus" and make it unclickable -->
        <button type="button" class="stretched-link btn-lus" disabled>Lus</button>
    @else
        <!-- If 'lus' is 0, show the regular "Valider" button -->
        <button type="submit" class="stretched-link btn-primary">Valider</button>
    @endif
</form>


            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@include('footer_accueil')
