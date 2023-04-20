<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Announcements;
use App\Models\Media;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;

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
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'file' => 'required|mimes:jpeg,png,bmp|max:2048',
            'media' => 'required',
            'city' => 'required|string',
            'price' =>' required|numeric',
            'bathrooms' => 'required|numeric',
            'bedrooms'=> 'required|numeric',
            'propertyStatus' => 'required|string',
            'sqft' => 'required|numeric',
            'neighborhood' => 'required|string',
            'rating' => 'required|numeric',
            'propertyType' => 'required|string'
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
            $file->move(public_path('\uploads'),$fileName);
                
            $announcements = new Announcements;
            $announcements->title = $request['title'];
            $announcements->city = $request['city'];
            $announcements->price = $request['price'];
            $announcements->bathrooms = $request['bathrooms'];
            // $announcements->aminities = $request['amenities'];
            $announcements->propertyStatus = $request['propertyStatus'];
            $announcements->propertyType = $request['propertyType'];
            $announcements->bedrooms = $request['bedrooms'];
            $announcements->sqft = $request['sqft'];
            $announcements->neighborhood = $request['neighborhood'];
            $announcements->annoncementType = $request['annonceType'];
            $announcements->rating = $request['rating'];
            $announcements->announcementStatus = $request['announcementStatus'];
            $announcements->cover_image = $fileName;
            $save = $announcements->save();


            if($save){

                // hadle media gallery
                $files = [];
                if($request->has('media'))

                 {
                    foreach($request['media'] as $file)
                    {
                        
                        $name = time().rand(1,50).'.'.$file->extension();
                        $file->move(public_path('\uploads'), $name);  

                        // $mediaFile = new Media;
                        // $mediaFile->fileName = $name;
                        // $mediaFile->adId = $announcements->id;
                        // $mediaFile->save();

                        Media::create([
                            "fileName" => $name,
                            "adId" => $announcements->id
                        ]);
                    }
                 }else{
                    return response(['message' => 'No media to ulpload!','status'=> $request['media']], 500);
                 }

                return response(['message' => 'Ad has been saved successfully!','status'=>$request['media']], 200);

            }
            
        }
        
    }

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
        $data = Announcements::ForSell()->get();
        return $data;
    }

    public function getRentingAnnouncements()
    {
        $data = Announcements::ForRent()->get();
        return $data;
    }

    public function update($id,request $request)
    {
        $announcements = Announcements::where('id',$id)->update([

            'city' => $request['city'],
            'price' => $request['price'],
            'bathrooms' => $request['bathrooms'],
            'aminities' => $request['aminities'],
            'propertyStatus' => $request['propertyStatus'],
            'propertyType' => $request['propertytype'],
            'bedrooms' => $request['bedrooms'],
            'sqft' => $request['sqft'],
            'neighborhood' => $request['neighborhood'],
            'bhk' => $request['bhk'],
            'rating' => $request['rating'],
            'announcementStatus' => $request['announcementStatus'],

        ]);
        
        if($announcements->save()){
            return response()->json(["message"=> "Update Success !"],200);
        }else{
            return response()->json(["message"=> "Update Failed !"],401);
        }
    }
}
