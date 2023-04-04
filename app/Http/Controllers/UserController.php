<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class UserController extends Controller
{
    //
    function contact(Request $request){

        return view('contact');
    }
    function savedata(Request $request){
        
        $emp = new Employee();
        $emp->fullname= $request->input('name');
        $emp->email= $request->input('email');
        $emp->mobile= $request->input('mobile');
        $emp->message= $request->input('message');
        // dd($emp);
        $emp-> save();
        return redirect('contact')->with('info', 'send successfully');
    }
    
}
