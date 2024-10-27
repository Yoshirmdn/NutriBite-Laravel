<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nutribite - Administrator</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #e8c6b7;
    }
</style>

<body>
    <x-navbar-administrator></x-navbar-administrator>
    <main>
        <div>
            {{ $slot }}
        </div>
    </main>
    {{-- <x-footer></x-footer> --}}
</body>

</html>
