<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AjaxContactController extends Controller
{
    public function index()
    {
        return view('ajax-contact-us-form');
    }
 
    public function store(Request $request)
    {
  
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:contacts|max:255',
            'message' => 'required',
        ]);
 
        $validatedData = $validator->validated();
        $contact = Contact::create($validatedData);
        $contact->message = "jhjhjh";
        $contact->save();
 
        //return redirect('form')->with('status', 'Ajax Form Data Has Been validated and store into database');
 
        return response()->json([
            'status'=>200,
            'message'=>'User Added Successfully.'
        ]);
    }
}
