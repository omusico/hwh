<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('landing._includes.head')
    </head>
    <body>
        @include ('landing._includes.header')

        @yield('content')

        @include ('landing._includes.footer')
        @include ('landing._includes.foot')

    </body>
</html>