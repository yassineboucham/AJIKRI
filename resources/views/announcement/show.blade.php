@extends('layout')
@section('title', 'More Info')
@section('content')
<div class="card mb-3" style="max-width: 100%; margin-top: 100px;">
    <div class="row g-0">
        <div class="col-md-7">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    @php
                        $images = explode(',', $info->image_urls);
                    @endphp
                    @foreach($images as $index => $image)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($images as $index => $image)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $image) }}" alt="Image of {{ $info->title }}" style="width: 100%;">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card-body">
                <h5 class="card-title">{{ $info->title }}</h5>
                <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;">
                    <div style="border-radius: 50%; width: 10px; height: 10px; background-color: {{ $info->availability ? 'green' : 'red' }}; margin-right: 5px;"></div>
                    <p class="card-text dispo" style="color: {{ $info->availability ? 'green' : 'red' }}; margin: 0; font-size: 12px;">
                        {{ $info->availability ? 'Disponible' : 'Indisponible' }}
                    </p>
                </div>
                <small class="text-body-secondary">{{ $info->city }}/{{ $info->sector }}</small>
                <a href="https://www.google.com/maps?q={{ $info->city }}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </a>
                <p class="card-text" style="margin-top: 10px;">{{ $info->description }}</p>
            </div>
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Catégorie : {{ $info->categorie->categorie_Name }}</li>
                    <li class="list-group-item">Prix : {{ $info->price }} {{ $info->devis }}/{{ $info->unit_time }}</li>
                    <li class="list-group-item">Plage de temps (min-max) : De {{ $info->minimum_time }} Jours à {{ $info->max_time }} Jours</li>
                </ul>
            </div>
            <div style="margin: 10px; margin-top: 50px; padding: 15px; border: 0.5px solid;">
                <div class="image-section" style="display: inline-flex; align-items: center;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="User Avatar" style="border-radius: 50%; width: 50px; height: 50px; margin-right: 10px;">
                    <span class="username" style="font-size: 16px; font-weight: bold; margin-bottom: 20px;">{{ $info->user->name }}</span>
                </div>
                <div class="contact-info" style="display: inline; float: right;">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Contactez Pour Louer
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Email: <a href="mailto:{{ $info->user->email }}">{{ $info->user->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    Phone: <a href="tel:{{ $info->user->phone_number }}">{{ $info->user->phone_number }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
