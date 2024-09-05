<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <!-- MDB icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Aji krii</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

  <style>
    .gradient-custom {
      /* fallback for old browsers */
      background: #6a11cb;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgb(253, 83, 26), #ff4800);

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgb(238, 71, 10), rgba(243, 176, 134, 0.826))
    }

    button.btn.btn-outline-light.btn-lg.px-5 {
      border: none;
      background-color: #ed4112;
      box-shadow: 0 0 6px rgb(252 209 190 / 91%);
      color: #ffffff;
      border: 1px solid white;
      border-radius: 5px;
      transition: 0.5s;
    }

    button.btn.btn-outline-light.btn-lg.px-5:hover {
      background-color: #ffffff;
      color: #ff4800;
      border-color: #ff4800;

    transform: scale(1.1);
    }




  </style>
</head>

<body>


  <!--/*-------------------- navbar --------------------*/-->

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
  <!--/*-------------------- navbar --------------------*/-->

  <section class="min-vh-100 gradient-custom">
    <div class="container py-5 h-100 " >
      <div class="row d-flex justify-content-center align-items-center h-100 color">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-black text-white" style="border-radius: 1.2rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Se connecter</h2>
                <p class="text-white-50 mb-5">SVP entrer votre email et Mot de passe!</p>

                <div class="form-outline form-white mb-4 text-start">
                    <label class="form-label" for="typeEmailX">Email</label>
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Entrez votre email" required />
                </div>

                <div class="form-outline form-white mb-4 text-start">
                    <label class="form-label" for="typePasswordX">Mot de passe</label>
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Entrez votre mot de passe" required style="font-family: Arial, sans-serif;" />
                    <input type="checkbox" onclick="this.previousElementSibling.type = this.checked ? 'text' : 'password'"> Afficher le mot de passe
                </div>
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Mot de passe oublie?</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Connection</button>

              </div>

              <div>
                <p class="mb-0">Vous n'avez pas de compte ? <a href="inscription2.html" class="text-white-50 fw-bold">Inscrivez-vous</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

</body>

</html>
