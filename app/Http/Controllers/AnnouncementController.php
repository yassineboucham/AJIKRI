<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

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
            ['id' => 1, 'catégorie' => 'vehicle', 'options' => [['id' => 3, 'name' => 'Sélectionnez un vehicle'], ['id' => 1, 'name' => 'voiture'], ['id' => 2, 'name' => 'moto']]],
            ['id' => 2, 'catégorie' => 'maison', 'options' => [ ['id' => 8, 'name' => 'Sélectionnez un maison'], ['id' => 4, 'name' => 'Hôtel'], ['id' => 5, 'name' => 'Riad'], ['id' => 6, 'name' => 'villa'], ['id' => 7, 'name' => 'Appartement']]],
            ['id' => 3, 'catégorie' => 'fete', 'options' => [['id' => 12, 'name' => 'Sélectionnez un fete'], ['id' => 9, 'name' => 'Salle des fêtes'], ['id' => 10, 'name' => 'Costume homme'], ['id' => 11, 'name' => 'Costume femme']]],
            ['id' => 4, 'catégorie' => 'Autre', 'options' => [['id' => 13, 'name' => 'Autre']]],
        ];
    }
    public function index()
    {
        return view('announcement.index', ['infos' => Announce::all()]);
    }

    public function create()
    {
        return view('announcement.create', ['categories' => self::categorie()]);
    }


    public function store(Request $request)
    {
        $announcement = new Announce();
        $announcement->categorie_id = $request->input('categorie_id');
        $announcement->type_id = $request->input('type_id');
        $announcement->title = $request->input('title');
        $announcement->description = $request->input('description');
        $announcement->price = $request->input('price');
        $announcement->devis = $request->input('devis');
        $announcement->unit_time = $request->input('unit_time');
        $announcement->minimum_time = $request->input('minimum_time');
        $announcement->max_time = $request->input('max_time');
        $announcement->city = $request->input('city');
        $announcement->sector = $request->input('sector');
        $announcement->image_urls = implode(',', $request->input('image_urls'));
        $announcement->user_id = 1;
        $announcement->availability = true;
        $announcement->save();

        return redirect()->route('announcement.index');
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
