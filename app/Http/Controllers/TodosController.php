<?php

namespace App\Http\Controllers;
use App\Todo;
use Auth;
use DB;

use Illuminate\Http\Request;

class TodosController extends Controller
{

	public function getTodos(){
		$todos = Todo::get();
		return $todos;
	}

    public function index(){
    	return view('backend.todos.index')
    		->with('todos', $this->getTodos() );
    }

    public function save( Request $request ){

    	$todo = new Todo();
    	$todo->todo_body = $request->get('todoBody');
    	$todo->save();

    	return json_encode( $this->getTodos() );
    }


    public function markDone( $id ){

    	// DB::table('todos')
    	// 	->where('id', $id)
    	// 	->update(['is_colpleted' => 1]);

    	Todo::where('id', $id)->update(['is_colpleted' => 1]);

    	return redirect()->back();
    }


}
