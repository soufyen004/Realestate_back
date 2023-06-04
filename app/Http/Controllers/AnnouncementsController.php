<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Announcements;
use App\Models\Media;
use App\Models\Amenities;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;
use App\Models\Univers;
use App\Models\User;

class AnnouncementsController extends Controller
{

    public function index()
    {
        $announcements = new Announcements;
        return $announcements->all();
    }


    public function search(Request $request)
    {
        $announcements = new Announcements;
        $results = $announcements->where('common', 'LIKE', '%'.$request['commune'].'%')->where('bedrooms','LIKE', '%' .$request['bedrooms']. '%')->where('bathrooms','LIKE', '%'.$request['bathrooms'].'%')->get();

        return $results;

    }

    public function check()
    {
        return response()->json(["message" => "check api call success!"], 200);
    }


    public function getAdById($id)
    {
        $announcements = new Announcements;
        return $announcements->find($id);
    }

    public function getByUnivers($univers)
    {
        $univ = new Univers();
        $res= $univ->where('name',$univers)->with('ads')->get()->toArray();
        return response()->json(['data' => $res], 200);

    }

    public function getMedia($id)
    {
        $images = Media::where("adId",$id)->get();
        return $images;
    }

    public function getAmenities($id)
    {

        $amenities = Amenities::where("adId",$id)->get();
        return $amenities;

    }

    public function store(Request $request)
    {


        $validator = Validator::make($request->all(),[
            'file' => 'required|mimes:jpeg,png,bmp|max:2048',
            'media' => 'required',
            'region' => 'required|string',
            'common' => 'required|string',
            'price' =>' required|numeric',
            'bathrooms' => 'required|numeric',
            'bedrooms'=> 'required|numeric',
            'propertyStatus' => 'required|string',
            'sqft' => 'required|numeric',
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
            $announcements->user_id = auth()->user()->id;
            $announcements->title = $request['title'];
            $announcements->region = $request['region'];
            $announcements->common = $request['common'];
            $announcements->price = $request['price'];
            $announcements->bathrooms = $request['bathrooms'];
            // $announcements->aminities = $request['amenities'];
            $announcements->propertyStatus = $request['propertyStatus'];
            $announcements->propertyType = $request['propertyType'];
            $announcements->annoncements_type_id = $request['propertyTypeId'];
            $announcements->bedrooms = $request['bedrooms'];
            $announcements->sqft = $request['sqft'];
            $announcements->annoncementType = $request['annoncementType'];
            $announcements->cover_image = $fileName;
            $announcements->description = $request['description'];
            $announcements->locationLat = $request['locationLat'];
            $announcements->locationLng = $request['locationLng'];
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


                        $amenities = new Amenities;
                        $amenities->adId = $announcements->id;
                        $amenities->yard = $request['yard'];
                        $amenities->surveillance = $request['surveillance'];
                        $amenities->balcon = $request['balcon'];
                        $amenities->wifi = $request['wifi'];
                        $amenities->elevator = $request['elevator'];
                        $amenities->furnished = $request['furnished'];
                        $amenities->kitchenReady = $request['kitchenReady'];
                        $amenities->swimingPool = $request['swimingPool'];
                        $amenities->airConditioner = $request['airConditioner'];
                        $amenities->swimingPool = $request['swimingPool'];
                        $amenities->babiesBedroom = $request['babiesBed'];
                        $amenities->garage = $request['garage'];
                        $amenities->save();

                    }
                 }else{
                    return response(['message' => 'No media to ulpload!','status'=> 501], 501);
                 }

                return response(['message' => 'Ad has been saved successfully!','status'=>200], 200);

            }else{
                return response(['Error save data!' => $request->all(),'status'=>401], 401);
            }

        }

    }

    public function destroy($id)
    {
        $announcements = Announcements::find($id);
        $medias = Media::where('adId', $id)->get();
        $delete = $announcements->delete();
        if($delete){
            if(File::exists(public_path('upload/bio.png'))){
                File::delete(public_path('upload/bio.png'));
            }

            foreach ($medias as $media) {
                $media->delete();
            }

            return response(['message'=>'Delete success','status' => '200'],200);

        }else{
            return response(['message'=>'Delete fail','status' => '400'],400);
        }
    }



    public function update($id,Request $request)
    {
        $announcements = Announcements::where('id',$id)->update([

            'city' => $request['city'],
            'price' => $request['price'],
            'bathrooms' => $request['bathrooms'],
            'propertyStatus' => $request['propertyStatus'],
            // 'propertytype' => $request['propertyType'],
            'bedrooms' => $request['bedrooms'],
            'neighborhood' => $request['neighborhood'],
            // 'announcementStatus' => $request['propertyStatus'],
            // "annoncementType" => $request['annoncementType'],
            "title" => $request['title'],

        ]);

        if($announcements){
            return response()->json(["message"=> "Update Success !"],200);
        }

        return response()->json(["request"=> $id],401);

    }

    public function softRemove($id)
    {

        $announcement = Announcements::where('id', $id)->update(['markedForRemove' => 1]);
        if($announcement){
            return response()->json(["message"=> "Marked for remove with Success !"],200);
        }else{
            return response()->json(["message"=> "Mark for remove Failed !"],401);
        }
    }

    public function markedForRemove(){
        $announcements = Announcements::where("markedForRemove",1)->get();

        if($announcements){
            return  $announcements;
        }else{
            return response()->json(["message"=> "Get data failed !"],401);
        }

    }

    public function restoreDeleted($id){

        $announcement = Announcements::where('id', $id)->update(['markedForRemove' => 0]);
        if($announcement){
            return response()->json(["message"=> "Restored with Success !"],200);
        }else{
            return response()->json(["message"=> "Restoration Failed !"],401);
        }

    }

    public function getAdsByUserId($id)
    {

        $results = User::find($id)->announcements;
        if($results){
            return response()->json($results,200);
        }else{
            return response()->json(["message"=> "Get data Failed !"],401);
        }

    }
    public function getAdAuthor($id)
    {
        $results = Announcements::find($id)->user;
        if($results){
            return response()->json($results,200);
        }else{
            return response()->json(["message"=> "Get data Failed !"],401);
        }
    }



}
