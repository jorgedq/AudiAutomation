<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;
use App\Type;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Task::orderBy('id', 'DESC')->get();
        return view('home', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createTasks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $validatedData = $request->validate([
            'titulo' => 'required|max:40',
            'descripcion' => 'required|max:200',
        ]);
        $tareas = new Task;
        $tareas->tittle=$request->titulo;
        $tareas->description=$request->descripcion;
        $tareas->user_id=Auth::user()->id;
        $tareas->type_id=$request->type_id;
        $tareas->save();
        return redirect('/home');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::orderBy('id','ASC')->pluck('name','id');
        $task = Task::find($id);
        return view('tasks.editTask',compact('task','types'));
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
        $validatedData = $request->validate([
            'tittle' => 'required|max:40',
            'description' => 'required|max:200',
    ]   );
        $tareas = Task::find($id);
        $tareas->update($request->all());
        return redirect('home');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tareas = Task::find($id);
        $tareas->delete();
        return redirect('home');
    }
}
