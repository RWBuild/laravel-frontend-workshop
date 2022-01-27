<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\Favorite;
use App\Models\Person;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalPeople = Person::count();
        $totalFavorites = Favorite::count();
        $badges = Badge::count();

        return view(
            'dashboard.index',
            compact('totalPeople', 'totalFavorites', 'badges')
        );
    }
}
