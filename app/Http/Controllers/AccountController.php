<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account()
    {
        return view('account');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Store the new account
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
        // Update the account
    }

    public function destroy($id)
    {
        // Delete the account
    }
}
