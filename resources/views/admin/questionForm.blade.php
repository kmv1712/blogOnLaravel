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

		<!-- Статистика по категориям (начало)-->
	<div class="row">
<table>
<tr>
	<td>Дата и время вопроса : {{$dateCreateQuestion}}</td><!-- Автор --> 
</tr>
<tr>
	<td>Автор : {{$userName}}</td><!-- Автор --> 
  <td><a href="">Изменить</a></td><!-- Автор --> 
</tr>
<tr>
	<td>Категория : {{$categorie}} </td><!-- Категория --> 
  <td><a href="">Изменить</a></td><!-- Автор --> 
</tr>
<tr>
	<td>Вопрос: {{$userQuestion}} </td><!-- Вопрос --> 
  <td><a href="">Изменить</a></td><!-- Вопрос --> 
</tr>
<tr>
	<td>Ответ: {{$adminAnswer}} </td><!-- Ответ --> 
  <td><a href="">Изменить</a></td><!-- Ответ --> 
</tr>
</table>


<form action="sendAdmin">
	<input type="submit" value="Перейти на главную страницу администратора" class = "waves-effect waves-light btn row col s12">
</form>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>