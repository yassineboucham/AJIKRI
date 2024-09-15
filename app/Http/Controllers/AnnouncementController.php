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
    private static function categorie()
    {
        return [
            ['id' => 1, 'catégorie' => 'vehicle', 'options' => ['voiture', 'moto', 'camion', 'autocar', 'autre']],
            ['id' => 2, 'catégorie' => 'maison', 'options' => ['Hôtel', 'Riad', 'villa', 'Appartement', 'autre']],
            ['id' => 3, 'catégorie' => 'fete', 'options' => ['Salle des fêtes', 'Costume homme', 'Costume femme', 'autre']],
            ['id' => 6, 'catégorie' => 'Autre', 'options' => ['Autre']],
        ];
    }
    public function index()
    {
        return view('announcement.index', ['infos' => self::AnnouncementInfo()]);
    }

    public function create()
    {
        return view('announcement.create', ['categories' => self::categorie()]);
    }

    public function store(Request $request)
    {
    }

public function show($id)
{
    $infos = self::AnnouncementInfo();
    $index = array_search($id, array_column($infos, 'id'));

    if ($index !== false) {
        return view('announcement.show', ['info' => $infos[$index]]);
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
