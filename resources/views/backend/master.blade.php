<!DOCTYPE html>
<html lang="en">
<head> 
    <title>@yield('title')</title>
    @include('backend.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('backend.navbar')
    @include('backend.sidebar')
    @yield('content') 
    @include('backend.footer')
</body>
</html> 