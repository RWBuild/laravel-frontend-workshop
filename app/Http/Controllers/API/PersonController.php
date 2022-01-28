<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person as ResourcesPerson;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{


    public function searchPeople(Request $request)
    {

        $people = Person::where('first_name', 'LIKE', "%{$request->q}%")
        ->orWhere('last_name', 'LIKE', "%{$request->q}%")
        ->orderBy('first_name', 'ASC')
            ->get();

        return response()->json([
            'success' => true,
            'people' => ResourcesPerson::collection($people)
        ]);
    }
}
