@extends('layout')
@section('title', 'Edit Profile')
@section('content')
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{ asset('storage/' . $user->profile_picture) }}" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload form-->
                    <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <input class="form-control" type="file" name="profile_picture" accept="image/*" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <!-- Form Group (agency name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAgencyName">Agency Name</label>
                            <input class="form-control" id="inputAgencyName" name="agency_name" type="text" placeholder="Enter your Agency Name" value="{{ old('agency_name', $user->agency_name) }}" required>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputName">Name</label>
                                <input class="form-control" id="inputName" name="name" type="text" placeholder="Enter your name" value="{{ old('name', $user->name) }}" required>
                            </div>
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhoneNumber">Phone Number</label>
                                <input class="form-control" id="inputPhoneNumber" name="phone_number" type="tel" placeholder="Enter your phone number" value="{{ old('phone_number', $user->phone_number) }}" required>
                            </div>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (address)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputAddress">Address</label>
                                <input class="form-control" id="inputAddress" name="address" type="text" placeholder="Enter your address" value="{{ old('address', $user->address) }}" required>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputEmailAddress">Email Address</label>
                                <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter your email address" value="{{ old('email', $user->email) }}" required>
                            </div>
                        </div>
                        <!-- Form Group (change password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputNewPassword">New Password</label>
                            <input class="form-control" id="inputNewPassword" name="password" type="password" placeholder="Enter your new password">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                            <input class="form-control" id="inputConfirmPassword" name="password_confirmation" type="password" placeholder="Confirm your new password">
                        </div>
                        <!-- Form Group (bio)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputBio">Bio</label>
                            <textarea class="form-control" id="inputBio" name="bio" rows="3" placeholder="Enter your bio here...">{{ old('bio', $user->bio) }}</textarea>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn" style="background-color: #fc4331; color: white;" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
