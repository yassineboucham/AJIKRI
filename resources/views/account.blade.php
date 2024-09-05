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
      <a href="{{ route('login') }}">Se connecter</a>
      <a href="{{ route('singup') }}">S'inscrire</a>
      <a href="{{ url('editprofile') }}">Edit Profile</a>
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


    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center">
            <div class="col col-lg-9 col-xl-8">
              <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                      alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                      style="width: 150px; z-index: 1">
                    <a href="{{ route('editprofile') }}" class="btn btn-outline-dark text-body" style="z-index: 1;">
                      Modifier le profil
                    </a>
                  </div>
                  <div class="ms-3" style="margin-top: 110px;">
                    <h5>Yassine Boucham</h5>
                    <p>Hello, I am rein a different type of home for just family and students.
                    </p>
                  </div>
                </div>
                <div class="p-4 text-black bg-body-tertiary">
                  <div class="d-flex justify-content-end text-center py-1 text-body">
                    <div>
                      <p class="mb-1 h5">253</p>
                      <p class="small text-muted mb-0">Posts</p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4 text-black">
                  <div class="mb-3  text-body">
                    <p class="lead fw-normal mb-1">Numéro de télephone</p>
                    <div class="p-2 bg-body-tertiary">
                      <p class="font-italic mb-1">0766838215</p>
                    </div>
                  </div>
                  <div class="mb-3 text-body">
                    <p class="lead fw-normal mb-1">Email</p>
                    <div class="p-2 bg-body-tertiary">
                      <p class="font-italic mb-1">yassineboucham11@gmail.com</p>
                    </div>
                  </div>
                  <div class="mb-3 text-body">
                    <p class="lead fw-normal mb-1">L'address</p>
                    <div class="p-2 bg-body-tertiary">
                      <p class="font-italic mb-1">Lot socoma 1 Marrakech</p>
                    </div>
                  </div>
                    <a href="{{ route('announces') }}" class="btn" style="background-color: #fc4331; color: white;">Voir toutes les annonces</a>
                </div>
              </div>
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
  <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
