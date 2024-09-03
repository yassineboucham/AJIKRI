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
  <title>Aji kri</title>
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


    <section style=" margin-top:100px;padding:0">
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
            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'annonce</label>
                <input type="text" class="form-control" id="title" placeholder="Titre de l'annonce"  value="Card title vehicle" required>
              </div>
              <div class="mb-3">
                <label for="prix" class="form-label">Prix de location par temps</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="prix" placeholder="Prix de location par temps" value="1000" required>
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
                        <input type="number" class="form-control" id="minTime" placeholder="Temps min" value="30" required>
                        <input type="number" class="form-control" id="maxTime" placeholder="Temps max" value="60" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="citySelect" class="form-label">Choisir la ville</label>
                    <select class="form-select" id="citySelect" required>
                        <option value="">Sélectionnez une ville</option>
                        <option value="marrakech" selected>Marrakech</option>
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
                        <option value="centre" selected>Centre</option>
                        <option value="banlieue">Banlieue</option>
                        <option value="quartierHistorique">Quartier Historique</option>
                    </select>
                </div>
              </div>
            <div class="mb-3">
              <label for="validationTextarea" class="form-label">Description</label>
              <textarea class="form-control" id="validationTextarea" placeholder="Description de l'annonce" value="Some quick example text to build on the card title and make up the bulk of the card's content.">Some quick example text to build on the card title and make up the bulk of the card's content.</textarea>
            </div>

            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage1" src="images/img2.jpg"
                        alt="example placeholder" style="width: 200px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div data-mdb-ripple-init class="btn" style="background-color: #ff3d00; color: white; border-radius: 0.25rem;">
                            <label class="form-label m-1" for="customFile1">Choose file</label>
                            <input type="file" class="form-control d-none" id="customFile1"  onchange="displaySelectedImage(event, 'selectedImage1')" />
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="selectedImage2" src="images/slideshow1.png"
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
                        <img id="selectedImage3" src="images/voiture-dans-parking.jpg"
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
                        <img id="selectedImage4" src="images/signin-bg.jpeg"
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
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
  <script src="{{ asset('/js/slideshow.js') }}"></script>
  <script src="{{ asset('/js/create.js') }}"></script>
  <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>

</body>

</html>
