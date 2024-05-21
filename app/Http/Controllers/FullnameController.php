<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullnameController extends Controller
{
    protected $firstname, $lastname, $result;
    public function fullName(){
        return view('fullname.full-name');
    }
    public function getFullName(Request $request){
        $this->result = $request->first_name.' '.$request->last_name;
        return redirect()->back()->with('result', $this->result);
    }
}
