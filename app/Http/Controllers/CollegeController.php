<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return College::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCollegeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'university_id' => 'required',
            'clg_name' => 'required'
        ]);

        return College::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollegeRequest  $request
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, College $college)
    {
        $request->validate([
            'university_id' => 'required',
            'clg_name' => 'required',
        ]);

        $upd = $college->update([
            'university_id' => request('university_id'),
            'clg_name' => request('clg_name'),
        ]);

        return $college;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        $college->delete();
        return $college;
    }
}
