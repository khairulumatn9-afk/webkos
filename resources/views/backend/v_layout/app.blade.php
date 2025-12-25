<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard Kos')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">

        {{-- SIDEBAR --}}
        <div class="col-md-2 p-0">
           @include('backend.v_layout.sidebar')
        </div>

        {{-- CONTENT --}}
        <div class="col-md-10 p-4 bg-light min-vh-100">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>
