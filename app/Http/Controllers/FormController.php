<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Input;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Info::all();
  
        return view('forms.index',compact('forms'));
    }

    public function createStepOne(Request $request)
    {
        $form = $request->session()->get('form');
  
        return view('forms.create-step-one',compact('form'));
    }



    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
        ]);
  
        if(empty($request->session()->get('form'))){
            $form = new Info();
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        }else{
            $form = $request->session()->get('form');
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        }
  
        return redirect()->route('forms.create.step.two');
    }
  

    public function createStepTwo(Request $request)
    {
        $form = $request->session()->get('form');
  
        return view('forms.create-step-two',compact('form'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:infos,email',
            'phone_no' => 'required|unique:infos,phone_no',
        ]);
  
        $form = $request->session()->get('form');
        $form->fill($validatedData);
        $request->session()->put('form', $form);
  
        return redirect()->route('forms.create.step.three');
    }

    public function createStepThree(Request $request)
    {
        $form = $request->session()->get('form');
  
        return view('forms.create-step-three',compact('form'));
    }
  
    
    public function postCreateStepThree(Request $request)
    {
        $form = $request->session()->get('form');
        $form->save();
  
        $request->session()->forget('form');
  
        //return view('forms.input-fields');
        return view('forms.input-fields');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function inputFields() 
    {
        return view("forms.input.fields");
    }
    public function store(Request $request)
    {
        $request->validate([
            'moreFields.*.one' => 'required',
            'moreFields.*.two' => 'required',
            'moreFields.*.three' => 'required',
        ]);
     
        foreach ($request->moreFields as $key => $value) {
            Input::all();
        }
     
        return back()->with('success', 'It Has Been Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
