<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoListController extends Controller
{
    public function index()
    {
        $todo_lists = Todo::all();
        //dd($todo_lists);
        return view('index',['todo_lists' => $todo_lists]);
    }

    public function add(Todorequest $request)
    {
        $add_todo_data = $request->all();
        Todo::create( $add_todo_data);
        return redirect('/');
    }

    public function update(Todorequest $request)
    {
        $update_todo_data = $request->all();
        //dd($update_todo_data);
        unset($update_todo_data['_token']);
        Todo::where('id',$request->id)->update($update_todo_data);
        return redirect('/');
    }
    public function delete(Request $request)
    {
            Todo::find($request->id)->delete();
            return redirect('/');
    }
    //
}
