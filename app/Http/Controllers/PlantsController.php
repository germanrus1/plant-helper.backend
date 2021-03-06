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
        return view('admin.plants.index', [
            'plants' => Plants::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plants.create', [
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
        $plant->description = empty($input['description']) ? '' : $input['description'];
        $plant->tags = $input['tags'];
        $plant->range = $input['range'];
        $plant->create_user_id = $input['create_user_id'];
        $plant->update_user_id = $input['update_user_id'];

        if ($plant->save()) {
            return redirect('/admin/plants');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plants  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plants $plant)
    {
        return view('admin.plants.show', [
            'plant' => $plant,
            'families' => PlantFamilies::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plants  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plants $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plants  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plants $plant)
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

        $plant->name = $input['name'];
        $plant->description = empty($input['description']) ? '' : $input['description'];
        $plant->tags = $input['tags'];
        $plant->range = $input['range'];
        $plant->create_user_id = $input['create_user_id'];
        $plant->update_user_id = $input['update_user_id'];

        if ($plant->update($input)) {
            return redirect('/admin/plants/1')->with('plants.message',
                ['type' => 'primary', 'message' => '"' . $plant->name . '" ?????????????? ????????????????']
            );
        } else {
            return redirect('/admin/plants/1')->with('plants.message',
                ['type' => 'danger', 'message' => '"' . $plant->name . '" ???? ?????????????? ????????????????']
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plants  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plants $plant)
    {
        if ($plant->delete()) {
            return redirect('/admin/plants')->with('plants.message',
                ['type' => 'success', 'message' => '"' . $plant->name . '" ?????????????? ????????????']
            );
        } else {
            return redirect('/admin/plants')->with('plants.message',
                ['type' => 'danger', 'message' => '?????????????????? ?????? ????????????????']
            );
        }
    }
}
