<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Todo;

class FrontendController extends Controller
{

	public function getTodos(){
		$todos = Todo::get();
		return $todos;
	}

    public function index(){
    	return view('frontend.welcome')
    		->with('todos', $this->getTodos() );
    }

    public function todos(){
    	return view('frontend.todos')
    		->with('todos', $this->getTodos());
    }

}
