<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Aji krii</title>
    <!-- MDB icon -->
    <title>Aji krii</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo_baner.png') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Aji krii</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo_baner.png') }}">

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
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1.2rem;">
                        <div class="card-body p-5 text-center">

                            <h2 class="fw-bold mb-4 text-uppercase">Inscrivez-vous</h2>
                            <p class="text-white-50 mb-4">Rejoignez-nous pour profiter de toutes nos options!</p>

                            <form>
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeNameX">Nom et Prénom</label>
                                    <input type="text" id="typeNameX" class="form-control form-control-lg" required />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeAgencyNameX">Nom d'agence</label>
                                    <input type="text" id="typeAgencyNameX" class="form-control form-control-lg" required />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeAddressX">Adresse</label>
                                    <input type="text" id="typeAddressX" class="form-control form-control-lg" required />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePhoneX">N° Téléphone</label>
                                    <input type="tel" id="typePhoneX" class="form-control form-control-lg" required />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" required />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Mot de passe</label>
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" required />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeCPasswordX">Confirmer mot de passe</label>
                                    <input type="password" id="typeCPasswordX" class="form-control form-control-lg" required />
                                </div>

                                <div class="form-check mb-4">
                                    <label class="form-check-label" for="flexCheckDefault">J'accepte les <a href="#!">conditions d'utilisation</a></label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required />
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">S'inscrire</button>
                            </form>

                            <div class="mt-4">
                                <p class="mb-0">Vous avez déjà un compte ? <a href="connection-aji-kri.html" class="text-white-50 fw-bold">Se connecter</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
</body>

</html>
