<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
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


      return view('tasks.create');
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
	  'cow_id'=> 'required',
	  'start_date'=> 'required',
	  'due_date'=> 'required',
	  'complete_percent'=> 'required',
      ]);

	    //Store the data
		  $newTask = new Task;
		  $newTask->title = $request->get('title');
		  $newTask->priority = $request->get('priority');
          $newTask->cow_id = $request->get('cow_id');
		  $newTask->start_date =$request->get('start_date');
		  $newTask->due_date =$request->get('due_date');
		  $newTask->complete_percent =$request->get('complete_percent');
		  $newTask->notes =$request->get('notes');
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
		$task = Task::find($id);
		//return the view and pass the variable previously created
		return view('tasks.edit')->with('task',$task);
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
		  'cow_id'=> 'required',
		  'start_date'=> 'required',
		  'due_date'=> 'required',
		  'complete_percent'=> 'required',
		  ]);

	    //Store the data
		  $newTask= Task::find($id);

		  $newTask->title = $request->get('title');
		  $newTask->priority = $request->get('priority');
          $newTask->cow_id = $request->get('cow_id');
		  $newTask->start_date =$request->get('start_date');
		  $newTask->due_date =$request->get('due_date');
		  $newTask->complete_percent =$request->get('complete_percent');
		  $newTask->notes =$request->get('notes');
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

		  $newTask->save();


		  Session::flash('success', 'The changes were successfully saved!');


		//redirect
		return redirect()->route('tasks.show',$newTask->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
