<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee(){
        
        $employee = Employee::paginate(7);
        $startingIndex = ($employee->currentPage() - 1) * $employee->perPage() + 1;
        return view('bills.employee.employee', compact( 'employee', 'startingIndex'));
    }
    public function createEmployee(){
        return view('bills.employee.createEmployee');
    }
    public function addEmployee(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'duedate' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->date = $request->input('date');
        $employee->duedate = $request->input('duedate');
        $employee->amount = $request->input('amount');
        $employee->status = $request->input('status');
        $employee->save();
        return redirect()->route('getEmployee');
    }
    public function editEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        return view('bills.employee.editEmployee', compact('employee'));
    }
    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->date = $request->input('date');
        $employee->duedate = $request->input('duedate');
        $employee->amount = $request->input('amount');
        $employee->status = $request->input('status');
        $employee->save();
        return redirect()->route('getEmployee');
    }
    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('getEmployee');
    }
}
