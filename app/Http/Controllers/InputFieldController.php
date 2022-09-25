<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class InputFieldController extends Controller
{
    public function index() 
    {
        return view("forms/input-fields");
    }
    public function store(Request $request)
    {
        $request->validate([
            'moreFields.*.one' => 'required',
            'moreFields.*.two' => 'required',
            'moreFields.*.three' => 'required',
        ]);
     
        foreach ($request->moreFields as $key => $value) {
            Input::create($value);
        }
     
        return back()->with('success', 'Todos Has Been Created Successfully.');
    }
}
