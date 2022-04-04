<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    @include('includes.dashboard.styles')

    {{-- Style Datatable --}}
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">

    @yield('styles-addon')

</head>

<body>
    <div id="app">
        @include('includes.dashboard.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>@yield('title-page')</h3>
            </div>
            @yield('content')

            @include('includes.dashboard.footer')
        </div>
    </div>
    @include('includes.dashboard.scripts')
    {{-- datatable script --}}
    <script src="{{ asset('/assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    @yield('scripts-addon')
</body>

</html>
