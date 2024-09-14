<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    //data for the Announcement page
    public function AnnouncementInfo()
    {
        return [
            ['id' => 1,
             'catégorie' => 'vehicle',
             'options' => 'voiture',
             'tilte' => 'Renault Clio Diesel Automatique 2018',
             'vile' => 'Marrakech', 'secteur' => 'Tensift',
             'map' => 'https://www.google.com/maps/@31.476238,-8.1709848,9z?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D',
             'description' => "Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.",
             'prix' => '100',
             'devis' => 'Dhs',
             'temps' => 'jour',
             'min_temps' => '2',
             'max_temps' => '15',
             'images' => ['images/slideshow1.png', 'images/voiture-dans-parking.jpg', 'images/slideshow1.png', 'images/voiture-dans-parking.jpg'],
             'dispnibliter' => 'true',
            ],

            ['id' => 2,
            'catégorie' => 'vehicle',
            'options' => 'voiture',
            'tilte' => 'Renault Clio Diesel Automatique 2020',
            'vile' => 'Casa', 'secteur' => '2 Mars',
            'map' => 'https://www.google.com/maps/@31.476238,-8.1709848,9z?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D',
            'description' => "Un exemple de texte rapide pour construire sur le titre de la carte et constituer l'essentiel du contenu de la carte.",
            'prix' => '500',
            'devis' => 'Dhs',
            'temps' => 'jour',
            'min_temps' => '5',
            'max_temps' => '30',
            'images' => ['images/slideshow1.png', 'images/voiture-dans-parking.jpg', 'images/slideshow1.png', 'images/voiture-dans-parking.jpg'],
            'dispnibliter' => 'false',
           ],
        ];
    }
    public function index()
    {
        return view('announcement', ['infos' => self::AnnouncementInfo()]);
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
    $infos = self::AnnouncementInfo();
    $index = array_search($id, array_column($infos, 'id'));

    if ($index !== false) {
        // Debugging to ensure the correct info is passed
        return view('moreinfo', ['info' => $infos[$index]]);
    } else {
        return abort(404, 'Announcement not found');
    }
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
