@extends('master')
@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Modifier Médecin</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3" method="post" action="{{ route('medecin.update', $medecin->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Spécifie que cette requête est une mise à jour -->

            <div class="col-md-6">
                <label for="inputNom" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="inputNom" value="{{ old('nom', $medecin->nom) }}">
            </div>
            <div class="col-md-6">
                <label for="inputSpecialite" class="form-label">Spécialité</label>
                <input type="text" name="specialite" class="form-control" id="inputSpecialite" value="{{ old('specialite', $medecin->specialite) }}">
            </div>

            <div class="col-12">
                <label for="inputParcours" class="form-label">Parcours</label>
                <textarea class="form-control" name="parcours" id="inputParcours" style="height: 100px;">{{ old('parcours', $medecin->parcours) }}</textarea>
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Télécharger image</label>
                <input class="form-control" name="image" type="file" id="formFile">
                <!-- Afficher l'image actuelle si elle existe -->
                @if($medecin->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $medecin->image) }}" alt="{{ $medecin->titre }}" width="110" height="50">
                    </div>
                @endif
            </div>

            <div class="text-center">
                <button type="submit" class="btn btncolor">Mettre à jour</button>
                <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
        </form>
        <!-- End Multi Columns Form -->

    </div>
</div>

@endsection
