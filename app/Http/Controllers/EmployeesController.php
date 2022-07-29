<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    //    $data = Employee::latest()->paginate(5);
       $data=Employee::latest()->get();
      return view('employee.index', compact('data'));

        //  $data = Employee::latest()->paginate(5);
        //   return view('data.index',compact('data')) ->with('i', (request()->input('page', 1) - 1) * 5);

        //  $data = Employee::orderBy('id','DESC')->paginate(5);
        //  return view('data.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
        //return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
       Employee::create($request->all());
      // Data::create($request->all());

        return redirect()->route('employee.index') ->with('success',' employee data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $data)
    {
       // $data=Employee::find($request->id);
        return view('employee.show',compact('data'));
        //return view('data.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $data, Request $request)
    {
        //return view('data.edit',compact('data'));
        $data=Employee::find($request->id);
       return view('employee.edit',compact('data'));
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
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $data->update($request->all());

        return redirect()->route('employee.index')
                        ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();

        return redirect()->route('employee.index')->with('success','data deleted successfully');
    }
}
