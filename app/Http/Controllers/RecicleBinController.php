<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class RecicleBinController extends Controller
{
    public function index()
    {   
        $tareas = Task::onlyTrashed()
                ->where('user_id', Auth::user()->id)
                ->get();
        return view('recicleBin.recicleIndex', compact('tareas'));
    }
    public function restore($id){
        $task = Task::onlyTrashed()
                ->where('id',$id)
                ->restore();
        return redirect('/home');
    }

    public function destroy($id){
        $task = Task::onlyTrashed()
                ->where('id',$id)
                ->forceDelete();
        //$task->forceDelete();
        return redirect('/home');
    }
}
