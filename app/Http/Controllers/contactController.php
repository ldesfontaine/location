<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{

    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('home')->with('success', 'Votre message a bien été envoyé');
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Le message a bien été supprimé');
    }


}

