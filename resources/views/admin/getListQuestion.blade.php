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
			<h5>{{$_GET['categorie']}}</h5>
			<table>
				<thead>
					<td>Дата создания</td>
					<td>Вопрос</td>
					<td>Статус</td>
					<td>Скрыть</td>
					<td>Опубликовать</td>
					<td>Удалить</td>
				</thead>
				<tbody>
					@foreach ($questions as $question)
					@if ($_GET['categorie'] == $question -> categorie)
					<tr>
						<td>{{ $question->dateCreateQuestion }}</td>
						<td><a href="getQuestion?userQuestion={{$question->userQuestion}}&userName={{$question->userName}}&categorie={{$question->categorie}}&adminAnswer={{$question->adminAnswer}}&dateCreateQuestion={{$question->dateCreateQuestion}}">{{ $question->userQuestion}}</a></td>
						<td>@if ($question->status == 1 )
							Опубликован
							@elseif ($question->status == 2 )
							Скрыт
							@elseif ($question->status == 0 )
							Не опубликован
							@endif
						</td>
						<td><a href="hideQuestion?id={{$question->id}}&categorie={{$question->categorie}}">Скрыть</a></td>
						<td><a href="publish?id={{$question->id}}&categorie={{$question->categorie}}">Опубликовать</a></td>
						<td><a href="delQuestion?id={{$question->id}}&categorie={{$question->categorie}}">Удалить</a></td>
					</tr>

					@endif
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- Статистика по категориям (конец)-->
		<form action="sendAdmin">
			<input type="submit" value="Перейти на главную страницу администратора" class = "waves-effect waves-light btn row col s12">
		</form>


	</div>



	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>