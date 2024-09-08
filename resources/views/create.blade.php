@extends('layout')
@section('title', 'Create Announce')
@section('content')
    <section style="margin-top:100px;padding:0">
        <form class="was-validated">
            <div class="mb-3">
                <label for="categorySelect" class="form-label">Choisir la catégorie</label>
                <select class="form-select" id="categorySelect" required>
                    <option value="">Sélectionnez une catégorie</option>
                    <option value="vehicle">Véhicule</option>
                    <option value="moto">Moto</option>
                    <option value="maison">Maison et chambre</option>
                    <option value="fete">Fête</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="mb-3" id="vehicleOptions" style="display: none;">
                <label for="vehicleType" class="form-label">Type de véhicule</label>
                <select class="form-select" id="vehicleType">
                    <option value="">Sélectionnez un type</option>
                    <option value="voiture">Voiture</option>
                    <option value="moto">Moto</option>
                </select>
            </div>

            <div class="mb-3" id="motoOptions" style="display: none;">
                <label for="motoType" class="form-label">Type de moto</label>
                <select class="form-select" id="motoType">
                    <option value="">Sélectionnez un type</option>
                    <option value="moto50cc">Moto 50cc</option>
                    <option value="motoAvecPermis">Moto avec permis</option>
                    <option value="quad">Quad</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="mb-3" id="houseOptions" style="display: none;">
                <label for="houseType" class="form-label">Type de maison</label>
                <select class="form-select" id="houseType">
                    <option value="">Sélectionnez un type</option>
                    <option value="hotel">Hôtel</option>
                    <option value="riad">Riad</option>
                    <option value="appartement">Appartement</option>
                    <option value="villa">Villa</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="mb-3" id="partyOptions" style="display: none;">
                <label for="partyType" class="form-label">Type de fête</label>
                <select class="form-select" id="partyType">
                    <option value="">Sélectionnez un type</option>
                    <option value="salleFete">Salle des fêtes</option>
                    <option value="costumeHomme">Costume homme</option>
                    <option value="costumeFemme">Costume femme</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'annonce</label>
                <input type="text" class="form-control" id="title" placeholder="Titre de l'annonce" required>
              </div>
              <div class="mb-3">
                <label for="prix" class="form-label">Prix de location par temps</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="prix" placeholder="Prix de location par temps" required>
                    <select class="form-select" id="currency" required>
                        <option value="derham" selected>Dirham</option>
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
                        <input type="number" class="form-control" id="minTime" placeholder="Temps min" required>
                        <input type="number" class="form-control" id="maxTime" placeholder="Temps max" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="citySelect" class="form-label">Choisir la ville</label>
                    <select class="form-select" id="citySelect" required>
                        <option value="">Sélectionnez une ville</option>
                        <option value="marrakech">Marrakech</option>
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
                        <option value="centre">Centre</option>
                        <option value="banlieue">Banlieue</option>
                        <option value="quartierHistorique">Quartier Historique</option>
                    </select>
                </div>
              </div>
            <div class="mb-3">
              <label for="validationTextarea" class="form-label">Description</label>
              <textarea class="form-control" id="validationTextarea" placeholder="Description de l'annonce"></textarea>
            </div>

            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage1" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                        alt="example placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile1">Choose file</label>
                            <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage1')" />
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage2" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                        alt="example placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile2">Choose file</label>
                            <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedImage2')" />
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage3" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                        alt="example placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile3">Choose file</label>
                            <input type="file" class="form-control d-none" id="customFile3" onchange="displaySelectedImage(event, 'selectedImage3')" />
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage4" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                        alt="example placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile4">Choose file</label>
                            <input type="file" class="form-control d-none" id="customFile4" onchange="displaySelectedImage(event, 'selectedImage4')" />
                        </div>
                    </div>
                  </div>
                </div>
              </div>

            <div class="mb-4 text-center">
              <button class="btn btn-success btn-lg" type="submit" id="submitButton" disabled style="margin-top: 40px; width: 100%;">Submit Form</button>
            </div>
          </form>
    </section>
@endsection
