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
        // return $request->all();
        if($request->hasFile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = date('ymdhis') . '.' . $extension;
            // $file->move('/uploads',$fileName);
            // $request->file('file')->store('public');
            // $file->move(base_path('\uploads'),$file->getClientOriginalName());
            $file->move(public_path('\uploads'),$file->getClientOriginalName());
            return response(['message' => 'success!','filename'=>$fileName,'status'=>200], 200);
        }else{
            return response(['message' => 'false!','status'=>400], 400);
        }
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            // 'file' => 'required|jpg,jpeg,png|max:2048',
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

        if($validator->fails())
        {
            return response()->json($validator->errors()->all(), 400);
        }
        else
        {
             //handle cover image
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $fileName = date('ymdhis') . '.' . $extension;
                // $file->move('/uploads',$fileName);
                // $request->file('file')->store('public');
                // $file->move(base_path('\uploads'),$file->getClientOriginalName());
                // $file->move(public_path('\uploads'),$file->getClientOriginalName());
                
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

            $announcements->save();

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
    public function destroy($id)
    {
        $announcements = Announcements::find($id);
        $delete = $announcements->delete();
        if($delete){
            return response(['message'=>'Delete success','status' => '200'],200);
        }else{
            return response(['message'=>'Delete fail','status' => '400'],400);
        }
    }

    public function getSellingAnnouncements()
    {
        $data = DB::table('announcements')->where('listingType', 'for sell')->get();
        return $data;
    }

    public function getRentingAnnouncements()
    {
        $data = DB::table('announcements')->where('listingType', 'for rent')->get();
        return $data;
    }
}
