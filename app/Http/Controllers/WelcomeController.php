<?php

namespace App\Http\Controllers;

use App\Models\Task;

class WelcomeController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('welcome')->with('tasks', $tasks);
    }
}
