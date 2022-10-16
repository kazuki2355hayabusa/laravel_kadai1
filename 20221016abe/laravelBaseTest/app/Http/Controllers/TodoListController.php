<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        $todo_lists = Todo::all();
        return view('index', ['todo_lists' => $todo_lists]);
    }

    public function add(Todorequest $request)
    {
        $add_todo_data = $request->all();
        Todo::create($add_todo_data);
        return redirect('/');
    }

    public function update(Todorequest $request)
    {
        $update_todo_data = $request->all();
        unset($update_todo_data['_token']);
        Todo::where('id', $request->id)->update($update_todo_data);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
?>