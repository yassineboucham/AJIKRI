@extends('layout')
@section('content')
    <section class="container  mb-3" style="margin-top: 100px;">
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

    <section class="h-100 gradient-custom-2 row" >
        <div class="card" style="width: 18rem; margin: 30px;" data-category="vehicle"
             data-title="Card title vehicle"
             data-price="100 Dhs/h"
             data-ville="Marrakech/Tensift"
             data-description="Some quick example text to build on the card title and make up the bulk of the card's content."
             data-images='["{{ asset('images/img2.jpg') }}", "{{ asset('images/slideshow1.png') }}", "{{ asset('images/voiture-dans-parking.jpg') }}", "{{ asset('images/signin-bg.jpeg') }}"]'>
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
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="card-body">
              <h5 class="card-title" style="display: inline;">Card title vehicle</h5>
              <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center; margin-right: 5px;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" onchange="updateAvailability(this)" checked>
                    <label class="form-check-label dispo" style="color: green;">Disponible</label>
                </div>
            </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text price">Prix: 100 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
            <div class="button-group" style="margin-top: 10px;">
                <button class="btn btn-danger" onclick="deleteCard(this)">Supprimer</button>
                <button class="btn btn-warning" onclick="editCard(this)">Modifier</button>
            </div>
            </div>
          </div>

          {{-- 1.1 --}}

        <div class="card" style="width: 18rem; margin: 30px;" data-category="vehicle"
             data-title="Card title vehicle"
             data-price="500 Dhs/h"
             data-ville="Tanger/Achakar"
             data-description="Some quick example text to build on the card title and make up the bulk of the card's content."
             data-images='["{{ asset('images/img2.jpg') }}", "{{ asset('images/slideshow1.png') }}", "{{ asset('images/voiture-dans-parking.jpg') }}", "{{ asset('images/signin-bg.jpeg') }}"]'>
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
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="card-body">
              <h5 class="card-title" style="display: inline;">Card title vehicle</h5>
              <p class="card-text Ville_Secteur">Tanger/Achakar</p>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center; margin-right: 5px;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" onchange="updateAvailability(this)" checked>
                    <label class="form-check-label dispo" style="color: green;">Disponible</label>
                </div>
            </div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text price">Prix: 500 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
              <div class="button-group" style="margin-top: 10px;">
                <button class="btn btn-danger" onclick="deleteCard(this)">Supprimer</button>
                <button class="btn btn-warning" onclick="editCard(this)">Modifier</button>
               </div>
            </div>
          </div>

          {{-- 2 --}}

          <div class="card" style="width: 18rem; margin: 30px;" data-category="moto"
               data-title="Card title moto"
               data-price="1300 Dhs/h"
               data-ville="Marrakech/Tensift"
               data-description="Some quick example text to build on the card title and make up the bulk of the card's content."
               data-images='["{{ asset('images/img2.jpg') }}", "{{ asset('images/slideshow1.png') }}", "{{ asset('images/voiture-dans-parking.jpg') }}", "{{ asset('images/signin-bg.jpeg') }}"]'>
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
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="card-body">
              <h5 class="card-title" style="display: inline;">Card title moto</h5>
              <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center; margin-right: 5px;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" onchange="updateAvailability(this)" checked>
                    <label class="form-check-label dispo" style="color: green;">Disponible</label>
                </div>
            </div>

              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text price">Prix: 1300 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
              <div class="button-group" style="margin-top: 10px;">
                <button class="btn btn-danger" onclick="deleteCard(this)">Supprimer</button>
                <button class="btn btn-warning" onclick="editCard(this)">Modifier</button>
            </div>
            </div>
          </div>

          {{-- 3 --}}

          <div class="card" style="width: 18rem; margin: 30px;" data-category="fete"
               data-title="Card title fete"
               data-price="200 Dhs/h"
               data-ville="Marrakech/Tensift"
               data-description="Some quick example text to build on the card title and make up the bulk of the card's content."
               data-images='["{{ asset('images/img2.jpg') }}", "{{ asset('images/slideshow1.png') }}", "{{ asset('images/voiture-dans-parking.jpg') }}", "{{ asset('images/signin-bg.jpeg') }}"]'>
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
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="card-body">
              <h5 class="card-title" style="display: inline;">Card title fete</h5>
              <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center; margin-right: 5px;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked3" onchange="updateAvailability(this)" checked>
                    <label class="form-check-label dispo" style="color: green;">Disponible</label>
                </div>
            </div>

              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text price">Prix: 200 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
              <div class="button-group" style="margin-top: 10px;">
                <button class="btn btn-danger" onclick="deleteCard(this)">Supprimer</button>
                <button class="btn btn-warning" onclick="editCard(this)">Modifier</button>
            </div>
            </div>
          </div>

          {{-- 4 --}}

          <div class="card" style="width: 18rem; margin: 30px;" data-category="maison"
               data-title="Card title maison"
               data-price="10000 Dhs/h"
               data-ville="Marrakech/Tensift"
               data-description="Some quick example text to build on the card title and make up the bulk of the card's content."
               data-images='["{{ asset('images/img2.jpg') }}", "{{ asset('images/slideshow1.png') }}", "{{ asset('images/voiture-dans-parking.jpg') }}", "{{ asset('images/signin-bg.jpeg') }}"]'>
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
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="card-body">
              <h5 class="card-title" style="display: inline;">Card title maison</h5>
              <p class="card-text Ville_Secteur">Marrakech/Tensift</p>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center; margin-right: 5px;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked4" onchange="updateAvailability(this)" checked>
                    <label class="form-check-label dispo" style="color: green;">Disponible</label>
                </div>
            </div>

              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text price">Prix: 10000 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
              <div class="button-group" style="margin-top: 10px;">
                <button class="btn btn-danger" onclick="deleteCard(this)">Supprimer</button>
                <button class="btn btn-warning" onclick="editCard(this)">Modifier</button>
            </div>
            </div>
          </div>
    </section>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
  <script src="{{ asset('/js/slideshow.js') }}"></script>
  <script src="{{ asset('/js/announce.js') }}"></script>
  <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
  function editCard(button) {
      const card = button.closest('.card');
      const title = card.getAttribute('data-title');
      const price = card.getAttribute('data-price');
      const ville = card.getAttribute('data-ville');
      const description = card.getAttribute('data-description');
      const images = JSON.parse(card.getAttribute('data-images'));

      const form = document.createElement('form');
      form.method = 'POST';
      form.action = '{{ route('editannounce') }}';

      form.innerHTML = `
          @csrf
          <input type="hidden" name="title" value="${title}">
          <input type="hidden" name="price" value="${price}">
          <input type="hidden" name="ville" value="${ville}">
          <input type="hidden" name="description" value="${description}">
          <input type="hidden" name="images" value='${JSON.stringify(images)}'>
      `;

      document.body.appendChild(form);
      form.submit();
  }
  </script>
@endsection
