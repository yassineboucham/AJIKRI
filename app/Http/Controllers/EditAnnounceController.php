<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAnnounceController extends Controller
{
    public function editannounce()
    {
        return view('editannounce');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Store the new edit announce
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
        // Update the edit announce
    }

    public function destroy($id)
    {
        // Delete the edit announce
    }
}
