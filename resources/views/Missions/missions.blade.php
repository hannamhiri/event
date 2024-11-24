@include('header_accueil')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-5" id="departments">

  <div class="container">
    <div class="row">
      <div class="col-12 py-3">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->
        <br><br><br><br>
        <h1 class="text-center">NOS SERVICVES</h1>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0">
  <div class="container">
    <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
      
      <!-- Vidéos -->
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
          <div class="icon-box text-center">
            <a class="text-decoration-none" href="#!">
              <img class="mb-3" src="assets/img/video.png" alt="Vidéos" style="width: 80px; height: 80px;" />
              <p class="fs-1 fs-xxl-2 text-center">Vidéos</p>
            </a>
          </div>
        </div>
      </div>
  
      <!-- Articles -->
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
          <div class="icon-box text-center">
            <a class="text-decoration-none" href="{{ route('articles') }}">
              <img class="mb-3" src="assets/img/article.png" alt="Articles" style="width: 80px; height: 80px;" />
              <p class="fs-1 fs-xxl-2 text-center">Articles</p>
            </a>
          </div>
        </div>
      </div>
  
      <!-- Médecins -->
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
          <div class="icon-box text-center">
            <a class="text-decoration-none" href="{{ route('medecins') }}">
              <img class="mb-3" src="assets/img/med.png" alt="Vidéos" style="width: 80px; height: 80px;" />
              <p class="fs-1 fs-xxl-2 text-center">Médecins</p>
            </a>
          </div>
        </div>
      </div>
  
      <!-- Activités -->
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
          <div class="icon-box text-center">
            <a class="text-decoration-none" href="/activities">
              <img class="mb-3" src="assets/img/activites.png" alt="Activités" style="width: 80px; height: 80px;" />
              <p class="fs-1 fs-xxl-2 text-center">Activités</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
          <div class="icon-box text-center">
            <a class="text-decoration-none" >
              <a href="{{ route('journaling.create') }}">
                <img class="mb-3" src="assets/img/article.png" alt="Communauté" style="width: 80px; height: 80px;" />
            </a>
                          <p class="fs-1 fs-xxl-2 text-center" >Journal</p>
            </a>
          </div>
        </div>
      </div>

      <!-- Chatbot -->
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
          <div class="icon-box text-center">
            <a class="text-decoration-none" id="chatbot-button" href="#!">
              <img class="mb-3" src="assets/img/images.png" alt="Chatbot" style="width: 80px; height: 80px;" />
              <p class="fs-1 fs-xxl-2 text-center">Chatbot</p>
            </a>
          </div>
        </div>
      </div>
      @if (Auth::check() )

      <!-- Communauté -->
      <div class="col-auto col-md-4 col-lg-auto text-xl-start">
        <div class="d-flex flex-column align-items-center">
          <div class="icon-box text-center">
            <a class="text-decoration-none" href="javascript:void(0);" data-toggle="modal" data-target="#pseudoNameModal">
              <img class="mb-3" src="assets/img/article.png" alt="Communauté" style="width: 80px; height: 80px;" />
              <p class="fs-1 fs-xxl-2 text-center">Communauté</p>
            </a>
          </div>
        </div>
      </div>
      @endif
  
    </div>
  </div>
  

<!-- Modal Structure -->
<div class="modal fade" id="pseudoNameModal" tabindex="-1" role="dialog" aria-labelledby="pseudoNameModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pseudoNameModalLabel">Donner un pseudo Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Input Field for Pseudo Name -->
        <form action="{{ route('updatePseudoName') }}" id="pseudoNameForm" method="POST">
          @csrf
          @method('PUT') <!-- Correct method directive for PUT -->
          <div class="form-group">
            <label for="pseudoName">Pseudo Name</label>
            <input type="text" class="form-control" id="pseudoName" name="pseudoName" placeholder="Enter your pseudo name" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" form="pseudoNameForm" class="btn btn-primary">Commencer à discuter</button>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>
  <!-- end of .container-->

</section>



<!-- Include Bootstrap JS (Make sure you have jQuery, Popper.js, and Bootstrap JS included in your project) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@include('footer_accueil')
<script>
  (function(d, m){
    var kommunicateSettings = {
      "appId": "21dc49ef081bdb8ba6380f031aee820b6", // Votre App ID
      "popupWidget": false,
      "automaticChatOpenOnNavigation": false,
      "conversationTitle": "Mindwell", // Définit le nom affiché du chatbot
      "botMetaData": {
        "botName": "Mindwell" // Définit le nom du bot dans les conversations
      }
    };
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
    var h = document.getElementsByTagName("head")[0];
    h.appendChild(s);
    window.kommunicate = m;
    m._globals = kommunicateSettings;
  })(document, window.kommunicate || {});
</script>


    <!-- Script pour ouvrir le chatbot au clic -->
    <script>
      document.getElementById('chatbot-button').addEventListener('click', function(event) {
          event.preventDefault(); // Empêche le rechargement de la page
          if (window.kommunicate) {
              kommunicate.launchConversation(); // Ouvre le chatbot
          } else {
              console.error('Kommunicate is not initialized yet.');
          }
      });
    </script>