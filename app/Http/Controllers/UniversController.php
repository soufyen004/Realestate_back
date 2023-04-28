<?php

namespace App\Http\Controllers;

use App\Models\Univers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UniversController extends Controller
{
    public function getAll()
    {
        $univers = new Univers();
        return $univers->all();

    }

    public function store(Request $request)
    {
        $univers = new Univers();
        $univers->name = $request['name'];
        $univers->type_id = $request['type_id'];
        $univers->description = $request['description'];
        $univers->color = $request['color'];
        $save = $univers->save();

        if($save){
            return Response(["message"=>"saved with success!"],200);
        }
        return Response(["message"=>"Save failed!"],400);
    }

    public function destroy($id)
    {

        $univers = Univers::find($id);
        $delete= $univers->delete();

        if($delete){

            return response(['message' => 'Univers has been deleted successfully!'], 200);

        }else{
            return response(['message' => 'Failed Univers has not been deleted !'], 400);
         }

    }

    public function update($id,Request $request)
    {

        $update = Univers::where('id',$id)->update([

            'name' => $request['name'],
            'active' => $request['active'],
        ]);

        if($update){
            return Response(["message"=>"update success!"],201);
        }
        return Response(["message"=>"update failed!"],400);

    }

}
