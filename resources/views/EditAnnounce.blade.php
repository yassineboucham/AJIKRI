@extends('layout')
@section('title', 'Modifier l\'annonce')
@section('content')
    <section style="margin-top:100px;padding:0">
        <form class="was-validated">
            <div class="mb-3">
                <label for="categorySelect" class="form-label">Choisir la catégorie</label>
                <select class="form-select" id="categorySelect" required>
                    <option value="vehicle" selected>vehicle</option>
                    @foreach($categories as $category)
                        @if ($category['catégorie'] != "vehicle")
                            <option value="{{ $category['catégorie'] }}">{{ $category['catégorie'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            @foreach($categories as $category)
                <div class="mb-3" id="{{ $category['catégorie'] }}Options" style="display: none;">
                    <label for="{{ $category['catégorie'] }}Type" class="form-label">Type de {{ strtolower($category['catégorie']) }}</label>
                    <select class="form-select" id="{{ $category['catégorie'] }}Type">
                        <option value="">Sélectionnez un type</option>
                        @foreach($category['options'] as $option)
                            <option value="{{ strtolower($option) }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach
            <script id="categoriesData" type="application/json">
                {!! json_encode($categories) !!}
            </script>

            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'annonce</label>
                <input type="text" class="form-control" id="title" placeholder="Titre de l'annonce"  value="Titre de l'annonce véhicule" required>
              </div>
              <div class="mb-3">
                <label for="prix" class="form-label">Prix de location par temps</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="prix" placeholder="Prix de location par temps" value="1000" required>
                    <select class="form-select" id="currency" required>
                        <option value="dirham" selected>Dirham</option>
                        <option value="euro">Euro</option>
                        <option value="dollar">Dollar</option>
                    </select>
                    <select class="form-select" id="timeUnit" required>
                        <option value="minute" selected>minute</option>
                        <option value="heure">heure</option>
                        <option value="jour">jour</option>
                        <option value="mois">mois</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="timeRange" class="form-label">Plage de temps (min-max)</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="minTime" placeholder="Temps min" value="30" required>
                        <input type="number" class="form-control" id="maxTime" placeholder="Temps max" value="60" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="citySelect" class="form-label">Choisir la ville</label>
                    <select class="form-select" id="citySelect" required>
                        <option value="">Sélectionnez une ville</option>
                        <option value="marrakech" selected>Marrakech</option>
                        <option value="casablanca">Casablanca</option>
                        <option value="rabat">Rabat</option>
                        <option value="agadir">Agadir</option>
                        <option value="tanger">Tanger</option>
                    </select>
                </div>

                <div class="mb-3" id="sectorOptions" style="display: none;">
                    <label for="sectorSelect" class="form-label">Choisir le secteur</label>
                    <select class="form-select" id="sectorSelect">
                        <option value="">Sélectionnez un secteur</option>
                        <option value="centre" selected>Centre</option>
                        <option value="banlieue">Banlieue</option>
                        <option value="quartierHistorique">Quartier Historique</option>
                    </select>
                </div>
              </div>
            <div class="mb-3">
              <label for="validationTextarea" class="form-label">Description</label>
              <textarea class="form-control" id="validationTextarea" placeholder="Description de l'annonce" value="Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.">Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.</textarea>
            </div>

            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage1" src="images/img2.jpg"
                        alt="exemple de placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile1">Choisir un fichier</label>
                            <input type="file" class="form-control d-none" id="customFile1"  onchange="displaySelectedImage(event, 'selectedImage1')" />
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage2" src="images/slideshow1.png"
                        alt="exemple de placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile2">Choisir un fichier</label>
                            <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedImage2')" />
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage3" src="images/voiture-dans-parking.jpg"
                        alt="exemple de placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile3">Choisir un fichier</label>
                            <input type="file" class="form-control d-none" id="customFile3" onchange="displaySelectedImage(event, 'selectedImage3')" />
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage4" src="images/signin-bg.jpeg"
                        alt="exemple de placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile4">Choisir un fichier</label>
                            <input type="file" class="form-control d-none" id="customFile4" onchange="displaySelectedImage(event, 'selectedImage4')" />
                        </div>
                    </div>
                  </div>
                </div>
              </div>

            <div class="mb-4 text-center">
              <button class="btn btn-success btn-lg" type="submit" id="submitButton" disabled style="margin-top: 40px; width: 100%;">Soumettre le formulaire</button>
            </div>
          </form>
    </section>
@endsection
