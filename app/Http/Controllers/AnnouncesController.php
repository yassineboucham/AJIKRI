<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncesController extends Controller
{
    public function announces()
    {
        return view('announces');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Store the new announce
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
        // Update the announce
    }

    public function destroy($id)
    {
        // Delete the announce
    }
}
