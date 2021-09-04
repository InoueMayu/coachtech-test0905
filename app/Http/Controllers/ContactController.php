<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function store(Request $request){
        $savedata = [
            'name' => $request->name,
            'email'=>$request->email

        ];

            $contact = new Contact;
            $contact -> fill($savedata)->save();

            return redirect()->route('contact.thanks');
    }

    public function thanks() {
        return view('contact.thanks');
    }
}
