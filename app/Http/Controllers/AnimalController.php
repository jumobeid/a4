<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use Session;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all animals
        $animals =Animal::all();
        return view('animals.index')->with([
          'animals'=>$animals,
        ]);
    }

    public function create(){
      $newAnimal = new Animal;


      # Create a simple array of just the tag names for tags associated with this book;
      # will be used in the view to decide which tags should be checked off



      return view('animals.create')->with([
          'newAnimal'=> $newAnimal,
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
      $this->validate($request,[
      'name'=> 'required',
      'gender'=> 'required',
      ]);
      $animal = new Animal;
      $animal->name=$request->get('name');
      $animal->gender=$request->get('gender');

      $animal->save();

      Session::flash('success', 'The animals data were successfully saved!');

      return redirect()->route('animals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::find($id);
        return view ('animals.show')->with([
          'animal'=>$animal,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::find($id);
        return view ('animals.edit', compact('animal'));

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
        $animal = Animal::find($id);
        $this->validate($request,[
          'name'=>'required',
          'gender'=>'required'
        ]);

      $animal->name =$request->get('name');
      $animal->gender = $request->get('gender');

      $animal->save();
      Session::flash('success', 'The changes were successfully saved!');

      return redirect()->route('animals.show',$animal->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $animal = Animal::find($id);
      $animal->tasks()->detach();

      $animal->delete();

      Session::flash('success', 'The animal record was successfully deleted!');

      return redirect()->route('animals.index');
    }
}
