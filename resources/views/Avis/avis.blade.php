@include('header_accueil')



<section class="py-5">

  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->
<br><br>
<br> <br>
       <h1 class="text-center">NOS ARTICLES</h1>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="py-4">


  <div class="container">
    <div class="row align-items-center offset-sm-1">
      <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($articles->chunk(3) as $chunk)
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row h-100">
              @foreach($chunk as $article)
              <div class="col-sm-3 text-center"><img src="{{ asset('storage/' . $article->image) }}"  width="200" height="150" alt="" />
                <h5 class="mt-3 fw-medium text-secondary">{{ $article->titre }}</h5>
                <p class="fw-normal mb-0">{{$article->description }}</p>
              </div>
              
              @endforeach

          @endforeach

        </div>
        <div class="row">
          <div class="position-relative z-index-2 mt-5">
            <ol class="carousel-indicators">
              <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
              <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('footer_accueil')






