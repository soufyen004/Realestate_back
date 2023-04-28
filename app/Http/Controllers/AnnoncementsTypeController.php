<?php

namespace App\Http\Controllers;

use App\Models\AnnoncementsType;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AnnoncementsTypeController extends Controller
{
    public function getAll()
    {
        $type = new AnnoncementsType();
        return $type->all();

    }

    public function store(Request $request)
    {
        $type = new AnnoncementsType();
        $type->name = $request['name'];

        if($type->save()){

            return response(['message' => 'type has been saved successfully!'], 200);

        }else{
            return response(['message' => 'Failed type has not been saved !'], 400);
         }

    }

    public function destroy($id){


        $type = AnnoncementsType::find($id);
        $delete= $type->delete();

        if($delete){

            return response(['message' => 'type has been deleted successfully!'], 201);

        }else{
            return response(['message' => 'Failed type has not been deleted !'], 400);
         }

    }

    public function update($id,Request $request)
    {
        $type = AnnoncementsType::where('id',$id)->update([

            'name' => $request['name']
        ]);

        if($type){
            return response()->json(["message"=> "Update Success !"],200);
        }

        return response()->json(["message"=> $request],401);

    }
}
