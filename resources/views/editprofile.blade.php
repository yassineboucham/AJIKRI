<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/editprofil.css') }}">
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


    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn" style="background-color: #fc4331; color: white;" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                                <label class="small mb-1" for="inputagenceName">AgenceName</label>
                            <input class="form-control" id="inputagenceName" type="text" placeholder="Enter your AgenceName" value="AgenceName">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <!-- Form Group (change password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputNewPassword">New Password</label>
                            <input class="form-control" id="inputNewPassword" type="password" placeholder="Enter your new password">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                            <input class="form-control" id="inputConfirmPassword" type="password" placeholder="Confirm your new password">
                        </div>
                        <!-- Form Group (bio)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputBio">Bio</label>
                            <textarea class="form-control" id="inputBio" rows="3" placeholder="Enter your bio here...">This is your bio.</textarea>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn" style="background-color: #fc4331; color: white;" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
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
