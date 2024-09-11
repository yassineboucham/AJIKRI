<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function announcement()
    {
        return view('announcement');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Store the new singup
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
        // Update the singup
    }

    public function destroy($id)
    {
        // Delete the singup
    }

}
