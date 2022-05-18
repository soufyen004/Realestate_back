<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
use App\Http\Requests\StoreAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;
use Illuminate\Http\Request;
use DB;
use Validator;

class AnnouncementsController extends Controller
{

    public function index()
    {
        $announcements = new Announcements;
        return $announcements->all();
    }

    public function testReq(Request $request)
    {
        return $request->all();
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'file' => 'required|jpg,jpeg,png|max:2048',
            'city' => 'required|string',
            'price' =>' required|numeric',
            'bathrooms' => 'required|numeric',
            'aminities' => 'required|string',
            'propertystatus' => 'required|string',
            'bedrooms'=> 'required|numeric',
            'sqft' => 'required|numeric',
            'neighborhood' => 'required|string',
            'bhk' => 'required|numeric',
            'rating' => 'required|numeric',
            'listingType' => 'required|string'
        ]);

        $fileName = time().'.'.$request->file->extension();

        $announcements = new Announcements;
        $announcements->city = $request['city'];
        $announcements->price = $request['price'];
        $announcements->bathrooms = $request['bathrooms'];
        $announcements->aminities = $request['aminities'];
        $announcements->propertystatus = $request['propertystatus'];
        $announcements->propertytype = $request['propertytype'];
        $announcements->bedrooms = $request['bedrooms'];
        $announcements->sqft = $request['sqft'];
        $announcements->neighborhood = $request['neighborhood'];
        $announcements->bhk = $request['bhk'];
        $announcements->rating = $request['rating'];
        $announcements->listingType = $request['listingType'];
        $announcements->cover_image = $fileName;
        if($validator->fails()){
            return response()->json($validator->errors()->all(), 400);
        }else{
          if($announcements->save()){
            $request->file->move(public_path('uploads'), $fileName);
            return response(['message' => 'Add Announcement success!','status'=>200], 200);
        } else{
            return response(['message' => 'Add Announcement Fail!','status'=>400], 400);
        }

        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function show(Announcements $announcements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcements $announcements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnouncementsRequest  $request
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnouncementsRequest $request, Announcements $announcements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcements $announcements)
    {
        //
    }

    public function getSellingAnnouncements()
    {
        $data = DB::table('announcements')->where('listingType', 'selling')->get();
        return $data;
    }

    public function getRentingAnnouncements()
    {
        $data = DB::table('announcements')->where('listingType', 'renting')->get();
        return $data;
    }
}
