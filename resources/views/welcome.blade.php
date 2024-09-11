<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
      <a href="{{ url('/') }}">Accueil</a>
      <a href="{{ route('login') }}">Se connecter</a>
      <a href="{{ route('singup') }}">S'inscrire</a>
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

    <section class="body">
      <div id="slideshow">
        <img src="{{ asset('images/slideshow0.jpg') }}" id="slide-img" alt="image1" style="filter: brightness(0.5);">
        <div class="overlay"></div>
        <div id="text">Le 1er site au Maroc</div>
        <a class="bottom-btn" href="#categorie"><i class="fa-solid fa-circle-chevron-down"></i></a>
        <div class="service">
          <a href="{{ url('createannounce') }}" class="postez-btn">Postez une annonce</a>
          <a href="{{ url('announcement') }}" class="chercher-btn">Chercher une annonce</a>
        </div>
      </div>
    </section>

    <section class="hero-section" id="categorie">
      <h1>Catégorie</h1>
      <div class="card-grid">
        <a class="card" href="{{ url('announcement') }}">
          <div class="card__background" style="background-image: url({{ asset('images/voiture-dans-parking.jpg') }})"></div>
          <div class="card__content">
            <p class="card__category">CATÉGORIE</p>
            <h3 class="card__heading">Véhicule</h3>
          </div>
        </a>
        <a class="card" href="{{ url('announcement') }}">
          <div class="card__background" style="background-image: url({{ asset('images/riad.jpg') }})"></div>
          <div class="card__content">
            <p class="card__category">CATÉGORIE</p>
            <h3 class="card__heading">Maison et chambre</h3>
          </div>
        </a>
        <a class="card" href="{{ url('announcement') }}">
          <div class="card__background" style="background-image: url({{ asset('/images/fete.jfif') }})"></div>
          <div class="card__content">
            <p class="card__category">CATÉGORIE</p>
            <h3 class="card__heading">Fête</h3>
          </div>
        </a>
        <div>
    </section>

    <footer>
      <div class="footer-container">
        <div class="logo-footer">
          <img src="{{ asset('images/logo_name.png') }}" alt="Logo du site">
        </div>
      </div>
      <div class="bottom-footer">
        <div class="about">
          <h3>À propos de nous</h3>
          <p>Location en ligne</p>
        </div>
        <div class="contact">
          <h3>Contactez-nous</h3>
         <a href="tel:00212674942356"><i class="fa-solid fa-phone"> <span>  0674942356</span></i></a>
         <a href="mailto:admin@ajikri.com" ><i class="fa-solid fas fa-envelope"></i> <span> admin@ajikri.com</span></a>
        </div>
        <div class="social-icons">
          <h3>Médias sociaux</h3>
          <a href="https://wa.me/0674942356"><i class="fa-brands fa-whatsapp"></i> <span>Whatsapp</span></a>
          <a href="#"><i class="fa-brands fa-facebook"></i> <span>Facebook</span></a>
          <a href="#"><i class="fa-brands fab fa-youtube"></i> <span>Youtube</span></a>
          <a href="#"><i class="fa-brands fab fa-instagram"></i> <span>Instagram</span></a>
        </div>
      </div>
      <div class="footer-info">
        <p>&copy; 2023 Aji kri. Tous droits réservés.</p>
        <p>Conçu par les fondateurs d'Aji kri<a href="#"> Mohammed, Zouhair et Aguinane</a></p>
      </div>
    </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
  <script src="{{ asset('/js/slideshow.js') }}"></script>
  <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>

</body>

</html>
