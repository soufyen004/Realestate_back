<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactDetails;

class ContactDetailsController extends Controller
{
    public function Update(Request $req){

        $validator = $req->validate([
            'phone' => 'required|numeric',
            'address' => 'required',
            'mail' => 'required|email',
        ]);
        if($validator){
            $phone = $req->phone;
            $address = $req->location;
            $email = $req->email;
            
            $contactDetails = new ContactDetails;
            $contactDetails->phone = $req->phone;
            $contactDetails->address = $req->address;
            $contactDetails->mail = $req->mail;
            $contactDetails->save();
            if($contactDetails){
                return response()->json(['message'=>'Update success'],200);
            }
            
        }else{
            return response()->json($validator->errors()->all(),400);
        }

    }
}
