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

public function edit(Request $request)
{

    if(!empty($_GET['passwordAdmin'])) {
        $id = $_GET['id'];
        $passwordAdmin = $_GET['passwordAdmin'];
        Admin::where('id', $id)-> update(['passwordAdmin'=> $passwordAdmin]);
        $admins = Admin::find($id);
        return redirect ('sendAdmin');
    }
    elseif (isset($_GET['id'])){
        $id = $_GET['id'];
        $admins = Admin::find($id);
        return view('admin.editAdmin')-> with ('admins', $admins)-> with ('id', $id);
    }
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

public function addAnswer(Request $request)
{
    if (!empty($_GET['loginAdmin']) and !empty($_GET['passwordAdmin']))
    {
        $loginAdmin = $_GET['loginAdmin'];
        $passwordAdmin = $_GET['passwordAdmin'];
        $dateCreateAdmin= date("Y-m-d H:i:s");

        Admin::insert([
            'loginAdmin' => "$loginAdmin", 
            'passwordAdmin' => "$passwordAdmin", 
            'dateCreateAdmin' => "$dateCreateAdmin"
            ]);
    }
    return view('admin.AddAnswerAdmin');
}


public function addCateg(Request $request)
{
    return view('admin.categAddForm');
}


public function delCateg(Request $request)

{
    if (isset ($_GET['action'])){
        if ($_GET['action'] == 'delCateg' and !empty($_GET['id']) and !empty($_GET['categorie']) ){
            $id = $_GET['id'];
            $categorie = $_GET['categorie'];
            $delCategorie = Categorie::where('id', "$id")->delete();
            $delQuestion = Question::where('categorie', "$categorie")->delete();
            return view('admin.delCateg');
        }
    }
    
}

}