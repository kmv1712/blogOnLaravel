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

	<div class="container ">
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



		<div class="row">
			<form class="col s12 " method="GET" action="sendQuestion">
								<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" type="text" class="validate" name="userName">
							<label for="icon_prefix">Введите ваше имя:</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">mail_outline</i>
							<input id="icon_telephone" type="tel" class="validate" name="userMail">
							<label for="icon_telephone">Введите вашу почту:</label>
						</div>
					</div>

					<div class="row">
						<select class="browser-default input-field col s6" name='categorie'>
							<option disabled selected>Выберете категорию</option>
							@foreach ($categories as $categorie)
							<option name="{{ $categorie->categorie }}" >{{ $categorie->categorie }}</option>
							@endforeach
						</select>
					</div>

					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">question_answer</i>
							<input id="icon_telephone" type="tel" class="validate" name='userQuestion'>
							<label for="icon_telephone">Введите ваш вопрос:</label>
						</div>
					</div>
		
						<input class = "waves-effect waves-light btn row col s6" type="submit" value = "Отправить вопрос">
			
				</form>
			</div>


		</div>


		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	</body>
	</html>