<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ URL::asset('css/resetUser.css')}}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ URL::asset('css/styleUser.css')}}"> <!-- Resource style -->
	<script src="{{ URL::asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
	<title>FAQ</title>
<style>
a > h1:hover
{ 
	color: yellow; 
	text-decoration: underline;
}	


</style>

</head>
<body>
	<header>
	<a href="addUserQuestion">	<h1>У вас есть вопрос задайте его мне?</h1></a>
	</header>

	<section class="cd-faq">

		<!-- Категории слева навигация (начало)-->

		<ul class="cd-faq-categories">
		 	@foreach ($categories as $categorie)
			<li><a href="#{{ $categorie->categorie }}">{{ $categorie->categorie }}</a></li>
			@endforeach
		</ul> <!-- cd-faq-categories -->
		<!-- Категории слева навигация (конец)-->

		<!-- Вопросы ответы категории (начало)-->
		<div class="cd-faq-items">
			@foreach ($categories as $categorie)
			<ul id="{{ $categorie->categorie}}" class="cd-faq-group">
				<li class="cd-faq-title"><h2>{{ $categorie->categorie}}</h2></li>
				@foreach ($questions as $question)
				@if ($question->categorie == $categorie->categorie and $question->status == 1)
				<li>
					<a class="cd-faq-trigger" href="#0">{{$question->userQuestion}}</a>
					<div class="cd-faq-content">
						<p>{{$question->adminAnswer}}</p>
					</div> <!-- cd-faq-content -->
				</li>
				@endif
				@endforeach
			</ul> <!-- cd-faq-group -->
			@endforeach
		</div> <!-- cd-faq-items -->
		<!-- Вопросы ответы категории  (конец)-->

		<a href="#0" class="cd-close-panel">Close</a>

	</section> <!-- cd-faq -->

	<script src="{{ URL::asset('js/jquery-2.1.1.js')}}"></script>
	<script src="{{ URL::asset('js/jquery.mobile.custom.min.js')}}"></script>
	<script src="{{ URL::asset('js/main.js')}}"></script> <!-- Resource jQuery -->
</body>
</html>