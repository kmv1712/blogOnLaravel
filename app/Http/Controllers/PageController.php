<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Question;
use App\Categorie;

class PageController extends Controller
{
     public function index()
    {
    	// $qwerty = $request -> get('qwerty');
    	// echo "$qwerty";
    	// dd($qwerty);
    	// view('user.user' , array('name' => 'Miha' )); 
    	$categories = Categorie::all();
    	$questions = Question::all();
    	return view('user.user') -> with('categories', $categories) -> with('questions', $questions);


    }
}
