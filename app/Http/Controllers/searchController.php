<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;


class searchController extends Controller
{

    public function autoComplete(Request $request)
    {
        if ($request->address) {
            $input = $request->address;
            $data = Place::where('address', 'LIKE', "%$input%")->get();
            $output =  '<ul  class="px-6 bg-gray-100 rounded">';
            foreach ($data as $row) {
                $output .=  '<li class="flex items-center justify-between my-4 border">' . $row->address . '<li>';
            }
            $output .= '<ul>';

            return $output;
        }
    }

    public function show(Request $request)
    {
        $places = Place::search($request)->get();
        return view('list', compact('places'));
    }
}
