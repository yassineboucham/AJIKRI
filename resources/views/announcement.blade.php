@extends('layout')
@section('title', 'Annonce')
@section('content')
    <section class="container mb-3" style="margin-top: 100px;">
        <div class="row">
            <div class="col mb-3" style="margin-top: 20px;">
                <label for="filterSelect" class="form-label">Filtrer par catégorie</label>
                <select class="form-select" id="filterSelect" onchange="filterCards()">
                    <option value="">Sélectionnez une catégorie</option>
                    <option value="vehicle">Véhicule</option>
                    <option value="moto">Moto</option>
                    <option value="maison">Maison et chambre</option>
                    <option value="fete">Fête</option>
                </select>
            </div>

            <div class="col mb-3" style="margin-top: 20px;">
                <label for="priceRange" class="form-label">Filtrer par prix</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="minPrice" placeholder="Prix min" min="0" oninput="filterCards()">
                    <input type="number" class="form-control" id="maxPrice" placeholder="Prix max" min="0" oninput="filterCards()">
                </div>
            </div>

            <div class="col mb-3" style="margin-top: 20px;">
                <label for="villeSelect" class="form-label">Filtrer par Ville</label>
                <select id="villeSelect" class="form-select" onchange="filterCards()">
                    <option value="">Sélectionnez une ville</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Tanger">Tanger</option>
                    <option value="Casablanca">Casablanca</option>
                </select>
            </div>

            <div class="col mb-3" style="margin-top: 20px;">
                <label for="dispoSelect" class="form-label">Filtrer par Disponibilité</label>
                <div>
                    <input type="radio" id="dispoAll" name="dispoSelect" value="all" checked onchange="filterCards()">
                    <label for="dispoAll" style="font-size: 12px;">Tous</label>
                    <input type="radio" id="dispoDisponible" name="dispoSelect" value="disponible" onchange="filterCards()">
                    <label for="dispoDisponible" style="font-size: 12px;">Disponible</label>
                    <input type="radio" id="dispoIndisponible" name="dispoSelect" value="indisponible" onchange="filterCards()">
                    <label for="dispoIndisponible" style="font-size: 12px;">Indisponible</label>
                </div>
            </div>
        </div>
    </section>

    <section class="h-100 gradient-custom-2 row">
        <div class="card" style="width: 18rem; margin: 30px;" data-category="vehicle">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/voiture-dans-parking.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/signin-bg.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="display: inline;">Titre de la carte véhicule</h5>
                <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
                <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;">
                    <div style="border-radius: 50%; width: 10px; height: 10px; background-color: green; margin-right: 5px;"></div>
                    <p class="card-text dispo" style="color: green; margin: 0; font-size: 12px;">Disponible</p>
                </div>
                <p class="card-text">Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.</p>
                <p class="card-text price">Prix: 100 Dhs/h</p>
                <a href="{{ route('moreinfo') }}" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>

        {{-- 1.1 --}}

        <div class="card" style="width: 18rem; margin: 30px;" data-category="vehicle">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/voiture-dans-parking.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/signin-bg.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="display: inline;">Titre de la carte véhicule</h5>
                <p class="card-text Ville_Secteur">Tanger/Achakar</p>
                <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;">
                    <div style="border-radius: 50%; width: 10px; height: 10px; background-color: green; margin-right: 5px;"></div>
                    <p class="card-text dispo" style="color: green; margin: 0; font-size: 12px;">Disponible</p>
                </div>
                <p class="card-text">Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.</p>
                <p class="card-text price">Prix: 500 Dhs/h</p>
                <a href="{{ route('moreinfo') }}" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>

        {{-- 2 --}}

        <div class="card" style="width: 18rem; margin: 30px;" data-category="moto">
            <div id="carouselExampleIndicators1" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/voiture-dans-parking.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/signin-bg.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="display: inline;">Titre de la carte moto</h5>
                <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
                <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;">
                    <div style="border-radius: 50%; width: 10px; height: 10px; background-color: red; margin-right: 5px;"></div>
                    <p class="card-text dispo" style="color: red; margin: 0; font-size: 12px;">Indisponible</p>
                </div>
                <p class="card-text">Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.</p>
                <p class="card-text price">Prix: 1300 Dhs/h</p>
                <a href="{{ route('moreinfo') }}" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>

        {{-- 3 --}}

        <div class="card" style="width: 18rem; margin: 30px;" data-category="fete">
            <div id="carouselExampleIndicators2" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/voiture-dans-parking.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/signin-bg.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="display: inline;">Titre de la carte fête</h5>
                <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
                <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;">
                    <div style="border-radius: 50%; width: 10px; height: 10px; background-color: green; margin-right: 5px;"></div>
                    <p class="card-text dispo" style="color: green; margin: 0; font-size: 12px;">Disponible</p>
                </div>
                <p class="card-text">Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.</p>
                <p class="card-text price">Prix: 200 Dhs/h</p>
                <a href="{{ route('moreinfo') }}" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>

        {{-- 4 --}}

        <div class="card" style="width: 18rem; margin: 30px;" data-category="maison">
            <div id="carouselExampleIndicators4" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow1.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/voiture-dans-parking.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/signin-bg.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="display: inline;">Titre de la carte maison</h5>
                <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
                <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;">
                    <div style="border-radius: 50%; width: 10px; height: 10px; background-color: green; margin-right: 5px;"></div>
                    <p class="card-text dispo" style="color: green; margin: 0; font-size: 12px;">Disponible</p>
                </div>
                <p class="card-text">Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.</p>
                <p class="card-text price">Prix: 10000 Dhs/h</p>
                <a href="{{ route('moreinfo') }}" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>
    </section>
@endsection
