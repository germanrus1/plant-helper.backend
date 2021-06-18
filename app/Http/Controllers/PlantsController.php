<?php

namespace App\Http\Controllers;

use App\Models\PlantFamilies;
use App\Models\Plants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plants.index', [
            'plant' => Plants::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plants.create', [
            'plant' => new Plants(),
            'families' => PlantFamilies::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|max:255',
            'description' => 'string',
            'tags' => 'max:255',
            'range' => 'max:255',
        ]);
        $input['create_user_id'] = Auth::user()->getAuthIdentifier();
        $input['update_user_id'] = Auth::user()->getAuthIdentifier();
        $plant = new Plants($input);

        $plant->name = $input['name'];
        $plant->description = $input['description'];
        $plant->tags = $input['tags'];
        $plant->range = $input['range'];
        $plant->create_user_id = $input['create_user_id'];
        $plant->update_user_id = $input['update_user_id'];
        $plant->save();

        if ($plant->save()) {
            redirect('/admin/plants');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function show(Plants $plants)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit(Plants $plants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plants $plants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plants $plants)
    {
        //
    }
}
