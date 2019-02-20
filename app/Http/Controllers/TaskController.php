<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $task = ['black'=>'Den','white'=>'trang'];
        return view('task.list',compact('task'));
    }
}
