<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Question;
use App\Categorie;
use App\Admin;

class SendController extends Controller
{

	public function index(Request $request){
     
		// проверка и добавление вопроса в таблицу question//
		if (!empty($_GET['userName']) and !empty($_GET['userMail']) and !empty($_GET['categorie']) and !empty($_GET['userQuestion']))
		{
			$userName = $_GET['userName'];
			$userMail = $_GET['userMail'];
			$categorie = $_GET['categorie'];
			$userQuestion = $_GET['userQuestion'];
			$dateCreateQuestion = date("Y-m-d H:i:s");

			$questions = Question::insert([
				'userName' => "$userName", 
				'userMail' => "$userMail",
				'categorie' => "$categorie", 
				'userQuestion' => "$userQuestion",
				'adminAnswer' => '',
				'dateCreateQuestion' => "$dateCreateQuestion"
				]);

			echo "Ваш вопрос успешно отправлен <br>";
			return redirect('/');
		}
		////////////////////////////////////////////////////////


		elseif (!empty($_GET['userName']) and !empty($_GET['userMail']) and empty($_GET['categorie']) and empty($_GET['userQuestion']))
		{
			// Осуществить проверку на пароль
			$loginAdmin = $_GET['userName'];
			$passwordAdmin = $_GET['userMail'];
			$questions = Admin::where('passwordAdmin', $passwordAdmin)->get();
			$questions = $questions -> isEmpty();
			if (!$questions)
			{
				echo "Вы админ";
				return redirect('/sendAdmin');
			}
			else {
				echo "<h1>Вы ввели не правильно пароль или логин!!!</h1>";
			  return redirect('/addUserQuestion');
			}
			
		}

		else 
		{
			echo "<h1>Вы не заполнили все поля!!!</h1>";
			return redirect('/addUserQuestion');

		}
		
	}
}