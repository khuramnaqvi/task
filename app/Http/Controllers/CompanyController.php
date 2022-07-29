<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Company::latest()->get();
      return view('company.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
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
             'name' => 'required',
             'email' => 'required',
             'logo'=>'required',
             'website' => 'required',
         ]);

        $input=$request->all();
        if($logo = $request ->file('image')){
           $destinationPath='public/logo/';
            $logo=date('YmdHis'). ".". $image->getClientOriginalExtension();
           $logo->move($destinationPath, $logo);
            $input['logo']="$logo";

        }

        try {
            Company::create([
                'name' => $request->name,
                'email' => $request->email,
                'logo' => $request->logo,
                'website' => $request->website,

               ]);

           } catch(Exception $e) {
               dd($e->getMessage());
           }
           // Company::create($request->all());
          // return redirect('/index')->with('success','Customers created successfully');
     return redirect()->route('company.index') ->with('success',' employee data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $data)
    {
        return view('company.shows',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $data, Request $request)
    {
        $data=Company::find($request->id);
        return view('company.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $data)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required',
            'website' => 'required',


        ]);

        $data->update($request->all());

        return redirect()->route('company.index')
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

        return redirect()->route('company.index')->with('success','data deleted successfully');
    }
}
