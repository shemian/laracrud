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
        Log::info($request);

        $newStud = new contact;
        $newStud->name = $request->studName;
        $newStud->email = $request->studEmail;
        $newStud->address = $request->studAddress;
        $newStud->mobile = $request->studPhone;
        $newStud->save();

        return view('layouts.add');
    }



}
