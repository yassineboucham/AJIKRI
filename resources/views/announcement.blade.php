<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <title>Aji krii</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>

<body>

  <div class="container">

    <label class="mobile-label-toggle" for="toggle">
      <div class="mobile-menu">
        <div class="toggler">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>


    </label>
    <input type="checkbox" id="toggle">
    <div class="toggle-menu">


      <a href="{{ url('/') }}">Acceuil</a>
      <a href="{{ url('connection-aji-kri') }}">Se connecter</a>
      <a href="{{ url('inscription2') }}">S'inscrire</a>

    </div>
    <nav>
      <div class="mobile-menu"></div>
      <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo_baner.png') }}" alt=""></a></div>
      <div class="account">
        <div>
        <a href="{{ route('account') }}">
            <i class="fa-solid fa-user"></i>
        </a>
        </div>
      </div>

    </nav>



    <section class="h-100 gradient-custom-2 row" style="margin-top: 100px;">
        <div class="card" style="width: 18rem; margin: 30px;">
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
              <h5 class="card-title" style="display: inline;">Card title</h5>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;"><div style="border-radius: 50%; width: 10px; height: 10px; background-color: green; margin-right: 5px;"></div><p class="card-text" style="color: green; margin: 0; font-size: 12px;">Disponible</p></div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text">Prix: 300 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
            </div>
          </div>

          {{-- 2 --}}

          <div class="card" style="width: 18rem; margin: 30px;">
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
              <h5 class="card-title" style="display: inline;">Card title</h5>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;"><div style="border-radius: 50%; width: 10px; height: 10px; background-color: red; margin-right: 5px;"></div><p class="card-text" style="color: red; margin: 0; font-size: 12px;">Indisponible</p></div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text">Prix: 300 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
            </div>
          </div>

          {{-- 3 --}}

          <div class="card" style="width: 18rem; margin: 30px;">
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
              <h5 class="card-title" style="display: inline;">Card title</h5>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;"><div style="border-radius: 50%; width: 10px; height: 10px; background-color: green; margin-right: 5px;"></div><p class="card-text" style="color: green; margin: 0; font-size: 12px;">Disponible</p></div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text">Prix: 300 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
            </div>
          </div>

          {{-- 4 --}}

          <div class="card" style="width: 18rem; margin: 30px;">
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
              <h5 class="card-title" style="display: inline;">Card title</h5>
              <div style="position: absolute; top: 10px; right: 10px; display: inline-flex; align-items: center;"><div style="border-radius: 50%; width: 10px; height: 10px; background-color: green; margin-right: 5px;"></div><p class="card-text" style="color: green; margin: 0; font-size: 12px;">Disponible</p></div>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p class="card-text">Prix: 300 Dhs/h</p>
              <a href="#" class="btn btn-primary">Plus d'informations</a>
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
  <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
