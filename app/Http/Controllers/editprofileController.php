<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function editprofile()
    {
        return view('editprofile');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Store the new edit profile
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // Update the edit profile
    }

    public function destroy($id)
    {
        // Delete the edit profile
    }
}
