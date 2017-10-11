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


		

		if (!empty($_GET['newCateg']))
		{
			$newCateg = $_GET['newCateg'];
			$dateCreateCategorie= date("Y-m-d H:i:s");
			Categorie::insert(['categorie' => "$newCateg",'dateCreateCategorie' => "$dateCreateCategorie"]);
			    return view('admin.addCateg');
		}





		elseif (!empty($_GET['action'])){
			if(($_GET['action'] == 'delAdmin') and !empty($_GET['id'])) {
				$id = $_GET['id'];
				$delAdmin = Admin::where('id', $id)->delete();

			}
		}


		$questions = Question::all();
		$categories = Categorie::all();


		foreach ($categories as $categorie) {			
			$count = Question::where('categorie', $categorie->categorie)->count();
			$countPublishedQuestion = Question::where('categorie', $categorie->categorie)->where('status', 1)->count();
			$countNotPublishedQuestion = Question::where('categorie', $categorie->categorie)->where('status', 0)->count();
		}




		$admins = Admin::all();
		return view('admin.admin') -> with('admins', $admins)
		-> with ('categories', $categories)
		-> with ('questions', $questions )
		-> with ('count', $count ) 
		-> with ('countPublishedQuestion', $countPublishedQuestion )
		-> with ('countNotPublishedQuestion', $countNotPublishedQuestion ); 


	}
}


