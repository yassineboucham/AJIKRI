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
        @foreach($infos as $info)
            <div class="card" style="width: 18rem; margin: 30px;" data-category="{{ $info['catégorie'] }}">
                <div id="carouselExampleIndicators{{ $info['id'] }}" class="carousel slide">
                    <div class="carousel-inner">
                        @if(is_array($info['images']) && count($info['images']) > 0)
                        @foreach($info['images'] as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset($image) }}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach
                        @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{ $info['id'] }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{ $info['id'] }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="display: inline;">{{ $info['tilte'] }}</h5>
                    <p class="card-text Ville_Secteur">{{ $info['vile'] }}/{{ $info['secteur'] }}</p>
                    <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;">
                        <div style="border-radius: 50%; width: 10px; height: 10px; background-color: {{ $info['dispnibliter'] === 'true' ? 'green' : 'red' }}; margin-right: 5px;"></div>
                        <p class="card-text dispo" style="color: {{ $info['dispnibliter'] === 'true' ? 'green' : 'red' }}; margin: 0; font-size: 12px;">{{ $info['dispnibliter'] === 'true' ? 'Disponible' : 'Indisponible' }}</p>
                    </div>
                    <p class="card-text">{{ $info['description'] }}</p>
                    <p class="card-text price">Prix: {{ $info['prix'] }} {{ $info['devis'] }}/{{ $info['temps'] }}</p>
                    <a href="{{ route('announcement.show', ['announcement' => $info['id']])}}"  class="btn btn-primary">Plus d'informations</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection
