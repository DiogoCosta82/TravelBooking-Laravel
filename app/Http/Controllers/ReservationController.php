<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller as BaseController;

class ReservationController extends BaseController
{
    public function index()
    {
        $reservations = Reservation::all()->sortBy('name');
        return view('trips.index')->with(['reservations' => $reservations]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trips.create')->with([
            'command' => 'create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer|min:0',
            'pays' => 'required|string|min:3'
        ]);

        $reservation = [
            'name' => $request->name,
            'age' => $request->age,
            'pays' => $request->pays
        ];

        Reservation::create([
            'name' => $request->name,
            'age' => $request->age,
            'pays' => $request->pays
        ]);


        return view('trips.confirm')->with($reservation);
    }

    public function destroy(string $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect(route('resa.index'));
    }

    public function show(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('trips.create')->with([
            'command' => 'show',
            'reservation' => $reservation
        ]);
    }

    public function edit(string $id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('trips.create')->with([
            'command' => 'update',
            'reservation' => $reservation

        ]);
    }

    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer|min:0',
            'pays' => 'required|string|min:3'
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->name = $request->name;
        $reservation->age =  $request->age;
        $reservation->pays =  $request->pays;
        $reservation->save();

        return redirect(route('resa.index'));
    }
}
