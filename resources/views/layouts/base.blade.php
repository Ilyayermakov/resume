<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ilya, Ermakov, resume">
    <meta name="description" content="Resume of Ilya Ermakov">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>@yield('page.title', config('app.name'))</title>
    @stack('css')
</head>

<body>
    <div>
        @include('includes.header')
        <main>
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
    <script src="./js/time.js"></script>
    <script src="./js/jquery-3.7.0.js"></script>
    <script src="./js/slide.js"></script>
    <script>
        document.querySelector('.change').addEventListener('click', () => {
            const pricelist = document.querySelector('.toChange');
            pricelist.classList.toggle('active');
        });
    </script>
</body>

</html>
