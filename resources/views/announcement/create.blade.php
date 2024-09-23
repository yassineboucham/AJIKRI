@extends('layout')
@section('title', 'Créer une Annonce')
@section('content')
    <section style="margin-top:100px;padding:0">
        <form class="was-validated" action="{{route('announcement.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="categorySelect" class="form-label">Select a Category</label>
                <select class="form-select" id="categorySelect" name="categorie_id" >
                    @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['catégorie'] }}</option>
                    @endforeach
                </select>
            </div>

            @foreach($categories as $category)
                <div class="mb-3" id="{{ $category['catégorie'] }}Options" style="display: none;">
                    <label for="{{ $category['catégorie'] }}Type" class="form-label">Type of {{ strtolower($category['catégorie']) }}</label>
                    <select class="form-select" id="{{ $category['id'] }}Type" name="type_id" required>
                        @foreach($category['options'] as $option)
                            <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach

            <script id="categoriesData" type="application/json">
                {!! json_encode($categories) !!}
            </script>

            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'annonce</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titre de l'annonce" value="{{ old('title') }}" required>

            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix de location par temps</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="prix" name='price' placeholder="Prix de location par temps" required>
                    <select class="form-select" id="currency" name="devis" required>
                        <option value="derham" selected>Dirham</option>
                        <option value="euro">Euro</option>
                        <option value="dollar">Dollar</option>
                    </select>
                    <select class="form-select" id="timeUnit" name="unit_time" required>
                        <option value="minute" selected>minute</option>
                        <option value="heure">heure</option>
                        <option value="jour">jour</option>
                        <option value="mois">mois</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="timeRange" class="form-label">Plage de temps (min-max)</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="minTime" name="minimum_time" placeholder="Temps min" required>
                        <input type="number" class="form-control" id="maxTime" name="max_time" placeholder="Temps max" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="citySelect" class="form-label">Choisir la ville</label>
                    <select class="form-select" id="citySelect" name="city" required>
                        <option value="">Sélectionnez une ville</option>
                        <option value="marrakech">Marrakech</option>
                        <option value="casablanca">Casablanca</option>
                        <option value="rabat">Rabat</option>
                        <option value="agadir">Agadir</option>
                        <option value="tanger">Tanger</option>
                    </select>
                </div>

                <div class="mb-3" id="sectorOptions" name="sector" style="display: none;">
                    <label for="sectorSelect" class="form-label">Choisir le secteur</label>
                    <select class="form-select" id="sectorSelect" name="sector">
                        <option value="Autre">Sélectionnez un secteur</option>
                        <option value="centre">Centre</option>
                        <option value="banlieue">Banlieue</option>
                        <option value="quartierHistorique">Quartier Historique</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">Description</label>
                <textarea class="form-control" id="validationTextarea" name="description" placeholder="Description de l'annonce" required>{{ old('description') }}</textarea>
            </div>

            <div class="container">
                <div class="row">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col">
                            <div class="mb-4 d-flex justify-content-center">
                                <img id="selectedImage{{ $i }}" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                alt="exemple de placeholder" style="width: 200px;" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                                    <label class="form-label m-1" for="customFile{{ $i }}">Choisir un fichier</label>
                                    <input type="file" class="form-control d-none" id="customFile{{ $i }}" name="image_urls[]" onchange="displaySelectedImage(event, 'selectedImage{{ $i }}')" />
                                </div>
                            </div>
                        </div>
                    @endfor
            </div>
            </div>
            <script>
                function displaySelectedImage(event, imageId) {
                    const file = event.target.files[0];
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const img = document.getElementById(imageId);
                        img.src = e.target.result;
                    }

                    if (file) {
                        reader.readAsDataURL(file);
                    }
                }
            </script>
            <div class="mb-4 text-center">
                <button class="btn btn-success btn-lg" type="submit" id="submitButton" disabled style="margin-top: 40px; width: 100%;">Soumettre le formulaire</button>
            </div>
        </form>
        <script src="{{ asset('/js/create.js') }}"></script>
    </section>
@endsection
