<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classroms;
use App\Models\Grade;
use Illuminate\Http\Request;

class classromcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classroom=Classroms::get();
        return view('pages.class.classview',compact('classroom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
       {
        $grad=Grade::get();
        
        return view('pages.class.createclass',compact('grad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Classroms::create([
            'name'=>$request->name,
            'Garde_id'=>$request->option,
         ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classroom=Classroms::find($id);
    return view('pages.class.classedite',compact('classroom')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $classroom=Classroms::find($id);
    $classroom->name_classroom = $request->input('name');
    
    $classroom->update();
    return  redirect()->route('classroom.index') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        
        $classroom=Classroms::find($id);
    $classroom->destroy();
    }
}
