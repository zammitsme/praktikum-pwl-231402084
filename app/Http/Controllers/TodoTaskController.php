<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home', [
            'tasks'=>$tasks,
        ]);
    }
    public function tambah(Request $request)
    {
        $request->validate(
            [
            'task' => 'required|min:5',
            ],

         [
        'task.required'=> 'tugas harus di isi',
        'task.min'=> 'tugas minimal 5 karakter',
         ]

        );

        Task::create([
            'task' => $request->task,
            'tanggal' => NOW(),
        ]);

        return redirect('/');
    }

    public function deleteTask(Request $request)
    {
        Task::where('id', $request->id)->delete();
        return redirect('/');
    }
}