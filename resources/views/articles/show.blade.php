@include('header_accueil')



<!-- Section avec une image de fond et un titre -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->
        <br><br>
        <h1 class="text-center">Articles</h1>
      </div>
    </div>
  </div>
</section>

<!-- Carousel Section -->
<section class="py-4">
  <div class="container">
    <div class="row align-items-center offset-sm-1">
      <div class="carousel slide" id="carouselArticles" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($articles->chunk(3) as $chunk)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="10000">
              <div class="row">
                @foreach($chunk as $article)
                  <div class="col-sm-4 text-center">
                    <div class="card">
                      <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="{{ $article->titre }}">
                      <div class="card-body">
                        <h5 class="card-title">{{ $article->titre }}</h5>
                        <p class="card-text">{{ Str::limit($article->description, 100) }}</p>
                        <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Lire plus</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
        
        <div class="row">
          <div class="position-relative z-index-2 mt-5">
            <ol class="carousel-indicators">
              @foreach($articles->chunk(3) as $index => $chunk)
                <li class="{{ $index == 0 ? 'active' : '' }}" data-bs-target="#carouselArticles" data-bs-slide-to="{{ $index }}"></li>
              @endforeach
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







@include('footer_accueil')







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
       <h1 class="text-center">PEOPLE WHO LOVE US</h1>
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
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row h-100">
              <div class="col-sm-3 text-center"><img src="dist/assets/img/gallery/people-who-loves.png" width="100" alt="" />
                <h5 class="mt-3 fw-medium text-secondary">Edward Newgate</h5>
                <p class="fw-normal mb-0">Founder Circle</p>
              </div>
              <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                <h2>Fantastic Response!</h2>
                <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row h-100">
              <div class="col-sm-3 text-center"><img src="dist/assets/img/gallery/people-who-loves.png" width="100" alt="" />
                <h5 class="mt-3 fw-medium text-secondary">Jhon Doe</h5>
                <p class="fw-normal mb-0">UI/UX Designer</p>
              </div>
              <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                <h2>Fantastic Response!</h2>
                <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row h-100">
              <div class="col-sm-3 text-center"><img src="assets/img/gallery/people-who-loves.png" width="100" alt="" />
                <h5 class="mt-3 fw-medium text-secondary">Jeny Doe</h5>
                <p class="fw-normal mb-0">Web Designer</p>
              </div>
              <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                <h2>Fantastic Response!</h2>
                <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
              </div>
            </div>
          </div>
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

