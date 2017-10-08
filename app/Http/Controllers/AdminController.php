<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Categorie;

class AdminController extends Controller
{
     public function add(Request $request)
    {
      // $admins = Admin::all();
      $categories = Categorie::all();
     	return view('admin.addAdmin')-> with ('categories', $categories);
     	 // -> with('admins', $admins) ;
     	// -> with ('categories', $categories);
    	// $qwerty = $request -> get('qwerty');
    	// echo "$qwerty";
    	// dd($qwerty);
    	// view('user.user' , array('name' => 'Miha' )); 
    }

    public function edit(Request $request)
    {
    	
    }
    //  public function index(Request $request)
    // {
    // 	$admins = Admin::all();
    //  	return view('admin.admin') -> with('admins', $admins) ;
    //  	// -> with ('categories', $categories);
    // 	// $qwerty = $request -> get('qwerty');
    // 	// echo "$qwerty";
    // 	// dd($qwerty);
    // 	// view('user.user' , array('name' => 'Miha' )); 
    // }
    //  public function index(Request $request)
    // {
    // 	$admins = Admin::all();
    //  	return view('admin.admin') -> with('admins', $admins) ;
    //  	// -> with ('categories', $categories);
    // 	// $qwerty = $request -> get('qwerty');
    // 	// echo "$qwerty";
    // 	// dd($qwerty);
    // 	// view('user.user' , array('name' => 'Miha' )); 
    // }//
}
