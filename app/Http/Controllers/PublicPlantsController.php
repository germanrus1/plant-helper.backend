<?php


namespace App\Http\Controllers;


use App\Models\PlantFamilies;
use App\Models\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PublicPlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.index', [
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        echo 'test';die;
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
                ['type' => 'success', 'message' => '"' . $plant->name . '" успешно удален']
            );
        } else {
            return redirect('/admin/plants')->with('plants.message',
                ['type' => 'danger', 'message' => 'Произошла при удалении']
            );
        }
    }
}
