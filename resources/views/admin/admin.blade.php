<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Administration</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Agence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
                $route = request()->route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- Permet de savoir où l'on se trouve --}}
                        <a href="{{ route('admin.property.index') }}" @class(['nav-link', 'active' => str_contains($route, 'property.')])>Gérer les biens</a>
                    </li>
                    <li class="nav-item">
                        {{-- Permet de savoir où l'on se trouve --}}
                        <a href="{{ route('admin.option.index') }}" @class(['nav-link', 'active' => str_contains($route, 'option.')])>Gérer les options</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container mt-5">
        
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        {{-- Affiche les erreurs --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="my-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
    
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>