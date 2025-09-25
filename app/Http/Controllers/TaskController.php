<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
          $tasks = Task::with('user')
          ->latest()
          ->take(50)
          ->get();
      return view('home', ['tasks'=> $tasks]);
    
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request ->validate([
            'title' => 'required|string|max:255',
            'description'=>'required|string|max:255',[
            'title.required' => 'Please Name your Task!',
            'title.max' => 'Please keep it short (less than 255 characters)',
            'description.required' => 'Please describe your task!',
            'description.max' => 'Please keep it short (less than 255 characters)',
            ],
        ]);
        \App\Models\Task::create([
            'title'=> $validated['title'],
            'description'=>$validated['description'],
            'user_id'=>null,
        ]);

        return redirect('/')->with('success','Task created!');
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
    public function edit(Task $task)
    {
        return view('edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
         $validated = $request ->validate([
            'title' => 'required|string|max:255',
            'description'=>'required|string|max:255',[
            'title.required' => 'Please Name your Task!',
            'title.max' => 'Please keep it short (less than 255 characters)',
            'description.required' => 'Please describe your task!',
            'description.max' => 'Please keep it short (less than 255 characters)',
            ],
        ]);
        return redirect('/')->with('success','Task updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {  
        $task->delete();
         return redirect('/')->with('success','Task deleted!');

         
    }
}
