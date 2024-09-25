@extends('layout')
@section('title', 'Compte')
@section('content')
<section class="h-100 gradient-custom-2">
    @auth
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center">
            <div class="col col-lg-9 col-xl-8">
              <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp' }}"
                      alt="Image de profil" class="img-fluid img-thumbnail mt-4 mb-2"
                      style="width: 150px; z-index: 1">
                    <a href="{{ route('editprofile') }}" class="btn btn-outline-dark text-body" style="z-index: 1;">
                      Modifier le profil
                    </a>
                  </div>
                  <div class="ms-3" style="margin-top: 110px;">
                    <h5>{{ auth()->user()->name }}</h5>
                    <p>{{ auth()->user()->bio ?? 'Aucune bio disponible.' }}</p>
                  </div>
                </div>
                <div class="p-4 text-black bg-body-tertiary">
                  <div class="d-flex justify-content-end text-center py-1 text-body">
                    <form action="{{ route('logout') }}" method="POST" class="form-inline" style="margin-right: 10px">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                    <div>
                      <p class="mb-1 h5">{{ auth()->user()->announces()->count() }}</p>
                      <p class="small text-muted mb-0">Publications</p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4 text-black">
                  <div class="mb-3 text-body">
                    <p class="lead fw-normal mb-1">Numéro de téléphone</p>
                    <div class="p-2 bg-body-tertiary">
                      <p class="font-italic mb-1">{{ auth()->user()->phone_number }}</p>
                    </div>
                  </div>
                  <div class="mb-3 text-body">
                    <p class="lead fw-normal mb-1">Email</p>
                    <div class="p-2 bg-body-tertiary">
                      <p class="font-italic mb-1">{{ auth()->user()->email }}</p>
                    </div>
                  </div>
                  <div class="mb-3 text-body">
                    <p class="lead fw-normal mb-1">Adresse</p>
                    <div class="p-2 bg-body-tertiary">
                      <p class="font-italic mb-1">{{ auth()->user()->address }}</p>
                    </div>
                  </div>
                    <a href="{{ route('announces') }}" class="btn" style="background-color: #fc4331; color: white;">Voir toutes mes annonces</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    @endauth
</section>
@endsection
