@extends('layout')

@section('content')
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
@endsection
