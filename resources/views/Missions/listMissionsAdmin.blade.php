@extends('master');
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .zoomable {
            transition: transform 0.2s;
            /* Animation */
            cursor: pointer;
            /* Changement de curseur au survol */
        }

        .zoomable:hover {
            transform: scale(1.5);
            /* Agrandissement au survol */
        }

        .img-thumbnail {
            border: 1px solid #ddd;
            /* Bordure de l'image */
            border-radius: 4px;
            /* Coins arrondis */
            padding: 5px;
            /* Espace entre l'image et la bordure */
            max-width: 100%;
            /* Ne dépasse pas la largeur du conteneur */
            height: auto;
            /* Hauteur automatique pour maintenir les proportions */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .modal-body {
            text-align: center;
            /* Center align content */
        }

        .event-image {
            width: 150px;
            /* Set width for the image */
            height: 150px;
            /* Set height for the image */
            object-fit: cover;
            /* Maintain aspect ratio */
            border-radius: 10px;
            /* Rounded corners */
            margin-bottom: 20px;
            /* Space below the image */
        }

        .event-details {
            text-align: left;
            /* Align text to the left for details */
            font-size: 16px;
            /* Set font size */
        }

        .event-details h6 {
            margin: 10px 0;
            /* Space around event title */
            font-weight: bold;
            /* Bold title */
        }

        /* Custom styles for icons */
        .event-details .icon {
            margin-right: 10px;
            /* Space between icon and text */
            color: #5d6060;
            /* Icon color */
        }

        .modal-header {
            background-color: #5d6060;
            /* Modal header color */
            color: white;
            /* Text color in header */
        }

        .modal-footer {
            border-top: none;
            /* Remove top border */
        }

        .close {
            color: white;
            /* Close button color */
            font-size: 1.5rem;
            /* Increase size */
        }
    </style>

    <!-- Add Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <button type="button" 
    class="col-md-12 btn btn-info mt-4" 
    title="Add Activities" 
    data-toggle="modal" 
    data-target="#addModal" 
    style="margin-bottom:20px; margin-right:0%;">
    <i class="fas fa-plus"></i> <i class="fa-solid fa-user-tie"></i> &nbsp;&nbsp;&nbsp; Add Activities
    </button>
    
        <div class="pagetitle">
            <h1>Liste des Activités </h1>
            
        </div><!-- End Page Title -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Nom</th>

                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($missions as $mission)
                                        <tr>
                                            <td>
                                                @if($mission->image)
                                                    <a href="{{ asset($mission->image) }}" target="_blank">
                                                    <img src="{{ asset('storage/' .$mission->image) }}" alt="Mission Image">
                                                  
                                                    </a>
                                                @endif
                                            </td>

                                            <td>{{ $mission->nom }}</td>

                                            <td>{{ $mission->description }}</td>

                                            <td>
                                                <div class="action-buttons">

                                                <button type="button" class="btn btn-info" title="Edit" data-toggle="modal" data-target="#editModal{{ $mission->id }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>

                                                    <form action="{{ route('destroymission', $mission->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" title="Supprimer">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>


                                                 

                                                </div>
                                                <!-- Bouton pour ouvrir le modal -->

                                                
                                                <div class="modal fade" id="editModal{{ $mission->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $mission->id }}" aria-hidden="true">
                                                    <!-- View Modal -->
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel{{ $mission->id }}">Détails de l'utilisateur</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true" style="color:white;">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center"> <!-- Center content -->
                                                                <!-- User's Circular Photo -->
                                                                <div class="mb-6" style="position: relative; display: inline-block;">
                                                                    
                                                                    <img class="img-fluid rounded-circle" 
                                                                         src="{{ asset('storage/image/' . $mission->image) }}" 
                                                                         alt="User Photo" 
                                                                         style="width: 100px; height: 100px;">
                                                                </div>
                                                
                                                                <!-- User's Name -->
                                                                <h5 class="font-weight-bold">{{ $mission->nom }}</h5>
                                                
                                                                <!-- Update Form -->
                                                               <!-- Update Form -->
                                                <form action="{{ route('updatemission', $mission->id) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="form-group">
                                                        <label for="name">Nom</label>
                                                        <input type="text" class="form-control" id="name" name="nom" value="{{ $mission->nom }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Description</label>
                                                        <input type="text" class="form-control" id="name" name="description" value="{{ $mission->description }}" required>
                                                    </div> 
                                                    <div class="containerb text-center">
                                                        <button type="submit" class="btn btn-warning" title="save">
                                                            <i class="fas fa-save pr-1"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal" title="Cancel">
                                                            <i class="fas fa-times pr-1"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Modal for Event Details -->
    
   
    <!-- Add jQuery and Bootstrap JS for modal functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Ajouter une nouvelle activité</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:white;">&times;</span>
            </button>
        </div>
    
        <!-- Modal Body -->
        <div class="modal-body">
            <!-- Formulaire pour ajouter une activité -->
            <form action="{{ route('mission.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom de l'activité</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom de l'activité" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez une description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                </div>
    
                <!-- Boutons d'action -->
                <div class="containerb text-center">
                    <button type="submit" class="btn btn-success" title="Save">
                        <i class="fas fa-save pr-1"></i> Enregistrer
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" title="Cancel">
                        <i class="fas fa-times pr-1"></i> Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    
</body>

</html>
@endsection