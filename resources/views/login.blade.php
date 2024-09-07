
@extends('layout')
@section('content')
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
@endsection



  {{-- <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script> --}}

</body>

</html>
