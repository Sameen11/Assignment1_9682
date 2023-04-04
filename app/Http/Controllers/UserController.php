<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class UserController extends Controller
{

    public function show()
    {
        $employees = Employee::all()->toArray();
        return view('contactmessages', compact('employees'));

    }

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
        return redirect('contactmessages')->with('info', 'send successfully');
    }

    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('messages.edit', compact('emplpoyees','id'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        $employee = Employee::find($id);
        $employee->fullname = $request->get('fullname');
        $employee->email = $request->get('email');
        $employee->mobile = $request->get('mobile');
        $employee->message = $request->get('message');
        $employee->save();
        return redirect('contactmessages')->with('Success', 'Data Updated');
    }

    
    public function index($id){
        $emplpyees = Employee::select('select * from employees');
        return view('customermessages',['employees'=>$employees]);
        }
        public function destroy($fullname) {
        Employee::delete('delete from employees where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        }
        
}
