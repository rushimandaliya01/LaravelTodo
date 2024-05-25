<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function addTodo()
    {
        return view('addTodo');
    }
    
    public function edittodo(Request $request){
     $todo=Todos::where('id',$request -> id)->first();
     return view('editTodo') -> with('todo', $todo) ;
    }
    
    public function store(Request $request)
    {
        $todo = new Todos;
        $todo->title = $request->get('title');
        $todo->description = $request->get('desc');
        $todo->user_id = $request -> get('user_id');
        $todo->save();
        echo '<div class ="alert alert-success">Todo is created.</div>';
        return view('addTodo', ['todo' => $todo]);
    }

   
    public function show(Request $request)
    {      
        $todo=Todos::find($request -> id);
        return view('view',['todo'=>$todo]);
    }

    public function edit(Todos $todo,Request $request)
    {
        $todo=Todos::find($request->todo_id);
        $todo->title=$request->title;
        $todo->description=$request->description;
        $todo->save();
        echo '<div class ="alert alert-success">Todo is updated.</div>';
        return view('editTodo',['todo'=>$todo]);
    }

    public function delete(Request $request)
    {
        $todo=Todos::find($request -> id);
        if($todo) {
            $todo -> delete();
        }
        return redirect(route('homePage'))->with("success", "Todo Deleted Successfully!");
    }
}
