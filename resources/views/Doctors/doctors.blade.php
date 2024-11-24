@include('header_accueil')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0">

  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-us.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <h1 class="text-center">NOS MEDECINS</h1>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="py-2">
  <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row flex-center">
        <div class="col-xl-10 px-0">
            <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
                <a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>

                <div class="carousel-inner">
                    @foreach ($medecins->chunk(3) as $chunk) <!-- Divise les médecins en groupes de 3 -->
                        <div class="carousel-item @if ($loop->first) active @endif" data-bs-interval="10000">
                            <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                @foreach ($chunk as $doctor)
                                    <div class="col-md-4 mb-8 mb-md-0">
                                        <div class="card card-span h-100 shadow">
                                            <div class="card-body d-flex flex-column flex-center py-5">
                                                <!-- Images statiques -->
                                                <img src="{{ asset('storage/' . $doctor->image) }}" alt="{{ $doctor->titre }}" class="rounded-circle" width="110" height="50">
                                                
                                                <!-- Contenu dynamique -->
                                                <h5 class="mt-3">{{ $doctor->nom }}</h5>
                                                <p class="mb-0 fs-xxl-1">{{ $doctor->specialite }}</p>
                                                <p class="text-600 mb-0">{{ $doctor->parcours }}</p>
                                                <div class="text-center mt-5">
                                                    <a href="{{ url('appointements')}}" class="btn btn-outline-secondary rounded-pill">
                                                        Rendez-Vous
                                                    </a>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
@include('footer_accueil')
<style>

.rounded-circle {
    border-radius: 50%;
    object-fit: cover; 
    height: 100px; /* Permet à l'image de se redimensionner sans déformation */
}

</style>