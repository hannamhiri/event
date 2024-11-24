<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-color: #f8f9fa !important;
        }
        .p-4 {
            padding: 1.5rem !important;
        }
        .mb-0, .my-0 {
            margin-bottom: 0 !important;
        }
        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
        }
        /* User Dashboard Info Box */
        .user-dashboard-info-box .candidates-list .thumb {
            margin-right: 20px;
        }
        .user-dashboard-info-box .candidates-list .thumb img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            overflow: hidden;
            border-radius: 50%;
        }
        .user-dashboard-info-box .title {
            display: flex;
            align-items: center;
            padding: 30px 0;
        }
        .user-dashboard-info-box .candidates-list td {
            vertical-align: middle;
        }
        .user-dashboard-info-box td li {
            margin: 0 4px;
        }
        .user-dashboard-info-box .table thead th {
            border-bottom: none;
        }
        .table.manage-candidates-top th {
            border: 0;
        }
        .user-dashboard-info-box .candidate-list-favourite-time .candidate-list-favourite {
            margin-bottom: 10px;
        }
        .table.manage-candidates-top {
            min-width: 650px;
        }
        .user-dashboard-info-box .candidate-list-details ul {
            color: #969696;
        }
        /* Candidate List */
        .candidate-list {
            background: #ffffff;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #eeeeee;
            padding: 20px;
            transition: all 0.3s ease-in-out;
        }
        .candidate-list:hover {
            box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
            position: relative;
            z-index: 99;
        }
        .candidate-list:hover a.candidate-list-favourite {
            color: #e74c3c;
            box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
        }
        .candidate-list .candidate-list-image {
            margin-right: 25px;
            flex: 0 0 80px;
        }
        .candidate-list .candidate-list-image img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        .candidate-list-title {
            margin-bottom: 5px;
        }
        .candidate-list-details ul {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 0;
        }
        .candidate-list-details ul li {
            margin: 5px 10px 5px 0;
            font-size: 13px;
        }
        .candidate-list .candidate-list-favourite-time {
            margin-left: auto;
            text-align: center;
            font-size: 13px;
            flex: 0 0 90px;
        }
        .candidate-list .candidate-list-favourite-time span {
            display: block;
            margin: 0 auto;
        }
        .candidate-list .candidate-list-favourite-time .candidate-list-favourite {
            display: inline-block;
            position: relative;
            height: 40px;
            width: 40px;
            line-height: 40px;
            border: 1px solid #eeeeee;
            border-radius: 100%;
            text-align: center;
            transition: all 0.3s ease-in-out;
            margin-bottom: 20px;
            font-size: 16px;
            color: #646f79;
        }
        .candidate-list .candidate-list-favourite-time .candidate-list-favourite:hover {
            background: #ffffff;
            color: #e74c3c;
        }
        .bg-white {
            background-color: #ffffff !important;
        }
        .dot {
            width: 10px; /* Width of the dot */
            height: 10px; /* Height of the dot */
            border-radius: 50%; /* Makes it a circle */
            display: inline-block; /* Required for proper display */
        }
        .connected {
            background-color: #28a745; /* Green color for connected */
        }
        .disconnected {
            background-color: red; /* Red color for disconnected */
        }
    </style>
