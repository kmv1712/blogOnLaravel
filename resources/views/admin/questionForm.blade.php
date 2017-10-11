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
			<form class="col s12 " method="GET" action="saveEditQuestion">


				<td>Дата и время вопроса : {{$dateCreateQuestion}}</td><!-- Автор --> 

				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_prefix" type="text" class="validate" name="questionId" value = {{$questionId}}>
						<label for="icon_prefix">ID : {{$questionId}} (Не изменять!!!)</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_prefix" type="text" class="validate" name="userName" value = "{{$userName}}">
						<label for="icon_prefix">Автор : {{$userName}}</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_prefix" type="text" class="validate" name="categorie" value = "{{$categorie}}">
						<label for="icon_prefix">Категория : {{$categorie}}</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_prefix" type="text" class="validate" name="userQuestion" value = " {{$userQuestion}}">
						<label for="icon_prefix">Вопрос: {{$userQuestion}}</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_prefix" type="text" class="validate" name="adminAnswer" value = "{{$adminAnswer}}">
						<label for="icon_prefix">Ответ: {{$adminAnswer}}</label>
					</div>
				</div>

				<input class = "waves-effect waves-light btn row col s12" type="submit" value = "Сохранить">
			</form>
		</div>
		<div class="row">

			<form action="sendAdmin">
				<input type="submit" value="Перейти на главную страницу администратора" class = "waves-effect waves-light btn row col s12">
			</form>
		</div>


		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	</body>
	</html>