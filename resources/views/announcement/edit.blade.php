@extends('layout')
@section('title', 'Modifier une Annonce')
@section('content')
    <section style="margin-top:100px;padding:0">
        <form class="was-validated" action="{{ route('announcement.update', $info->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="categorySelect" class="form-label">Select a Category</label>
                <select class="form-select" id="categorySelect" name="categorie_id">
                    @foreach($categories as $category)
                        <option value="{{ $category['id'] }}" {{ $category['id'] == $info->categorie_id ? 'selected' : '' }}>
                            {{ $category['catégorie'] }}
                        </option>
                    @endforeach
                </select>
            </div>

            @foreach($categories as $category)
                <div class="mb-3" id="{{ $category['catégorie'] }}Options" style="display: none;">
                    <label for="{{ $category['catégorie'] }}Type" class="form-label">Type of {{ strtolower($category['catégorie']) }}</label>
                    <select class="form-select" id="{{ $category['id'] }}Type" name="type_id" required>
                        @foreach($category['options'] as $option)
                            <option value="{{ $option['id'] }}" {{ $option['id'] == $info->type_id ? 'selected' : '' }}>
                                {{ $option['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endforeach

            <script id="categoriesData" type="application/json">
                {!! json_encode($categories) !!}
            </script>

            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'annonce</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titre de l'annonce" value="{{ old('title', $info->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="prix" class="form-label">Prix de location par temps</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="prix" name='price' placeholder="Prix de location par temps" value="{{ old('price', $info->price) }}" required>
                    <select class="form-select" id="currency" name="devis" required>
                        <option value="derham" {{ old('devis', $info->devis) == 'derham' ? 'selected' : '' }}>Dirham</option>
                        <option value="euro" {{ old('devis', $info->devis) == 'euro' ? 'selected' : '' }}>Euro</option>
                        <option value="dollar" {{ old('devis', $info->devis) == 'dollar' ? 'selected' : '' }}>Dollar</option>
                    </select>
                    <select class="form-select" id="timeUnit" name="unit_time" required>
                        <option value="minute" {{ old('unit_time', $info->unit_time) == 'minute' ? 'selected' : '' }}>minute</option>
                        <option value="heure" {{ old('unit_time', $info->unit_time) == 'heure' ? 'selected' : '' }}>heure</option>
                        <option value="jour" {{ old('unit_time', $info->unit_time) == 'jour' ? 'selected' : '' }}>jour</option>
                        <option value="mois" {{ old('unit_time', $info->unit_time) == 'mois' ? 'selected' : '' }}>mois</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="timeRange" class="form-label">Plage de temps (min-max)</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="minTime" name="minimum_time" placeholder="Temps min" value="{{ old('minimum_time', $info->minimum_time) }}" required>
                        <input type="number" class="form-control" id="maxTime" name="max_time" placeholder="Temps max" value="{{ old('max_time', $info->max_time) }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="citySelect" class="form-label">Choisir la ville</label>
                    <select class="form-select" id="citySelect" name="city" required>
                        <option value="marrakech" {{ old('city', $info->city) == 'marrakech' ? 'selected' : '' }}>Marrakech</option>
                        <option value="casablanca" {{ old('city', $info->city) == 'casablanca' ? 'selected' : '' }}>Casablanca</option>
                        <option value="rabat" {{ old('city', $info->city) == 'rabat' ? 'selected' : '' }}>Rabat</option>
                        <option value="agadir" {{ old('city', $info->city) == 'agadir' ? 'selected' : '' }}>Agadir</option>
                        <option value="tanger" {{ old('city', $info->city) == 'tanger' ? 'selected' : '' }}>Tanger</option>
                    </select>
                </div>

                <div class="mb-3" id="sectorOptions" name="sector" style="display: none;">
                    <label for="sectorSelect" class="form-label">Choisir le secteur</label>
                    <select class="form-select" id="sectorSelect" name="sector">
                        <option value="centre" {{ old('sector', $info->sector) == 'centre' ? 'selected' : '' }}>Centre</option>
                        <option value="banlieue" {{ old('sector', $info->sector) == 'banlieue' ? 'selected' : '' }}>Banlieue</option>
                        <option value="quartierHistorique" {{ old('sector', $info->sector) == 'quartierHistorique' ? 'selected' : '' }}>Quartier Historique</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="validationTextarea" class="form-label">Description</label>
                <textarea class="form-control" id="validationTextarea" name="description" placeholder="Description de l'annonce" required>{{ old('description', $info->description) }}</textarea>
            </div>

            <div class="container">
                <div class="row">
                    @php
                        $images = explode(',', $info->image_urls);
                    @endphp
                    @foreach($images as $index => $image)
                        <div class="col">
                            <div class="mb-4 d-flex justify-content-center">
                                <img id="selectedImage{{ $index + 1 }}" src="{{ asset('storage/' . $image) }}" alt="Image de l'annonce" style="width: 200px;" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                                    <label class="form-label m-1" for="customFile{{ $index + 1 }}">Choisir un fichier</label>
                                    <input type="file" class="form-control d-none" id="customFile{{ $index + 1 }}" name="image_urls[]" onchange="displaySelectedImage(event, 'selectedImage{{ $index + 1 }}')" />
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                <button class="btn btn-success btn-lg" type="submit" id="submit" style="margin-top: 40px; width: 100%;">Modifier l'annonce</button>
            </div>
        </form>
    </section>
@endsection
