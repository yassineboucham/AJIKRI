<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

class AnnouncesController extends Controller
{
    public function announces()
    {
        return view('announces', ['infos' => Announce::all()]);
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
