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
		<h5>Здраствуйте </h5>

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
						<td><a href="?id={{ $admin->id }}&action=editAdmin" class="center-align">Изменить пароль</a></td>
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
				  @php $i=0; @endphp;
					@foreach ($categories as $categorie)
					<tr >
						<td class="center-align"><a href="">{{$categorie->categorie}}</a></td>
						@foreach ($questions as $question)
						<td class="center-align">
						@if($categorie->categorie == $question->categorie)
						@php $i++;  @endphp
						@endif
						@php echo"$i"; @endphp
						</td>
						<td class="center-align"></td>
						<td class="center-align"></td>
						@endforeach
					</tr>
					@endforeach

					
				</tbody>
			</table>

			<div class="col s12">
				<div class="row red ligten-1">
					<form action="" method="POST">
						<div class="col s6">
							<input class = "waves-effect waves-light btn col s12" type="submit" value = "Добавить тему" > 
						</div> 	
						<div class="col s6">
							<input class = "waves-effect waves-light btn col s12" type="submit" value = "Удалить тему и вопросы в ней" > 
						</div> 	
					</form>
				</div> 	
			</div>
		</div>
		<!-- Статистика по категориям (конец)-->

		<!-- Дата, вопрос, статус определенной темы (начало)-->
		<div class="row">
			<h5>Тема</h5>
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
					<tr>
						<td>12.09.2017</td>
						<td>Что нового присходит в стране грез</td>
						<td>ожидает ответа</td>
						<td>Скрыть</td>
						<td>Опубликовать</td>
						<td>Удалить</td>
					</tr>
					<tr>
						<td>12.09.2017</td>
						<td>Где искать любовь</td>
						<td>ожидает ответа</td>
						<td>Скрыть</td>
						<td>Опубликовать</td>
						<td>Удалить</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- Дата, вопрос, статус определенной темы (конец)-->

		<!-- Форма вывода вопрос ответ (начало) -->
		<p>Автор вопроса:</p>
		<p>Вопрос: Где искать любовь</p>
		<p>Ответ: Там где ее нет</p> 
		<p>Изменить автора</p>
		<p>Изменить текст вопроса</p>
		<p>Изменить текст ответа</p>
		<p>Изменить тему вопросаа</p>

		<!-- Форма вывода вопрос ответ (конец) -->	

		<!-- Список вопросов без ответов -->
		<table>
			<thead>
				<td>Дата вопроса</td>
				<td>Вопрос</td>
				<td>Категория</td>
				<td>Редактировать</td>
				<td>Удалить</td>
			</thead>
			<tbody>
				<tr>
					<td>21.09.2017</td>
					<td>В чем свысл жизни</td>
					<td>Жизнь</td>
					<td>Редактировать</td>
					<td>Удалить</td>
				</tr>
			</tbody>
		</table>
		<!-- Список вопросов без ответов (конец) -->
	</div>

</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>