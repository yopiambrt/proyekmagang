<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!--  -->
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Home Page | Govio</title>
</head>

<body>
   @include('front.includes.header')
    <!-- Hero 1 -->
    <section id="hero1">
    @yield('hero1')
    </section>
    <!-- Akhir hero 1 -->

    <!-- Hero 2 -->
    <section id="hero2">
    @yield('hero2')
    </section>
    <!-- Akhir Hero 2 -->

    <!-- Section 3 -->
    <section id="hero3">
    @yield('hero3')
    </section>

    <!-- Section 4 -->
    <section id="hero4">
    @yield('hero4')
    </section>
    
    <!-- Section 5 -->
    <section id="hero5">
    @yield('hero5')
    </section>

    @include('front.includes.footer')
    @include('front.includes.js')





</body>

</html>