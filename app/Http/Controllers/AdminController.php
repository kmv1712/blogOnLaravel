<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Categorie;
use App\Question;

class AdminController extends Controller
{
   public function add(Request $request)
   {
    $questions = Question::all();
    $categories = Categorie::all();
    return view('admin.addAdmin')-> with ('categories', $categories);
}

public function getListQuestion(Request $request)
{

    $questions = Question::all();
    $categories = Categorie::all();

    return view('admin.getListQuestion') -> with ('categories', $categories)-> with ('questions', $questions);
}

public function delCategorie(Request $request)
{
    $id = $_GET['id'];
    $delCategorie = Categorie::where('id', $id) -> delete();
    $questions = Question::all();
    $categories = Categorie::all();
    $admins = Admin::all();
    
    return view('admin.admin') -> with('admins', $admins)
    -> with ('categories', $categories)
    -> with ('questions', $questions )
    -> with ('count', $count ) 
    -> with ('countPublishedQuestion', $countPublishedQuestion )
    -> with ('countNotPublishedQuestion', $countNotPublishedQuestion ); 
    
}
}
