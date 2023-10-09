<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;

class AirportController extends Controller
{
    public function search(Request $request)
{ 
    $query = $request->input('query');
    if(!empty($query)){
        $results = Airport::where('airport_name', 'like', "%$query%")
                       ->get();

    return response()->json($results);
    }

    
}
}
