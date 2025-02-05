<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Post;
use App\Models\Admin\Category;
use App\Models\Admin\PlanYourTrip;
use Illuminate\Support\Facades\DB;


class PlanYourTripController extends Controller
{
    public function index()
    {
        // Paginate trips (e.g., 10 per page)
        $planYourTrips = PlanYourTrip::all();
        return view('admin.plan-your-trips.index', compact('planYourTrips'));
    }

    public function create()
    {
        return view('admin.plan-your-trips.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'from_city' => 'required|string|max:255',
            'to_city' => 'required|string|max:255',
            'number_of_people' => 'required|integer|min:1',
            'phone_number' => 'required|string|max:10',
            // 'status' => 'nullable|integer|in:0,1,2',
            // 'response_after_contact' => 'nullable|string',
            // 'last_contact_date' => 'nullable|date',
            // 'future_contact_date' => 'nullable|date',
        ]);

        $planYourTrip = new PlanYourTrip();
        $planYourTrip->name = $request->name;
        $planYourTrip->from_city = $request->from_city;
        $planYourTrip->to_city = $request->to_city;
        $planYourTrip->number_of_people = $request->number_of_people;
        $planYourTrip->phone_number = $request->phone_number;
        $planYourTrip->status = $request->status ?? 1;
        $planYourTrip->response_after_contact = $request->response_after_contact ?? null;
        $planYourTrip->last_contact_date = $request->last_contact_date ?? null;
        $planYourTrip->future_contact_date = $request->future_contact_date ?? null;
        $planYourTrip->save();

        return redirect()->route('admin.plan-your-trips.index')->with('success', 'Trip plan saved successfully!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PlanYourTrip $planYourTrip)
    {
        return view('plan_your_trips.show', compact('planYourTrip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlanYourTrip $planYourTrip)
    {

        // dd($planYourTrip);
        return view('admin.plan-your-trips.edit', compact('planYourTrip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'from_city' => 'required|string|max:255',
            'to_city' => 'required|string|max:255',
            'number_of_people' => 'required|integer|min:1',
            'phone_number' => 'required|string|max:13',
            'status' => 'nullable|integer|in:0,1,2',
            'response_after_contact' => 'nullable|string',
            'last_contact_date' => 'nullable|date',
            'future_contact_date' => 'nullable|date',
        ]);

        $planYourTrip = PlanYourTrip::findOrFail($id);
        $planYourTrip->update($request->all());

        return redirect()->route('admin.plan-your-trips.index')->with('success', 'Trip plan updated successfully!');
    }

    /**
     * Remove the specified resource from storage (Soft Delete).
     */
    public function destroy($id)
    {
        $planYourTrip = PlanYourTrip::findOrFail($id);
        $planYourTrip->delete();

        return redirect()->route('admin.plan-your-trips.index')->with('success', 'Trip plan deleted successfully!');
    }

    /**
     * Restore a soft-deleted trip.
     */
    public function restore($id)
    {
        PlanYourTrip::withTrashed()->find($id)->restore();
        return redirect()->route('plan-your-trips.index')->with('success', 'Trip restored successfully!');
    }

    /**
     * Permanently delete a soft-deleted trip.
     */
    public function forceDelete($id)
    {
        PlanYourTrip::withTrashed()->find($id)->forceDelete();
        return redirect()->route('plan-your-trips.index')->with('success', 'Trip permanently deleted!');
    }
}
