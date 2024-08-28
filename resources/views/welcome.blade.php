<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <title>Aji krii</title>
  <link rel="icon" type="image/x-icon" href="image/;kgkufff.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<style>

    :root {
        --background-dark: #2d3548;
        --text-light: rgba(255, 255, 255, 0.6);
        --text-lighter: rgba(255, 255, 255, 0.9);
        --spacing-s: 8px;
        --spacing-m: 16px;
        --spacing-l: 40px;
        --spacing-xl: 32px;
        --spacing-xxl: 64px;
        --width-container: 1200px;
      }

      * {
        border: 0;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      html {
        height: 100%;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
      }

      body {
        height: 100%;
      }

      .hero-section {
        align-items: flex-start;
        background-image: linear-gradient(360deg, #000000 50%, #000000 100%);
        display: flex;
        min-height: 100vh;
        justify-content: center;
        padding: var(--spacing-xxl) var(--spacing-l);
        align-items: center;
        flex-direction: column;
        color: white;
        gap: 50px;

      }

      .hero-section h1 {
        font-size: 42px;
        text-transform: uppercase;
      }


      .card-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-column-gap: var(--spacing-l);
        grid-row-gap: var(--spacing-l);
        max-width: var(--width-container);
        width: 100%;
      }

      @media(min-width: 540px) {
        .card-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media(min-width: 960px) {
        .card-grid {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      .card {
        list-style: none;
        position: relative;
      }

      .card:before {
        content: '';
        display: block;
        padding-bottom: 150%;
        width: 100%;
      }

      .card__background {
        background-size: cover;
        background-position: center;
        border-radius: var(--spacing-l);
        bottom: 0;
        filter: brightness(0.75) saturate(1.2) contrast(0.85);
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transform-origin: center;
        transform: scale(1) translateZ(0);
        transition:
          filter 200ms linear,
          transform 200ms linear;
      }


      .card:hover .card__background {
        transform: scale(1.05) translateZ(0);
      }

      .card-grid:hover>.card:not(:hover) .card__background {
        filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
      }

      .card__content {
        left: 0;
        padding: var(--spacing-l);
        position: absolute;
        top: 0;
      }

      .card__category {
        color: var(--text-light);
        font-size: 0.9rem;
        margin-bottom: var(--spacing-s);
        text-transform: uppercase;
      }

      .card__heading {
        color: var(--text-lighter);
        font-size: 1.9rem;
        text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
        line-height: 1.4;
        word-spacing: 100vw;
      }

      .hero-section{
        /* height: 450px; */
      }
      .card-grid{
        /* height: 450px; */
      }
      .card{
        height: 450px;
      }


      .bottom-footer .contact {

    flex: 1;
    display: flex;
    flex-direction: column;
    padding: 30px;
    justify-content: start;
    text-align: left;
    gap: 10px;
    text-decoration: none;
/*
    border-left: 1px solid black;
    border-right: 1px solid black; */
}

.bottom-footer .contact a{
  text-decoration: none;
  color: white;
}

.bottom-footer .contact a span{
  padding-left: 10px;
}

</style>
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


      <a href="index.html">Acceuil</a>
      <a href="connection-aji-kri.html">Se connecter</a>
      <a href="inscription2.html">S'inscrire</a>

    </div>
    <nav>
      <div class="mobile-menu"></div>
      <div class="logo"><a href="index.html"><img src="image/;kgkufff.png" alt=""></a></div>
      <div class="search">
        <form action="">
          <div class="search-form">
            <input type="search">
            <i class="fa-solid fa-search"></i>
          </div>
        </form>
      </div>

    </nav>


    <section class="body">
      <div id="slideshow">
        <img src="image/bg1.webp" id="slide-img" alt="image1">
        <div class="overlay"></div>
        <div id="text">Le 1er site au Maroc</div>
        <a class="bottom-btn" href="#categorie"><i class="fa-solid fa-circle-chevron-down"></i></a>
        <div class="service">
          <a href="postez-test.html" class="postez-btn">Postez une annonce</a>
          <a href="chercher-annonce.html" class="chercher-btn">Chercher une annonce</a>
        </div>
      </div>


    </section>
    <section class="hero-section" id="categorie">
      <h1>Catégorie</h1>
      <div class="card-grid">
        <a class="card" href="chercher-annonce.html">
          <div class="card__background" style="background-image: url(image/voiture-dans-parking.jpg)"></div>
          <div class="card__content">
            <p class="card__category">CATÉGORIE</p>
            <h3 class="card__heading">Voiture</h3>
          </div>
        </a>
        <a class="card" href="chercher-annonce.html">
          <div class="card__background" style="background-image: url(image/close-up-vintage-motorcycle.jpg)"></div>
          <div class="card__content">
            <p class="card__category">CATÉGORIE</p>
            <h3 class="card__heading">Moto</h3>
          </div>
        </a>

        <a class="card" href="chercher-annonce.html">
          <div class="card__background" style="background-image: url(image/location.jpg)"></div>
          <div class="card__content">
            <p class="card__category">CATÉGORIE</p>
            <h3 class="card__heading">Autre</h3>
          </div>
        </a>
        <div>
    </section>

    <footer>
      <div class="footer-container">
        <div class="logo-footer">
          <img src="image/;kgkufff.png" alt="Website Logo">
          <h2>Aji krii</h2>
        </div>

      </div>
      <div class="bottom-footer">

        <div class="about">
          <h3>About Us</h3>
          <p> Location en ligne </p>
        </div>
        <div class="contact">
          <h3>Contact Us</h3>
         <a href="tel:00212674942356"><i class="fa-solid fa-phone"> <span>  0674942356</span></i></a>
         <a href="mailto:admin@ajikri.com" ><i class="fa-solid fas fa-envelope"></i> <span> admin@ajikri.com</span></a>

        </div>
        <div class="social-icons">
          <h3>social media</h3>
          <a href="https://wa.me/0674942356"><i class="fa-brands fa-whatsapp"></i> <span>Whatsapp</span></a>
          <a href="#"><i class="fa-brands fa-facebook"></i> <span>Facebook</span></a>
          <!-- <a href="#"><i class="fa-solid fa-phone"></i><span></span></a> -->
          <a href="#"><i class="fa-brands fab fa-youtube"></i> <span>youtube</span></a>
          <a href="#"><i class="fa-brands fab fa-instagram"></i> <span>instagram</span></a>
        </div>

      </div>
      <div class="footer-info">
        <p>&copy; 2023 Aji kri . All rights reserved.</p>
        <p>Designed by Aji kri founders<a href="#"> Mohammmed,Zouhair et aguinane </a></p>
      </div>
    </footer>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
  <script src="slideshow.js"></script>
  <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>




</body>

</html>
