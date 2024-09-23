<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

class AnnouncementController extends Controller
{
    private static function categorie()
    {
        return [
            ['id' => 4, 'catégorie' => 'Select a category', 'options' => [['id' => 13, 'name' => 'Autre']]],
            ['id' => 1, 'catégorie' => 'vehicle', 'options' => [['id' => 3, 'name' => 'Sélectionnez un vehicle'], ['id' => 1, 'name' => 'voiture'], ['id' => 2, 'name' => 'moto']]],
            ['id' => 2, 'catégorie' => 'maison', 'options' => [ ['id' => 8, 'name' => 'Sélectionnez un maison'], ['id' => 4, 'name' => 'Hôtel'], ['id' => 5, 'name' => 'Riad'], ['id' => 6, 'name' => 'villa'], ['id' => 7, 'name' => 'Appartement']]],
            ['id' => 3, 'catégorie' => 'fete', 'options' => [['id' => 12, 'name' => 'Sélectionnez un fete'], ['id' => 9, 'name' => 'Salle des fêtes'], ['id' => 10, 'name' => 'Costume homme'], ['id' => 11, 'name' => 'Costume femme']]],
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'devis' => 'nullable|string',
            'unit_time' => 'required|string|max:255',
            'minimum_time' => 'required|integer|min:1',
            'max_time' => 'nullable|integer',
            'city' => 'required|string|max:255',
            'sector' => 'nullable|string|max:255',
            'categorie_id' => 'required|exists:categories,categorie_id',
            'type_id' => 'required|exists:types,type_id',
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
        $announcement->categorie_id = strip_tags($request->input('categorie_id'));
        $announcement->type_id = strip_tags($request->input('type_id'));
        $announcement->title = strip_tags($request->input('title'));
        $announcement->description = strip_tags($request->input('description'));
        $announcement->price = strip_tags($request->input('price'));
        $announcement->devis = strip_tags($request->input('devis'));
        $announcement->unit_time = strip_tags($request->input('unit_time'));
        $announcement->minimum_time = strip_tags($request->input('minimum_time'));
        $announcement->max_time = strip_tags($request->input('max_time'));
        $announcement->city = strip_tags($request->input('city'));
        $announcement->sector = strip_tags($request->input('sector'));
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
        $info = Announce::with('categorie', 'type')->findOrFail($id);
        return view('announcement.edit', [
            'info' => $info,
            'categories' => self::categorie()
        ]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'devis' => 'nullable|string',
            'unit_time' => 'required|string|max:255',
            'minimum_time' => 'required|integer|min:1',
            'max_time' => 'nullable|integer',
            'city' => 'required|string|max:255',
            'sector' => 'nullable|string|max:255',
            'categorie_id' => 'required|exists:categories,categorie_id',
            'type_id' => 'required|exists:types,type_id',
            'image_urls.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Retrieve the existing announcement
        $to_update = Announce::with('categorie', 'type')->findOrFail($id);

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('image_urls')) {
            foreach ($request->file('image_urls') as $file) {
                $path = $file->store('images', 'public');
                $imagePaths[] = $path;
            }
            // Append new images to existing ones
            $existingImages = $to_update->image_urls ? explode(',', $to_update->image_urls) : [];
            $to_update->image_urls = implode(',', array_merge($existingImages, $imagePaths));
        }

        // Update the announcement fields
        $to_update->categorie_id = strip_tags($request->input('categorie_id'));
        $to_update->type_id = strip_tags($request->input('type_id'));
        $to_update->title = strip_tags($request->input('title'));
        $to_update->description = strip_tags($request->input('description'));
        $to_update->price = strip_tags($request->input('price'));
        $to_update->devis = strip_tags($request->input('devis'));
        $to_update->unit_time = strip_tags($request->input('unit_time'));
        $to_update->minimum_time = strip_tags($request->input('minimum_time'));
        $to_update->max_time = strip_tags($request->input('max_time'));
        $to_update->city = strip_tags($request->input('city'));
        $to_update->sector = strip_tags($request->input('sector'));

        // Save the updated announcement
        $to_update->save();

        // Redirect to the announcements page
        return redirect()->route('announces')->with('success', 'Announcement updated successfully!');
    }


    public function destroy($id)
    {
        // Delete the singup
    }

}
