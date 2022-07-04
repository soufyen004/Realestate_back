<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use DB;


class PassportAuthController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->all(), 400);
        }else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password)
            ]);
            $token = $user->createToken('LaravelAuthApp')->accessToken;
            return response(['message' => 'Registration success!','token' => $token,'status'=>200], 200);

        }
    }
 
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            $userName = auth()->user()->name;
            return response()->json(['message' => 'Login success!','name'=>$userName,'token' => $token,'status'=>200], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }   

    public function getUsers()
    {
        $users = DB::table('users')->where('role','!=', 'agent')->get();
        return $users;
    }

    public function getAgents()
    {
        $users = DB::table('users')->where('role', 'agent')->get();
        return $users;
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $delete = $user->delete();
        if($delete){
            return response(['message'=>'Delete success','status' => '200'],200);
        }else{
            return response(['message'=>'Delete fail','status' => '400'],400);
        }
    }

    public function updateUser(Request $request,$id){

        $user = User::find($id);
        $user->role = $request->input('role');
        $save = $user->save();
        if($save) {
            return true;
        }else{
            return false;
        }
    }
}