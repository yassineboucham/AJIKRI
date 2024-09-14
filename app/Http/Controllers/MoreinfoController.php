<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreinfoController extends Controller
{
    protected $announcementController;

    public function __construct(AnnouncementController $announcementController)
    {
        $this->announcementController = $announcementController;
    }

    public function moreinfo($id)
    {
        $info = $this->announcementController->AnnouncementInfo();
        $index = array_search($id, array_column($info, 'id'));

        if ($index !== false) {
            return view('moreinfo', ['info' => $info[$index]]);
        } else {
            return abort(404, 'Announcement not found');
        }
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
