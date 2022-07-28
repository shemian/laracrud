<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\contact;
use Log;

class CrudController extends Controller
{
    //

    public function index(){

        return view('welcome',['listStud'=> contact::all()]);
    }

    public function create(Request $request){
        
        return view('layouts.add');
    }

    public function store(Request $request){
       

        // $validated = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'mobile' => 'required|max:10',
        // ]);
    
        // Log::info($validated);
        
        $newStud = new contact;
        $newStud->name = $request->studName;
        $newStud->email = $request->studEmail;
        $newStud->address = $request->studAddress;
        $newStud->mobile = $request->studPhone;
        $newStud->save();

        return redirect('/')->with('message' ,'Created  Succefully');

    }

    public function edit($id){

        $newStud = contact::find($id); 
        return view('layouts.edit',compact('newStud'));

    }

    public function update(Request $request ,$id){

        $newStud = contact::find($id);
        $newStud->name = $request->studName;
        $newStud->email = $request->studEmail;
        $newStud->address = $request->studAddress;
        $newStud->mobile = $request->studPhone;
        $newStud->update();

        return redirect('/')->with('alert' ,'Updated Succefully');
    }


    public function destroy($id){
        $newStud = contact::find($id);

        if($newStud){
            $newStud->delete();
            return redirect('/');

        }
    }


}
