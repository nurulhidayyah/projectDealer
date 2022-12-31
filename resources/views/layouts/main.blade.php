<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dealer Honda | {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/style.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/owl.carousel.js"></script>
</head>

<body>
    @include('partials.navbar')

    @yield('container')

    <footer class="bg-dark text-white text-center pb-2">
        {{-- <p>Creaded With &copy; <i class="bi bi-suit-heart-fill text-danger "></i> <a
                href="https://instagram.com/agusmfth_/">TheBungsuFreelance</a></p> --}}
        <strong>Copyright &copy; 2023 <i class="bi bi-suit-heart-fill text-danger "></i> <a href="#" class="text-decoration-none">TBF Official</a></strong> All rights reserved.
    </footer>

    {{-- <script type="text/javascript" src="js/style.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="js/owl.carousel.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
