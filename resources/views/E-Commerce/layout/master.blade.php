<!DOCTYPE html>
<html lang="en">

<head>
    @include('E-Commerce.layout.css')
</head>

<body>
    @include('E-Commerce.layout.head')

    @yield('content')
    <!-- end logo carousel -->
    @include('E-Commerce.layout.footer')

    @include('E-Commerce.layout.script')
</body>

</html>
