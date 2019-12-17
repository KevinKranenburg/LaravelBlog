<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Author" content="Kevin Kranenburg - www.kevinkranenburg.nl">
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>


<body>
    
<header>
    @section('header')
    Dit is blijkbaar een header.
    @show
</header>

<nav>
    Nav
</nav>

<main>
    @yield('content')
</main>

<footer>
    Footer
</footer>

</body>
</html>