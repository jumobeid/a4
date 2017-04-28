<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Session;

class randomTaskController extends Controller
{
    public function show()
	{


	 //create a variable that holds all the not completed tasks
	 $notcompletedTasks= Task::where('status', '=', 'Not completed')->get();
	 if(!$notcompletedTasks->isEmpty()) {
           $rand = $notcompletedTasks->random();
           return view('rand.show')->with('rand',$rand);
     }else{
		   Session::flash('fail', 'All tasks are completed');
		   return redirect('/tasks');
	 }
	}
	public function edit()
	{
	 //create a variable that holds all the not completed tasks
	 $notcompletedTasks= Task::where('status', '=', 'Not completed')->get();
	 if(!$notcompletedTasks->isEmpty()) {
           $rand = $notcompletedTasks->random();
           return view('rand.show')->with('rand',$rand);
     }else{
		   Session::flash('fail', 'All tasks are completed');
		   return redirect('/tasks');
	 }
	}
}
