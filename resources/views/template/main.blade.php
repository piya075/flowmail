<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @yield('meta')
    @include('template.css.main')
    @yield('css')
</head>
<body class="theme-red">
    @include('template.menu.navbar')
    @include('template.menu.slidebar')
    <section class="content">
        @yield('contents')
    </section>
    @include('template.modal.main')
    @include('template.js.main')
    @yield('script')
</body>
</html>