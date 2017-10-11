<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Categorie;
use App\Question;

class AdminController extends Controller
{

    public function saveEditQuestion(Request $request)
    {
        if (isset($_GET['questionId'])){
            $userQuestion = $_GET['userQuestion'];
            $userName = $_GET['userName'];
            $adminAnswer = $_GET['adminAnswer'];
            $categorie = $_GET['categorie'];
            $questionId  = $_GET['questionId']; 
            
            Question::where('id',$questionId) -> update(['userName' => $userName,'categorie' => $categorie, 'userQuestion' => $userQuestion,'adminAnswer' => $adminAnswer ]);
            return redirect("/getListQuestion?categorie=$categorie");
        }
    }

    public function publish(Request $request)
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $categorie = $_GET['categorie'];
            $publishQuestion = Question::where('id', $id) -> update(['status' => 1]);
            return redirect("/getListQuestion?categorie=$categorie");
        }
    }

    public function hideQuestion(Request $request)
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $categorie = $_GET['categorie'];
            $hideQuestion = Question::where('id', $id) -> update(['status' => 2]);
            return redirect("/getListQuestion?categorie=$categorie");
        }
    }

    public function delQuestion(Request $request)
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $categorie = $_GET['categorie'];
            $delQuestion = Question::where('id', $id) -> delete();
            return redirect("/getListQuestion?categorie=$categorie");
        }
    }


    public function add(Request $request)
    {
        $questions = Question::all();
        $categories = Categorie::all();

        return view('admin.addAdmin')-> with ('categories', $categories);
    }

    public function getQuestion(Request $request)
    {
    // dd($_GET);
     $userQuestion = $_GET['userQuestion'];
     $userName = $_GET['userName'];
     $adminAnswer = $_GET['adminAnswer'];
     $categorie = $_GET['categorie'];
     $dateCreateQuestion = $_GET['dateCreateQuestion'];
     $questions = Question::all();
     $questionId  = $_GET['questionId']; 

     return view('admin.questionForm') 
     -> with ('userName', $userName )
     -> with ('categorie', $categorie)
     -> with ('userQuestion', $userQuestion)
     -> with ('adminAnswer', $adminAnswer)
     -> with ('dateCreateQuestion', $dateCreateQuestion)
     -> with ('questions', $questions)
     -> with ('questionId', $questionId);
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