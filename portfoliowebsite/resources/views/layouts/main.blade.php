<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--<link rel="stylesheet" href="{{ asset('build/asset/app.css')}}"-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header>
       @yield('header')
    </header> 
    
    <main>
        
    </main>

    <footer>
        
    </footer>
</body>
</html>