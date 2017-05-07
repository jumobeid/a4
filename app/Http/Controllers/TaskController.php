<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use App\Location;
use App\Animal;
use Session;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable that holds all the completed tasks
		$completedTasks= Task::where('status', '=', 'Completed')->get();

		//create a variable that holds all the not completed tasks
		$notcompletedTasks= Task::where('status', '=', 'Not completed')->get();

		//return the view and passon the variable
		return view('tasks.index')->with([
		    'completedTasks' => $completedTasks,
        'notcompletedTasks' => $notcompletedTasks,
			]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      $newTask = new Task;
      $locationsForDropdown = Location::locationsForDropdown();
      $animalsForCheckboxes = Animal::getAnimalsForCheckboxes();

      # Create a simple array of just the tag names for tags associated with this book;
      # will be used in the view to decide which tags should be checked off
      $animalsForThisTask = [];
      foreach($newTask->animals as $animal) {
          $animalsForThisTask[] = $animal->name;
      }


      return view('tasks.create')->with([
          'newTask'=> $newTask,
          'locationsForDropdown' => $locationsForDropdown,
          'animalsForCheckboxes' => $animalsForCheckboxes,
          'animalsForThisTask' => $animalsForThisTask,
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

       //Validate the form
	  $this->validate($request,[
      'title'=> 'required',
      'priority'=> 'required',
  	  'start_date'=> 'required',
  	  'due_date'=> 'required',
  	  'complete_percent'=> 'required',
        ]);

	    //Store the data
		  $newTask = new Task;
		  $newTask->title = $request->get('title');
		  $newTask->priority = $request->get('priority');
		  $newTask->start_date =$request->get('start_date');
		  $newTask->due_date =$request->get('due_date');
		  $newTask->complete_percent =$request->get('complete_percent');
      $newTask->location_id =$request->location_id;
		  $newTask->notes =$request->get('notes');
      $last_insert_id= DB::table('tasks')->order_by('upload_time', 'desc')->first();
      dd($last_insert_id);







      $locationsForDropdown = Location::locationsForDropdown();
      $animalsForCheckboxes = Animal::getAnimalsForCheckboxes();

      # Create a simple array of just the tag names for tags associated with this book;
      # will be used in the view to decide which tags should be checked off
      $animalsForThisTask = [];
      foreach($newTask->animals as $animal) {
          $animalsForThisTask[] = $animal->name;
      }
      if($request->animals) {
          $animals = $request->animals;
      }
      # If there were no animals selected (i.e. no tags in the request)
      # default to an empty array of tags
      else {
          $animals = [];
      }
      #dd($request->all());
		  $today = date("Y-m-d");
		  if($newTask->complete_percent=='100' && $today<$newTask->due_date)
		  {
				$newTask->status='Completed';
				$newTask->done_overdue='No';
		  }elseif($newTask->complete_percent=='100' && $today>$newTask->due_date)
		  {
			    $newTask->status='Completed';
		        $newTask->done_overdue='Yes';
		  }elseif($newTask->complete_percent!='100' && $today<$newTask->due_date)
		  {
		        $newTask->status='Not completed';
		        $newTask->done_overdue='No';
		  }else{
			    $newTask->status='Not completed';
		        $newTask->done_overdue='Yes';
		  }
      $newTask->animals()->sync($animals);
		  $newTask->save();


		  Session::flash('success', 'The task was successfully saved!');


		//redirect
		return redirect()->route('tasks.show',$newTask->id);

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

		$newTask=Task::find($id);

		return view('tasks.show')->with('newTask',$newTask);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the db and save as variable
		$task = Task::with('animals')->find($id);

    if(is_null($task)) {
           Session::flash('fail', 'Task not found.');
           return redirect('/tasks');
       }

    $locationsForDropdown = Location::locationsForDropdown();
    # Get all the possible tags so we can include them with checkboxes in the view
    $animalsForCheckboxes = Animal::getAnimalsForCheckboxes();

    # Create a simple array of just the tag names for tags associated with this book;
    # will be used in the view to decide which tags should be checked off
    $animalsForThisTask = [];
    foreach($task->animals as $animal) {
        $animalsForThisTask[] = $animal->name;
    }

		//return the view and pass the variable previously created
		return view('tasks.edit')->with([
        'task' => $task,
        'locationsForDropdown' => $locationsForDropdown,
        'animalsForCheckboxes' => $animalsForCheckboxes,
        'animalsForThisTask' => $animalsForThisTask,
    ]);
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
        //Validate the form
		  $this->validate($request,[
		  'title'=> 'required',
		  'priority'=> 'required',
		  'start_date'=> 'required',
		  'due_date'=> 'required',
		  'complete_percent'=> 'required',
		  ]);

	    //Store the data
		  $newTask= Task::find($id);

		  $newTask->title = $request->get('title');
		  $newTask->priority = $request->get('priority');
		  $newTask->start_date =$request->get('start_date');
		  $newTask->due_date =$request->get('due_date');
		  $newTask->complete_percent =$request->get('complete_percent');
		  $newTask->notes =$request->get('notes');
      $newTask->location_id =$request->location_id;

      # If there were tags selected...
      if($request->animals) {
          $animals = $request->animals;
      }
      # If there were no animals selected (i.e. no tags in the request)
      # default to an empty array of tags
      else {
          $animals = [];
      }
      $newTask->animals()->sync($animals);
		  $today = date("Y-m-d");
		  if($newTask->complete_percent=='100')
		  {
			if($today<$newTask->due_date)
		    {
				$newTask->status='Completed';
				$newTask->done_overdue='No';

		    }else{

			    $newTask->status='Completed';
		      $newTask->done_overdue='Yes';
			  }





			$newTask->save();
		    Session::flash('success', 'The changes were successfully saved!');
			//redirect
		    return redirect()->action('randomTaskController@show');

		  }else{
            if($today<$newTask->due_date)
		    {
		        $newTask->status='Not completed';
		        $newTask->done_overdue='No';
		    }else{
			    $newTask->status='Not completed';
		        $newTask->done_overdue='Yes';
		    }



			$newTask->save();
		    Session::flash('success', 'The changes were successfully saved!');
			//redirect
			return redirect()->route('tasks.show',$newTask->id);
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
      //find the task
      $task = Task::find($id);

      $task->animals()->detach();

     	//delete the post
     	$task->delete();

     	Session::flash('success','The post was sucseesfully deleted');

     	//redirect to index page
     	return redirect()->route('tasks.index');
    }
}
