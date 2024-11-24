 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/accueil">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li>

      @if (Auth()->user()->usertype == "user")

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>My Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/event/create">
              <i class="bi bi-circle"></i><span>Add Event</span>
            </a>
          </li>
          <li>
            <a href="/user/events">
              <i class="bi bi-circle"></i><span>Events</span>
            </a>
          </li>
         
          
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/show_registrations">
          <i class="bi bi-file-earmark"></i>
          <span>My Registrations</span>
        </a>
      </li>
      @endif
      @if (Auth()->user()->usertype == "admin")

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/categorie/create">
              <i class="bi bi-circle"></i><span>Ajouter Catégorie</span>
            </a>
          </li>
          
          <li>
            <a href="/categorie">
                <i class="bi bi-circle"></i><span>Les Categories</span>
            </a>
        </li>
        
          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Articles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/article/create">
              <i class="bi bi-circle"></i><span>Ajouter Article</span>
            </a>
          </li>
          
          <li>
            <a href="/article">
                <i class="bi bi-circle"></i><span>Les Articles</span>
            </a>
        </li>
        
          
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#component" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Médecins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="component" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/medecin/create">
              <i class="bi bi-circle"></i><span>Ajouter Médecin</span>
            </a>
          </li>
          
          <li>
            <a href="/medecin">
                <i class="bi bi-circle"></i><span>Les Médecins</span>
            </a>
        </li>


        
        </ul></li>
      
      
      
      
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#componen" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Activités</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="componen" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
              <li>
                <a href="{{ route('mission.add') }}">
                    <i class="bi bi-circle"></i><span>Ajouter Activité</span>
                </a>
           
            
            </li>
            <li>
              <a href="{{ route('missions.index') }}">
                  <i class="bi bi-circle"></i><span>Liste des Activités</span>
              </a>
          </li>
          
            
  
  
          
          </ul></li>

      </ul>

     

     
    @endif
      
    

   

      
  

    </ul>

  </aside><!-- End Sidebar-->