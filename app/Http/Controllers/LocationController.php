<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Location;
use Session;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display all our locations
        $locations = Location::all();
        return view('locations.index')->with([
    		    'locations' => $locations,
    			]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create a new Location
        $newLocation = new Location;


        return view('locations.create')->with([
            'newLocation'=> $newLocation,
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
        //save new location
        $this->validate($request,[
        'name'=> 'required',
        'description'=> 'required',
        'number_of_workers'=> 'required|min:1',
        'number_of_animals'=> 'required|min:1',
        'owner'=>'required',
        ]);
        $location = new Location;
        $location->name=$request->get('name');
        $location->description=$request->get('description');
        $location->number_of_workers=$request->get('number_of_workers');
        $location->owner=$request->get('owner');
        $location->number_of_animals=$request->get('number_of_animals');

        $location->save();

        Session::flash('success', 'The locations data were successfully saved!');

        return redirect()->route('locations.index');


        //redirect to index

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $location = Location::find($id);
      return view ('locations.show')->with([
        'location'=>$location,
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
      $location = Location::find($id);
      return view ('locations.edit', compact('location'));
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
      $this->validate($request,[
      'name'=> 'required',
      'description'=> 'required',
      'number_of_workers'=> 'required|min:1',
      'number_of_animals'=> 'required|min:1',
      'owner'=>'required',
      ]);
      $location = new Location;
      $location->name=$request->get('name');
      $location->description=$request->get('description');
      $location->number_of_workers=$request->get('number_of_workers');
      $location->owner=$request->get('owner');
      $location->number_of_animals=$request->get('number_of_animals');

      $location->save();

      Session::flash('success', 'The changes were successfully saved!');

      return redirect()->route('locations.show',$location->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