</head>
<body>
@extends('master');
@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container mt-6 mb-4 " >
    <div class="col-lg-9 mt-4 mt-lg-0">
    
        <div class="row">
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
<button type="button" class="col-md-12 btn btn-info  mt-4" title="Add Administrator" data-toggle="modal" data-target="#addAdminModal" style="margin-bottom:20px; margin-right:0%;"> 
<i class="fas fa-plus"></i><i class="fa-solid fa-user-tie"></i>  &nbsp;&nbsp;&nbsp; Add Administrator
</button >  

            <div class="col-md-12" >

        
                <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
              
                    <table class="table manage-candidates-top mb-0">
                        <thead>
                            <tr>
                                <th>Nom de l'utilisateur</th>
                                <th class="action text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listadmin as $user)
                            <tr class="candidates-list">
                                <td class="title">
                                    <div class="thumb">
                                        <img class="img-fluid" src="" alt>
                                    </div>
                                    <div class="candidate-list-details">
                                        <div class="candidate-list-info">
                                            <div class="candidate-list-title">
                                                <h5 class="mb-0"><a href="#">{{ $user->name }}</a></h5>
                                            </div>
                                            <div class="candidate-list-option">
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-envelope pr-1"></i>{{ $user->email }}</li>
    
                                                </ul>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td>
                                    <ul class="list-unstyled mb-0 d-flex justify-content-end">
                                        <li>
                                            <button type="button" class="btn btn-primary" title="View" data-toggle="modal" data-target="#viewModal{{ $user->id }}">
                                                <i class="far fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-info" title="Edit" data-toggle="modal" data-target="#editModal{{ $user->id }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <!-- View Modal -->
                            <div class="modal fade" id="viewModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel{{ $user->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="viewModalLabel{{ $user->id }}">Détails de l'utilisateur</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:white;">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center"> <!-- Center content -->
            <!-- User's Circular Photo -->
            <div class="mb-6" style="position: relative; display: inline-block;">
    <span class="dot {{ $user->connecte ? 'connected' : 'disconnected' }}" 
          style="position: absolute; top: 80px; left: 75%; margin-left: -10px;  width:20px;height:20px;">
    </span>
    <img class="img-fluid rounded-circle" 
         src="dist/asset/logo.PNG" 
         alt="User Photo" 
         style="width: 100px; height: 100px;">
</div>

            <!-- User's Name -->
            <h5 class="font-weight-bold">{{ $user->name }}</h5>
            <!-- User's Email and Phone in the same line -->
             <p class="mb-1" style="margin-right: 10px;">
                    <i class="fas fa-envelope pr-1" style="color:purple;"></i>{{ $user->email }}
                </p>
                
            <!-- User's Governorate with Icon -->
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
    </div>
</div>


</div>

<!-- modal for edit account -->
 <!-- View Modal -->
<div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
    <!-- View Modal -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $user->id }}">Détails de l'utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center"> <!-- Center content -->
                <!-- User's Circular Photo -->
                <div class="mb-6" style="position: relative; display: inline-block;">
                    
                    <img class="img-fluid rounded-circle" 
                         src="{{ asset('storage/' . $user->profile_image) }}" 
                         alt="User Photo" 
                         style="width: 100px; height: 100px;">
                </div>

                <!-- User's Name -->
                <h5 class="font-weight-bold">{{ $user->name }}</h5>

                <!-- Update Form -->
               <!-- Update Form -->
<form action="{{ route('updateUser', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="fullName" value="{{ $user->name }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
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


<!-- Modal Bootstrap pour ajouter un administrateur -->


@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Ajouter un Administrateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!-- Champ Nom -->
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <!-- Champ Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <!-- Champ Mot de passe -->
                    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <!-- Champ Confirmation du mot de passe -->
    <div class="form-group">
        <label for="password_confirmation">Confirmez le mot de passe</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>

  
                    

                  

                    <!-- Champ Image de profil -->
                    <div class="form-group">
                        <label for="profile_image">Image de profil</label>
                        <input type="file" class="form-control" id="profile_image" name="profile_image">
                    </div>

                    <!-- Bouton Submit -->
                    <button type="submit" class="btn btn-primary">Ajouter Administrateur</button>
                </form>
            </div>
        </div>
    </div>
</div>





<!-- CSS for Styling -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }
    .modal-header {
        background-color: #5d6060; /* Modal header color */
        color: white; /* Text color in header */
    }

    .modal-footer {
        border-top: none; /* Remove top border */
    }

    .close {
        color: white; /* Close button color */
        font-size: 1.5rem; /* Increase size */
    }
    .containerb {
    display: flex;
    justify-content: center; /* Center the buttons horizontally */
    gap: 10px; /* Space between buttons */
    margin-top: 20px; /* Space above the button container */
}

    
</style>

<!-- Include Bootstrap CSS and JS (Make sure you have these files linked) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection