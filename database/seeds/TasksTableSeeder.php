<?php

use Illuminate\Database\Seeder;
use App\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

     */
    public function run()

    {
    Task::insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Morning assessment',
			'notes' => ' observe current situation for
             an indication of overnight cow traffic and milking.
			 Best scheduled as one of the first tasks of the day.',
			'priority' => 'Hi',
			'start_date' =>'2017-05-12',
			'due_date' => '2017-05-13',
			'complete_percent' => '100',
			'status'=>'Completed',
			'done_overdue'=>'No',
      'location_id'=>3,
		]);

		Task::insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Quick assessment',
			'notes' => ' Quick assessment of milking equipment and cows
			 and listen for unusual noises or other anomalies that
			 may risk milking capacity or animal welfare.Several times as day – when passing through the dairy for other reason.',
			'priority' => 'Hi',
			'start_date' =>'2017-05-14',
			'due_date' => '2017-05-15',
			'complete_percent' => '0',
			'status'=>'Not completed',
			'done_overdue'=>'No',
      'location_id'=>1,
		]);

		Task::insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Fetch cows from stale pasture allocations',
			'notes' => ' 3 times a day if you have 3-way grazing.',
			'priority' => 'Hi',
			'start_date' =>'2017-05-17',
			'due_date' => '2017-05-18',
			'complete_percent' => '20',
			'status'=>'Not completed',
			'done_overdue'=>'No',
      'location_id'=>2,
		]);

		Task::insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Morning review of cows.',
			'notes' => ' Morning review of cows that have been drafted and
			flagged for attention; events occurring overnight.Start of the day, or remotely before arriving on site.',
			'priority' => 'Hi',
			'start_date' =>'2017-05-18',
			'due_date' => '2017-05-19',
			'complete_percent' => '0',
			'status'=>'Not completed',
			'done_overdue'=>'Yes',
      'location_id'=>1,
		]);

		Task::insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Reviews of individual cow.',
			'notes' => 'Reviews of individual cow and system performance e.g.
			feed utilisation, grain consumption, milking frequency,
			waiting times, cow traffic; particular attention to cows that
			entered the milking herd recently and heifers in training',
			'priority' => 'Hi',
			'start_date' =>'2017-05-20',
			'due_date' => '2017-05-21',
			'complete_percent' => '50',
			'status'=>'Not completed',
			'done_overdue'=>'No',
      'location_id'=>3,
		]);

		Task::insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Colostrum/treatment cows.',
			'notes' => 'Twice a day.',
			'priority' => 'Hi',
			'start_date' =>'2017-05-21',
			'due_date' => '2017-05-22',
			'complete_percent' => '50',
			'status'=>'Not completed',
			'done_overdue'=>'No',
      'location_id'=>1,
		]);
    Task::insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Trim horns of a bull.',
			'notes' => 'Once a day.',
			'priority' => 'Hi',
			'start_date' =>'2017-05-21',
			'due_date' => '2017-05-22',
			'complete_percent' => '50',
			'status'=>'Not completed',
			'done_overdue'=>'No',
      'location_id'=>2,
		]);
	}
}
