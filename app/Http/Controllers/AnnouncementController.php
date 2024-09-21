<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

class AnnouncementController extends Controller
{
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
        $request->validate([
            'image_urls.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePaths = [];
        if ($request->hasFile('image_urls')) {
            foreach ($request->file('image_urls') as $file) {
                $path = $file->store('images', 'public');
                $imagePaths[] = $path;
            }
        }

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
        $announcement->image_urls = implode(',', $imagePaths);
        $announcement->user_id = 1;  // Assuming authenticated user
        $announcement->availability = 1;
        $announcement->save();

        return redirect()->route('announcement.index');
    }

    // Show a specific announcement
    public function show($id)
    {
        $info = Announce::with(['user', 'categorie'])->findOrFail($id);
        return view('announcement.show', ['info' => $info]);

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
