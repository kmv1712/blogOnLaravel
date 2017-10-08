<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Question;
use App\Categorie;

class UserFormController extends Controller
{
   public function index(Request $request)
    {
    	$categories = Categorie::all();
     	return view('user.userForm') -> with ('categories', $categories);
    	// $qwerty = $request -> get('qwerty');
    	// echo "$qwerty";
    	// dd($qwerty);
    	// view('user.user' , array('name' => 'Miha' )); 
    }
}
