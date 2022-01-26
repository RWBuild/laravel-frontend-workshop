<?php

namespace App\Http\Controllers;

use App\Http\Requests\Person\StoreFavoriteRequest;
use App\Models\Favorite;
use App\Models\Person;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriteRequest $request)
    {
        Favorite::create($request->validated());

        return redirect()->route('people.show', [$request->person_id]);
    }

}
