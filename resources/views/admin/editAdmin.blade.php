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
			<form class="col s12 " method="GET" action="editAdmin">

				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">edit</i>
						<input id="edit" type="tel" class="validate" name="id" value={{$id}} >
						<label for="edit">ID администратора (не изменять!): </label>
					</div>

				</div>
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">edit</i>

						<input id="edit" type="tel" class="validate" name="passwordAdmin">
						<label for="edit">Введите новый пароль для администратора {{$admins->loginAdmin}}: </label>
					</div>
				</div>

				<input class = "waves-effect waves-light btn row col s6" type="submit" value = "Изменить пароль">

			</form>
		</div>


	</div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>