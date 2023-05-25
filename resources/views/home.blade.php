<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">

					<title>Laravel</title>

					<!-- Fonts -->
					<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

					<!-- Styles -->
					@vite('resources/js/app.js')

</head>

<body>



</body>
@include('partials.header')
    <main class="d-flex container gap-3 flex-wrap my-5">
        @foreach ($data as $comic)
        <div class="d-flex flex-column align-items-center card-container">
            <img class="img-card" src="{{ $comic['thumb'] }}" alt="">
            <a class="pt-3 card-link" href="{{ route('comics.show', ['index' => $loop ->index]) }}">{{ $comic['title'] }}</a>
        </div>

        @endforeach
    </main>
@include('partials.footer')

</html>
