<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{-- main css --}}
	<link rel="stylesheet" href="css/app.css">
	{{-- local css --}}
	@yield('css')
	<title>@yield('title') | laravel-fashion-shop</title>
</head>
<body>

	{{-- 

		Create il database shop con all'interno una unica tabella dresses 
		(popolatela con dati a piacere) e mapparla con un model Dress.
		
		Suggerimenti:
		Createvi il layout
		Gestite le rotte
		Ad ogni rotta collegate un metodo che avrete creato nel vostro Controller
		
		Definite poi il vostro model per recuperare i dati dal DB
		
		Bonus: una volta completata la struttura potrete dedicarvi alla parte grafica, 
		rifinendo i vostri header footer e main
		
		dresses
		--------------------------------------------
		id 				NUMBER	INT			PK
		model			STRING	VARCHAR(20)	NOT NULL
		size			NUMBER	TINYINT 	NOT NULL
		color			STRING	VARCHAR(20)	NOT NULL
		fabric			STRING	VARCHAR(50)	NOT NULL
		availability	BOOLEAN	TINYINT 	NOT NULL
		stock			NUMBER	SMALLINT 	NOT NULL
		--------------------------------------------

	--}}

	@include('partials.header')
	@yield('main_content')
	@include('partials.footer')

</body>
</html>