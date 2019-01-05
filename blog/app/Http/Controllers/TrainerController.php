<?php

namespace laraDex\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use laraDex\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index',compact(['trainers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $file = $request->file('avatar');
       $name = $file->getClientOriginalName();
       $move = $file->move(public_path().'/images/', $name);

       $newTrainer = new Trainer();
       $newTrainer->name   = $request->input('name');
       $newTrainer->avatar = $name;
       $newTrainer->slug = $request->input('slug');
       $newTrainer->description = $request->input('description');
       $newTrainer->save();
       return "Se ha creado un nuevo entrenador";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Trainer $trainer)
    {
      //  $trainer = Trainer::find($id);
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        
        //$trainer = Trainer::find($id); // usando un implicit binding
        
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {

       $file = $request->file('avatar');
       $name = $file->getClientOriginalName();
       $move = $file->move(public_path().'/images/', $name);

        $trainer->fill($request->except('avatar'));
        $trainer->avatar=$name;
        $trainer->save();
        return 'se quiere actualizar a: '. $trainer->name ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
