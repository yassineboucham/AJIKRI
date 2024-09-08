@extends('layout')
@section('title', 'Singup')
@section('content')
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
@endsection





    {{-- <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
 --}}
