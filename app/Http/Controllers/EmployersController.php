<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employers.index',['employers' => Employer::all()]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employers.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Employer $employer )
    {
        // Remove _token from the data
        $dataBlaToken = collect($request->all())->except('_token')->toArray();

        // Create a new employer instance 
        $employer = Employer::create($dataBlaToken);

        // Now you can save the employer
        $employer->save() ;
        
        return redirect()->route('employers.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show by id
        $employer = Employer::find($id);

        return view('employers.show', compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // 
        $employer = Employer::find($id);
        return view('employers.edit', compact('employer'));
   
        return view('employers.edit') ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
          // Remove _token from the data
          $dataBlaToken = collect($request->all())->except('_token')->toArray();

          // find by id and update the employer 
          $employer = Employer::find($id);
          $employer->update($dataBlaToken);
  
          // Now you can save the employer
          $employer->save();

          return redirect()->route('employers.index') ;     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //  fun for delete
        $employer = Employer::find($id);
        $employer->delete();

        return redirect()->route('employers.index') ;     
    }
}
