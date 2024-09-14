<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAnnounceController extends Controller
{
        //data for the createannounce page
        private static function categorie()
        {
            return [
                ['id' => 1, 'catégorie' => 'vehicle', 'options' => ['voiture', 'moto', 'camion', 'autocar', 'autre']],
                ['id' => 2, 'catégorie' => 'maison', 'options' => ['Hôtel', 'Riad', 'villa', 'Appartement', 'autre']],
                ['id' => 3, 'catégorie' => 'fete', 'options' => ['Salle des fêtes', 'Costume homme', 'Costume femme', 'autre']],
                ['id' => 6, 'catégorie' => 'Autre', 'options' => ['Autre']],
            ];
        }

    public function editannounce()
    {
        return view('editannounce', ['categories' => self::categorie()]);
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
