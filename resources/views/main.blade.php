<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? 'Fajar Aulia |' + $title : 'Fajar Aulia' }}</title>
    <link rel="stylesheet" href="{{ url('scss/style.css') }}">
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />
</head>

<body>
    <header>
        <nav class="container-fluid bg-primary">
            <nav id="navbar">
                <input type="checkbox" id="nav-toggle">
                <h1 class="logo display">FajarAulia</h1>
                <label for="nav-toggle" class="icon-bars">
                    <i class="bi bi-list"></i>
                </label>
                <ul class="nav-item">
                    <li class="list"><a href="#about">About</a></li>
                    <li class="list"><a href="#skills">Skills</a></li>
                    <h1><a class="logo" href="#hero">FajarAulia</a></h1>
                    <li class="list"><a href={{ isset($title) ? '/portfolio' : '#portfolio' }}>Portfolio</a></li>
                    <li class="list"><a href="#contact">Contact</a></li>
                </ul>

            </nav>
    </header>
    @yield('body')
    <footer>
        <div class="container-fluid">
            <div class="d-flex">
                <p class="flex-1">&#169;Copyright 2023</p>
                <p class="flex-1">Fajar Aulia</p>
                <div class="d-flex">
                    <a class="text-color-white" href="https://www.linkedin.com/in/fajarauliaanugrah/"><i
                            class="bi bi-linkedin"></i></a>
                    <a class="text-color-white" href="https://wa.me/6281268888199"><i class="bi bi-phone"></i></a>
                    <a class="text-color-white" href="mailto: fajaarauliiaa@gmail.com"><i
                            class="bi bi-envelope-at"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ url('app.js') }}"></script>
</body>

</html>
