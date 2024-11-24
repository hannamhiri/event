@include('header_accueil')
<!-- ***** Header Area End ***** -->
<style>
 /* Style général pour l'en-tête des catégories */
h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 36px;
    font-weight: bold;
    color: #333;
}

/* Conteneur principal pour les catégories */
.containe {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Sidebar des catégories */


/* Style général pour la sidebar */
.sidebar {
    width: 25%;
    padding: 25px;
    background-color: #f4f4f4;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    position: sticky;
    margin-right:20px;
    top: 100px; 
}

/* Titre de la sidebar */
.sidebar h4 {
    font-size: 22px;
    color: #38598b;
    margin-bottom: 20px;
    text-align: left;
    font-weight: bold;
    border-bottom: 2px solid #38598b;
    padding-bottom: 10px;
}

/* Liste des catégories */
.sidebar ul {
    list-style: none;
    padding-left: 0;
    margin-top: 20px;
}

/* Style des éléments de la liste */
.sidebar ul li {
    margin-bottom: 15px;
    font-size: 18px;
}

/* Style des liens */
.sidebar ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    padding: 8px 12px;
    display: block;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}




/* Conteneur des cartes d'événements */
.container {
    width: 75%;
}


.event-card .event-date {
    font-size: 14px;
    color: #ff6b6b;
    font-weight: bold;
}

.event-card i {
    margin-right: 5px;
}

.category-header {
    text-align: center;
  
    background-color: #f0f0f0; /* Optionnel, pour donner un fond */
    position: relative;
}

.category-header h4 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #007BFF;
}

.workshop-image {
    max-width:100%;
    height:10%;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    margin-top: 10px;
}
.category-banner {
      width: 100%;
      height: 130px;
      background: linear-gradient(to right, #3a6186, #89253e); 
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 30px;
  }

  .category-banner h4 {
      color: white;
      font-size: 36px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Optionnel : léger effet d'ombre pour le texte */
  }
  .workshops {
    font-family: 'Arial', sans-serif;
    font-size: 4rem;
    letter-spacing: 0.5rem; /* Space between letters */
    color: white;
    margin: 0;
}


</style>
<div class="header-bar">
    <h4>Workshops</h4>
<img src="assets/img/w.png" alt="Image Workshops" class="workshop-image">
</div>
<div class="category-banner">
        <h4>W O R K S H O P S</h1>
    </div>

<div style="margin-top: 150px;">
<div class="containe">
    <!-- Sidebar for categories -->
    <div class="sidebar">
        <h4>categories</h4>
        <ul>
            <li><a href="#">workshops</a></li>
            <li><a href="#">conference</a></li>
            <li><a href="#">Festivals</a></li>
            <li><a href="#">Professionnel</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row">
            <!-- First event card -->
            <div class="col-md-6 mb-4">
                <div class="event-card position-relative">
                    <img src="assets/img/machine.jpg" alt="Événement 1">
                    <div class="price">300 TND</div>
                    <div class="p-3">
                        <h5 class="mb-2">introduction of machine learning</h5>
                        <p class="event-location"><i class="bi bi-geo-alt"></i> online training</p>
                        <p class="event-date"><i class="bi bi-calendar"></i> 12 Octobre 2024 à 21:00</p>
                    </div>
                </div>
            </div>

            <!-- Second event card -->
            <div class="col-md-6 mb-4">
                <div class="event-card position-relative">
                <a href="{{ url('/web_dev') }}">
                    <img src="assets/img/web.jpeg" alt="Événement 2">
</a>
                    <div class="price">250 TND</div>
                    <div class="p-3">
                        <h5 class="mb-2">web devolopment</h5>
                        <p class="event-location"><i class="bi bi-geo-alt"></i> school center </p>
                        <p class="event-date"><i class="bi bi-calendar"></i> 20 Octobre 2024 à 18:30</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Third event card -->
            <div class="col-md-6 mb-4">
                <div class="event-card position-relative">
                    <img src="assets/img/python.jpeg" alt="Événement 3">
                    <div class="price">50 TND</div>
                    <div class="p-3">
                        <h5 class="mb-2">python programming </h5>
                        <p class="event-location"><i class="bi bi-geo-alt"></i> elite center</p>
                        <p class="event-date"><i class="bi bi-calendar"></i> 23 Octobre 2024 à 21:00</p>
                    </div>
                </div>
            </div>

            <!-- Fourth event card -->
            <div class="col-md-6 mb-4">
                <div class="event-card position-relative">
                    <img src="assets/img/java.jpg" alt="Événement 4">
                    <div class="price">70 TND</div>
                    <div class="p-3">
                        <h5 class="mb-2">java programming</h5>
                        <p class="event-location"><i class="bi bi-geo-alt"></i>school center</p>
                        <p class="event-date"><i class="bi bi-calendar"></i> 12 Octobre 2024 à 18:30</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer_accueil')
