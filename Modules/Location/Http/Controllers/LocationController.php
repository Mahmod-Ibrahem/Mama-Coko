<?php

namespace Modules\Location\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Location\Entities\Location;
use Modules\Tour\Service\TourService;

class LocationController extends Controller
{

    public function __construct(protected TourService $tourService) {}
    /**
     * Display a listing of the resource.
     */

    public function show(string $location)
    {
        $location = Location::where('slug', $location)->first();
        $tours = $this->tourService->getTourByLocation($location->id);
        return view('location::index', compact('tours', 'location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('location::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
