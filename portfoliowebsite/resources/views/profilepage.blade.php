<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite('resources/css/profilepage.css')
    @vite('resources/js/profilepage.js')
</head>
<body>
        <header>
    <ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("about")}}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("skills")}}">Skills</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("contact")}}">Contact</a>
    </li>
    <li class="nav-item">
    <div class="dropdown">
                <button class="btn text-primary border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    &#8942; <!-- Three vertical dots (⋮) -->
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                    <li><a class="dropdown-item" href="#">Share</a></li>
                </ul>
            </div>
    </li>
    </ul>
    </header>
      
</body>
</html>