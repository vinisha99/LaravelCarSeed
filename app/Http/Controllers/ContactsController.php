<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    function contact()
    {
        return view('Pages.contact');
    }

    function store(Request $request)
    {
        $name = $request->name;
        return redirect()->route('thanks', ['name' => $name]);
    }

    function thanks($name, Request $request) {
        return view('Pages.thankyou')->with(compact('name'));
    }
}
