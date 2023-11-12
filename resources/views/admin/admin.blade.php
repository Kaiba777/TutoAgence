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

    

    <div class="container mt-5">
        
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        {{-- @if ($error->any())
            <div class="alert alert-danger">
                <ul class="my-0">
                    @foreach ($error->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        @yield('content')
    </div>
    
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>