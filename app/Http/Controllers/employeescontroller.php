<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = DB::table('emploees')->get();
        return view('employees.view',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $flag = DB::table('emploees')->insert([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'salary'=>$request->salary,
            'joining_date'=>$request->joining_date
        ]);

        if($flag)
        {
            return redirect()->route('employees.index');
        }else
        {
            return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = DB::table('emploees')->Where('id',$id)->first();
        return view('employees.edit',compact('employe'));
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
        $flag = DB::table('emploees')->Where('id',$id)->update([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'salary'=>$request->salary,
            'joining_date'=>$request->joining_date
        ]);

        if($flag)
        {
            return redirect()->route('employees.index');
        }else
        {
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag = DB::table('emploees')->Where('id',$id)->delete();
            

        if($flag)
        {
            return redirect()->route('employees.index');
        }else
        {
            return redirect()->back();

        }
    }
}
