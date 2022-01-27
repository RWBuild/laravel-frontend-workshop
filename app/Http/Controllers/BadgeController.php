<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignBadgeRequest;
use App\Models\Badge;
use App\Models\Person;
use Illuminate\Http\Request;

class BadgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badges = Badge::paginate(30);

        return view('badges.index', compact('badges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function show(Badge $badge)
    {
        return view('badges.show', compact('badge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function edit(Badge $badge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Badge $badge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Badge $badge)
    {
        //
    }

    /**
     * Assign badge to a person
     */
    public function assignToPerson(AssignBadgeRequest $request)
    {
        $badge = Badge::find($request->badge_id);

        $badge->peopleBadges()->attach($request->person_id);

        return redirect()
            ->route('dashboard.index')
            ->with('success', 'Badge successfuly assigned');
    }

    /**
     * Show the form to assign a badge
     */
    public function assign()
    {
        $people = Person::all();
        $badges = Badge::all();

        return view('badges.assign', compact('people', 'badges'));
    }

}
