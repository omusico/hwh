<!DOCTYPE html>
<html lang="en">
<head>
    @include ('pages._includes.head')
</head>
<body>
@yield('header_declaration')
@include ('pages._includes.header')
@yield('header_extension')
</header>

@yield('content')

@include ('pages._includes.footer')
@include ('pages._includes.foot')

</body>
</html>