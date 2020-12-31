<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials/header')
</head>
<body>
    @include('partials/nav')
    <div class="container">
        @yield('content')
    </div>
    @include('partials/footer')
    @include('partials/footer-script')
</body>

</html>
