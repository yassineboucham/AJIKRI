<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreinfoController extends Controller
{
    public function moreinfo()
    {
        return view('moreinfo');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Store the new moreinfo
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
        // Update the moreinfo
    }

    public function destroy($id)
    {
        // Delete the moreinfo
    }
}
