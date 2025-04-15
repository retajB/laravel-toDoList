<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){

        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    
    }



    public function create(){
        return view('create');
    }




    public function details(Todo $todo){

        return view('details')->with('todos', $todo);
    
    }
    



    public function edit(Todo $todo)
{
    return view('edit', ['todos' => $todo]);
}




public function update(Request $request, Todo $todo)
{
    try {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);

        $todo->update($request->all());

        session()->flash('success', 'Todo updated successfully');
        return redirect('/');
    } catch (\Exception $e) {
        session()->flash('error', 'Error updating todo: ' . $e->getMessage());
        return redirect()->back()->withInput();
    }
}






    public function store(Request $request)
    {
        try {
            Todo::create($request->all()); // Mass assignment without validation

            session()->flash('success', 'Todo created successfully');
            return redirect('/');
        } catch (\Exception $e) {
            session()->flash('error', 'Error creating todo: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }



    public function delete(Todo $todo){

        $todo->delete();

        return redirect('/');

    }
}
