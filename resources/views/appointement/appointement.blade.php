@include('header_accueil')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5">

  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
        </div>
<br><br><br><br>
        <h1 class="text-center">Prendre un rendez vous</h1>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<section class="py-4">
  <div class="container">
    <div class="row">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
      </div>
      <!--/.bg-holder-->

      <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="dist/assets/img/gallery/appointment.png" alt="..." /></div>
      <div class="col-lg-6 z-index-2">
        <form class="row g-3">
          <div class="col-md-6">
            <label class="visually-hidden" for="inputName">Nom</label>
            <input class="form-control form-livedoc-control" id="inputName" type="text" placeholder="Name" />
          </div>
          <div class="col-md-6">
            <label class="visually-hidden" for="inputPhone">Numéro de téléphone</label>
            <input class="form-control form-livedoc-control" id="inputPhone" type="text" placeholder="Phone" />
          </div>
          
          <div class="col-md-6">
            <label class="form-label visually-hidden" for="inputEmail">Email</label>
            <input class="form-control form-livedoc-control" id="inputEmail" type="email" placeholder="Email" />
          </div>
          <div class="col-md-12">
            <label class="form-label visually-hidden" for="validationTextarea">Message</label>
            <textarea class="form-control form-livedoc-control" id="validationTextarea" placeholder="Message" style="height: 250px;" required="required"></textarea>
          </div>
          <div class="col-12">
            <div class="d-grid">
              <button class="btn btn-primary rounded-pill" type="submit">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@include('footer_accueil')
