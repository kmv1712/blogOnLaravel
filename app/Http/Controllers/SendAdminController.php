<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Question;
use App\Categorie;
use App\Admin;

class SendAdminController extends Controller
{
	public function index(Request $request)
	{
		$categories = Categorie::all();
		$admins = Admin::all();
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
			redirect('/sendAdmin');
		}

		elseif (!empty($_GET['action'])){
			if(($_GET['action'] == 'delAdmin') and !empty($_GET['id'])) {
			$id = $_GET['id'];
		  $delAdmin = Admin::where('id', $id)->first(); // File::find($id)
		  $delAdmin->delete();
		  }
			elseif(($_GET['action'] == 'editAdmin') and !empty($_GET['id'])) {
			$id = $_GET['id'];
			session_start();
			$_SESSION['id'] = $_GET['id'];
			$admins = Admin::find($id);
		 	return view('admin.editAdmin')->with ('admins', $admins);
		  // $delAdmin = Admin::where('id', $id)->first(); // File::find($id)
		  // $delAdmin->delete();
		}
	}

	
    $questions = Question::all();
    $categories = Categorie::all();
		$admins = Admin::all();
		return view('admin.admin') -> with('admins', $admins)-> with ('categories', $categories)-> with ('questions', $questions ); 

	}
}


