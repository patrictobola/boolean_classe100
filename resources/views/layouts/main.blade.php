<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean Students</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        @include('includes.header')
    </header>
    <main>
        @include('includes.modal')
        @include('includes.alert')
        @yield('main')
    </main>

    @yield('scripts')
</body>

</html>
