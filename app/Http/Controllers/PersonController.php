<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    //
    public function index (Request $request){
return view('index');
    }
    public function add (Request $request){
        $form=$request->all();
        Person::create($form);
      return  redirect('thanks');
    }
    public function thanks(Request $request){
        return view('thanks');
    }
}
