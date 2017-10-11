<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content = "width = device-widht, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>

	<div class="container">
		<div class="row red ligten-1">
			<div class="col s1 red"><br></div>
			<div class="col s1 green"><br></div>
			<div class="col s1 red"><br></div>
			<div class="col s1 green"><br></div>
			<div class="col s1 red"><br></div>
			<div class="col s1 green"><br></div>
			<div class="col s1 red"><br></div>
			<div class="col s1 green"><br></div>
			<div class="col s1 red"><br></div>
			<div class="col s1 green"><br></div>
			<div class="col s1 red"><br></div>
			<div class="col s1 green"><br></div>
		</div>

		<!-- Список администраторов (начало)-->
		<h5>Здравствуйте </h5>

		<div class="row"><div class= "col s12 "><h5>Список администраторов</h5></div></div>

		<div class="col s10">

			<table class = "bordered">
				<thead>
					<tr>
						<td>№</td>
						<td class="center-align ">Логин</td>
						<td class="center-align">Пароль</td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					@foreach ($admins as $admin)
					<tr>
						<td>  {{ $admin->id }}</td>
						<td class="center-align">  {{ $admin->loginAdmin}}</td>
						<td class="center-align">  {{ $admin->passwordAdmin }}</td>
						<td><a class=center-align href="editAdmin?id={{ $admin->id }}"center-align">Изменить пароль</a></td>
						<td><a href="?id={{ $admin->id }}&action=delAdmin" class="center-align">Удалить</a></td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col s12">

				<form action="addAdmin" method="get">
					<br>
					<input class = "waves-effect waves-light btn col s12" type="submit" value = "Добавить администратора" > <br><br>
				</form>
			</div>
		</div>
		<!-- Список администраторов (конец)-->


		<!-- Статистика по категориям (начало)-->
		<div class="row ">
			<div class="row"> <div class= "col s12 "><h5>Статистика по категориям</h5></div></div>

			<table>
				<thead>
					<td class="center-align">Список тем</td>
					<td class="center-align">Всего вопросов по теме</td>
					<td class="center-align">Опубликовано вопросов в теме</td>
					<td class="center-align">Вопросы без ответа</td>
				</thead>

				<tbody>
					@php
					foreach ($categories as $categorie){
					$count = DB::table('questions') -> where('categorie', $categorie->categorie)->count();
					$countPublishedQuestion = DB::table('questions') -> where('categorie', $categorie->categorie)->where('status', 1)->count();
					$countNotPublishedQuestion = DB::table('questions') -> where('categorie', $categorie->categorie)->where('status', 0)->count();
					echo "<tr>";	
					echo "<td class=center-align><a href= getListQuestion?categorie=$categorie->categorie >$categorie->categorie</a></td>";	
					echo "<td class=center-align>$count</td>";	
					echo "<td class=center-align>$countPublishedQuestion</td>";	
					echo "<td class=center-align>$countNotPublishedQuestion</td>";	
					echo "<td class=center-align><a href=delCateg?action=delCateg&id=$categorie->id&categorie=$categorie->categorie > Удалить тему</a></td>";
					echo "</tr>";}
					@endphp
					@php 
					if (isset ($_GET['action'])){
					if ($_GET['action'] == 'delCateg' and !empty($_GET['id']) and !empty($_GET['categorie']) ){
					$id = $_GET['id'];
					$categorie = $_GET['categorie'];
					$delCategorie = DB::table('categories') -> where('id', "$id")->delete();
					$delQuestion = DB::table('questions') -> where('categorie', "$categorie")->delete();
					}
			    }

@endphp

		</tbody>
	</table>

	<div class="col s12">
		<div class="row  ligten-1">
			<form action="addCateg" method="get">
				<div class="col s12">
					<input class = "waves-effect waves-light btn col s12" type="submit" value = "Добавить тему" > 
				</div> 	
			</form>
		</div> 	
	</div>
</div>
<!-- Статистика по категориям (конец)-->
</div>




<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>