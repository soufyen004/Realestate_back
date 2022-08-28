<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;
use Validator;

class SearchController extends Controller

{
    public function searchResult(Request $request)
    {
        $validator = Validator::make($request->all(),
    [

        'priceMax'          => 'numeric|max:10000000',
        'priceMin'          => 'numeric|max:10000',
        'city'              => 'string|required',
        'announcementStatus' => 'string|required',
            
    ]);

            if ($validator->fails())
            {
                return response()->json($validator->errors()->all(), 400);
            }

            else

            {
                if($request->isMethod('post'))
                {

                    $announcementStatus = $request->announcementStatus;
                    $neighborhood =       $request->neighborhood;
                    $city =               $request->city;
                    $pricemin =           $request->minPrice;
                    $pricemax =           $request->maxPrice;
                    $propertyType =       $request->propertyType;
                    $propertyStatus =     $request->propertyStatus;
                    $bedrooms =           $request->bedrooms;
                    $bathrooms =          $request->bathroom;
                    $bhk =                $request->bhk;
                    $aminities =          $request->aminities;
                
                    // return Announcements::with('announcementStatus')
                    return Announcements::where('announcementStatus' , '=', $announcementStatus)
                    ->where('city' , 'like', $city)
                    ->where('propertyStatus','=', $propertyStatus)
                    ->where('neighborhood' , 'like', $neighborhood)
                    ->where('price' , '>=', $pricemin)
                    ->where('price' , '<=', $pricemax)
                    ->get();
                    

                    // return Announcements::all();
                }
            }
    }
    

}
